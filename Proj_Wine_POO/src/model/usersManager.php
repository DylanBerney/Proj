<?php

/**
 * @file      usersManager.php
 * @brief     This model is designed to implements users business logic
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @version   13-APR-2020
 */

/**
 * @brief This function is designed to verify user's login
 * @param $userEmailAddress : must be meet RFC 5321/5322
 * @param $userPsw : users's password
 * @return bool : "true" only if the user and psw match the database. In all other cases will be "false".
 * @throws ModelDataBaseException : will be throw if something goes wrong with the database opening process
 */
class UserManager {

    private $_user;
    private $_password;

    public function __construct(array $donnees) {
        $this->hydrate($donnees);
    }

    public function hydrate(array $donnees) {
        foreach ($donnees as $key => $value) {
            $method = 'set' . ucfirst($key);

            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    public function getUser(UserManager $user) {

        $result = false;

        $strSeparator = '\'';
        $loginQuery = 'SELECT userHashPsw FROM users WHERE userEmailAddress = ' . $strSeparator . $user->user() . $strSeparator;

        require_once 'model/dbConnector.php';
        $query = new ExecuteQuerry();
        $queryResult = $query->executeQueryCheck($loginQuery);


        if (count($queryResult) == 1) {
            $userHashPsw = $queryResult[0]['userHashPsw'];
            $result = password_verify($user->password(), $userHashPsw);
        }
        return $result;
    }

    public function checkIfExistInDB(UserManager $user) {

        $result = false;

        $strSeparator = '\'';
        $loginQuery = 'SELECT userEmailAddress FROM users WHERE userEmailAddress = ' . $strSeparator . $user->user() . $strSeparator;

        require_once 'model/dbConnector.php';
        $queryResult = executeQueryCheck($loginQuery);
        if ($queryResult != null) {
            $result = true;
        }

        return $result;
    }

    
    
    public function user() {
        return $this->_user;
    }

    public function setUser($user) {
        $user = htmlspecialchars($user);

        $this->_user = $user;
    }

    public function password() {
        return $this->_password;
    }

    public function setPassword($password) {
        $password = htmlspecialchars($password);

        $this->_password = $password;
    }

    function isLoginCorrect($userEmailAddress, $userPsw) {
        $result = false;

        $strSeparator = '\'';
        $loginQuery = 'SELECT userHashPsw FROM users WHERE userEmailAddress = ' . $strSeparator . $userEmailAddress . $strSeparator;

        require_once 'model/dbConnector.php';
        $queryResult = executeQuerySelect($loginQuery);

        if (count($queryResult) == 1) {
            $userHashPsw = $queryResult[0]['userHashPsw'];
            $result = password_verify($userPsw, $userHashPsw);
        }
        return $result;
    }

    /**
     * @brief This function is designed to register a new account
     * @param $userEmailAddress : must be meet RFC 5321/5322
     * @param $userPsw : user's password
     * @return bool : "true" only if the user doesn't already exist. In all other cases will be "false".
     * @throws ModelDataBaseException : will be throw if something goes wrong with the database opening process
     */
    function registerNewAccount($userEmailAddress, $userPsw) {
        $result = false;

        $strSeparator = '\'';

        $userHashPsw = password_hash($userPsw, PASSWORD_DEFAULT);

        $registerQuery = 'INSERT INTO users (`userEmailAddress`, `userHashPsw`) VALUES (' . $strSeparator . $userEmailAddress . $strSeparator . ',' . $strSeparator . $userHashPsw . $strSeparator . ')';

        require_once 'model/dbConnector.php';
        $queryResult = executeQueryInsert($registerQuery);
        if ($queryResult) {
            $result = $queryResult;
        }
        return $result;
    }

}

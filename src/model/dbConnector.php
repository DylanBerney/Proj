<?php
/**
 * @file      dbConnector.php
 * @brief     This controller is designed to manage database accesses and transactions
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @author    Updated by Luca.Bassi
 * @version   11-NOV-2020
 */

/**
 * @brief This function is designed to execute a query received as parameter
 * @param $query : must be correctly build for sql (syntaxis)
 * @return array|null : get the query result (can be null)
 * @remark : http://php.net/manual/en/pdo.prepare.php
 * @throws ModelDataBaseException : will be throw if something goes wrong with the database opening process
 */

function executeQueryCheck($query)
{
    $queryResult = null;

    $dbConnexion = openDBConnexion();//open database connexion
    if ($dbConnexion != null) {

            $statement = $dbConnexion->prepare($query);//prepare query
            $statement->execute();//execute query
            $queryResult = $statement->fetchAll();//prepare result for client
           

    }
    $dbConnexion = null;//close database connexion
    return $queryResult;
}


function executeQuerySelect($query)
{
    $queryResult = null;

    $dbConnexion = openDBConnexion();//open database connexion
    if ($dbConnexion != null) {

            $statement = $dbConnexion->prepare($query);//prepare query
            $statement->execute();//execute query
            $queryResult = $statement->fetchAll();//prepare result for client
            if ($queryResult== null){
                throw new ModelDataBaseException('Msg pour devs : Un problème est surrvenu la preparation de la vue dans la BD!');
            }

    }
    $dbConnexion = null;//close database connexion
    return $queryResult;
}

/**
 * @brief This function is designed to insert value in database
 * @param $query
 * @return bool|null : $statement->execute() returns true is the insert was successful
 * @throws ModelDataBaseException : will be throw if something goes wrong with the database opening process
 */
function executeQueryInsert($query)
{
    $queryResult = null;

    $dbConnexion = openDBConnexion();//open database connexion
    if ($dbConnexion != null) {

        $statement = $dbConnexion->prepare($query);//prepare query
        $queryResult = $statement->execute();//execute query
    }
   // $dbConnexion = null;//close database connexion
    return $queryResult;
}



function executeQueryUpdate($query, $param)
{
    
        $queryResult = null;

        $dbConnexion = openDBConnexion();//open database connexion
        if ($dbConnexion != null) {

            $stmt = $dbConnexion->prepare($query);
            foreach ($param as $key => &$val) {

                $stmt->bindValue($key, $val);
            }

            $stmt->execute();

        }
       // $dbConnexion = null;//close database connexion
//    return $queryResult;
        return $queryResult;    
}

/**
 * @brief This function is designed to manage the database connexion. Closing will be not proceeded there. The client is responsible of this.
 * @return PDO|null
 * @remark : http://php.net/manual/en/pdo.construct.php
 * @throws ModelDataBaseException : will be throw if something goes wrong with the database opening process
 */
function openDBConnexion()
{
   // $tempDbConnexion = null;

    $sqlDriver = 'mysql';
    $hostname = 'localhost';
    $port = 3306;
    $charset = 'utf8';
    $dbName = 'wines';
    $userName = 'root';
    $userPwd = 'root';
    $dsn = $sqlDriver . ':host=' . $hostname . ';dbname=' . $dbName . ';port=' . $port . ';charset=' . $charset;

    try {
        $tempDbConnexion = new PDO($dsn, $userName, $userPwd);
    } catch (PDOException $exception) {
        throw new ModelDataBaseException('Msg pour devs : Un problème est surrvenu lors de la connexion a la base de donnée !');
    }
    return $tempDbConnexion;
}

/**
 * Class ModelDataBaseException
 * @brief This class is designed to manage specific model exception
 */
class ModelDataBaseException extends Exception
{

}
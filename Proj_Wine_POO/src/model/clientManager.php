<?php

/**
 * Description of clientManager
 *
 * @author louc
 */
class clientManager {
    
    private $_country;
    private $_firstname;
    private $_lastname;
    private $_address;
  
    
    

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

    
    
    public function order(clientManager $clientDetails) {
         

        $result = false;

        $strSeparator = '\'';
        $orderQuery = 'INSERT INTO clients (firstname, lastname, country, address) VALUES ( "'.$clientDetails->_firstname .'","'.$clientDetails->_lastname .'","'.$clientDetails->_country.'","'.$clientDetails->_address .'")';

        require_once 'model/dbConnector.php';
        $query = new ExecuteQuerry();
        $queryResult = $query->executeQueryInsert($orderQuery);

        return $result;
    
    }


    public function country() {
        return $this->_country;
    }

    public function setCounrty($country) {
        $country = htmlspecialchars($country);

        $this->_country = $country;
    }

    
    
    public function firstname() {
        return $this->_firstname;
    }

    public function setFirstname($firstname) {
        $firstname = htmlspecialchars($firstname);

        $this->_firstname = $firstname;
    }
        
    
    
    public function lastname() {
        return $this->_lastname;
    }

    public function setLastname($lastname) {
        $lastname = htmlspecialchars($lastname);

        $this->_lastname = $lastname;
    }
    

    public function address() {
        return $this->_address;
    }

    public function setAddress($address) {
        $address = htmlspecialchars($address);

        $this->_address = $address;
    }
    

    
}

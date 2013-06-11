<?php

class Application_Model_AdministrateurMapper
{
        protected $_dbTable;
    
    public function setDbTable($dbTable)
    {
        if (is_string($dbTable)) {
            $dbTable = new $dbTable();
        }
        if (!$dbTable instanceof Zend_Db_Table_Abstract) {
            throw new Exception('Invalid table data gateway provided');
        }
        $this->_dbTable = $dbTable;
        return $this;
    }
    
    public function getDbTable()
    {
        if (null === $this->_dbTable) {
            $this->setDbTable('Application_Model_DbTable_Administrateur');
        }
        return $this->_dbTable;
    }
    
        public function fetchAll()
    {
        $resultSet = $this->getDbTable()->fetchAll();
        $entries   = array();
        foreach ($resultSet as $row) {
            $entry = new Application_Model_Administrateur($row->idadministrateur,$row->nom,$row->prenom,$row->email,$row->motpasse,$row->date);
            $entries[] = $entry;
        }
        return $entries;
    }
    
    public function find($id)
    {
        $result = $this->getDbTable()->find($id);
        if (0 == count($result)) {
            return 0;
        }
        else{
            return $id;
        }
              
    }
    
    public function delete($id)
    {
        if($this->getDbTable()->delete('idadministrateur ='.(int)$id)){
            return true;
        }
        else{
            return false;
        }
              
    }
    
    public function save(Application_Model_Administrateur $administrateur)
    {
        $data = array(
            'nom'   => $administrateur->getNom(),
            'prenom' => $administrateur->getPrenom(),
            'email'   => $administrateur->getEmail(),
            'motpasse' => $administrateur->getMotpasse(),
            'date'   => $administrateur->getDate(), 
        );      
        $this->getDbTable()->insert($data);          
    }

}


<?php
include 'dbOperator.php';
class getter
{
    public $cont;
    public  function __construct($db)
    {
        $this->cont = new dbOperator($db);
        $this->cont->conn();
    }
    public function getData($tableName)
    {
        $this->cont->setTableName($tableName);
        return $this->cont->getPackage();
    }
}

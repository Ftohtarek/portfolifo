<?php
include '../../back/dbOperator.php';
class getter
{
    private $cont;
    public  $getPackage;
    public  function __construct($tableName)
    {
        $this->cont = new dbOperator('cv');
        $this->cont->conn();
        $this->cont->setTableName($tableName);
        $this->getPackage = $this->cont->getPackage();
    }
}

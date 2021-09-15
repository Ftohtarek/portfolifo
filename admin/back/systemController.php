<?php
session_start();
include 'dbOperator.php';
include 'function.php';
include 'validator.php';
class systemController
{
    use validator;
    private $requsetType;
    private $crudOperatorType;
    private $requsets;
    private $from;
    private $tableName;
    private $validation;
    private $sucuss;
    private $fileImg;
    public function __construct()
    {
        $this->requsetType = $_SERVER['REQUEST_METHOD'];
        $this->from = $_SERVER['HTTP_REFERER'];
        $this->requsets = $_REQUEST;
        $this->cleanDetactor();
        // -------------------------------------
        // file request design
        $this->fileImg = [
            'about',
            'service',
            'product'
        ];
        $this->validation =
            [
                'user' => 'checkEmailExsit'
            ];
    }

    public function runSystem()
    {
        if (in_array($this->crudOperatorType, ['add', 'delete', 'updata', 'login', 'logout'])) {
            $this->kernel();
        }
    }

    private function cleanDetactor()
    {
        // -------------------------------------- from is should be the file that request come from   --------------------------------
        $sectionName = explode('/', $this->from);
        /* set pointer in last element */
        $this->from = end($sectionName);
        /* the pointer now in the last element prev() will get the element previous the pointer*/
        $this->tableName = prev($sectionName);
        // ------------------------now detect the operator ----------------------------
        $requestsKey = array_keys($this->requsets);
        $this->crudOperatorType = end($requestsKey);
    }

    private function kernel()
    {
        // ------------------------we have three main operator (add,delete,updata)------------------------------
        // this method will execute if there are request of add or delete or updata 
        /* 1-> connect to database  */
        $this->dbconn();
        /* 2-> detect operator requeid*/
        if ($this->crudOperatorType == 'add') {
            $this->addRecordWithHandliation('add');
        } elseif ($this->crudOperatorType == 'delete') {
            $this->deleteRecord();
        } elseif ($this->crudOperatorType == 'updata') {
            $this->updataRecordWithHandliation('updata');
        } elseif ($this->crudOperatorType == 'login') {
            $this->login();
        } elseif ($this->crudOperatorType == 'logout') {
            $this->logout();
        } else {
            echo 'not allowd  how you come here';
        }
        // header("Location:../pages/$this->tableName/$this->from");
    }

    private function dbconn()
    {
        $this->cont = new dbOperator('cv');
        $this->cont->conn();
        $this->cont->setTableName($this->tableName);
    }

    private function testValidationIfThere($operator)
    {
        $condation = true;
        /* check if there is validation for this table */
        if (in_array($this->tableName, array_keys($this->validation))) {
            /* her set your validtioin implemntaion  */
            switch ($this->validation[$this->tableName]) {
                case 'checkEmailExsit':
                    if ($operator == 'updata') {
                        $condation = $this->checkEmailExsit($this->cont, $this->requsets['email'], $this->requsets['id']);
                    } else {
                        $condation = $this->checkEmailExsit($this->cont, $this->requsets['email']);
                    }
                    break;
                default:
                    echo 'error during excute validation';
                    $condation = false;
                    break;
            }
        }
        return $condation;
    }

    private function addRecordWithHandliation($operator)
    {
        if ($this->testValidationIfThere($operator) && $this->handleImg()) {
            /* delete the submit name what ever its name */
            unset($this->requsets[$operator]);
            /* get requset name that must be the same name of col in database */
            $cols = array_keys($this->requsets);
            /* get requset name that must be the same name of col in database */
            $values = array_values($this->requsets);
            /* add record in database */

            $this->cont->addRecord($cols, $values);
            $this->sucuss[] = "record Added succusful";
        }
    }

    private function handleImg()
    {
        $condation = true;
        if (in_array($this->tableName, $this->fileImg)) {
            // Server Storge dierctory
            $imgStorgeDir = realpath('../../image');
            // send file request to clear it and get needed information 
            if ($_FILES['img']['name'] != null) {
                $imgInfo = $this->getClearImageInfo($_FILES['img'], $imgStorgeDir, $this->tableName);
                // test that file is in type that we need
                $valid = $this->imgTypeCheck($imgInfo['type'], ['png', 'jpeg']);
                if ($valid) {
                    // save in server 
                    move_uploaded_file($imgInfo['tmpName'], $imgInfo['saveDir']);
                    // delete old img and add new to requests list to add it to database
                    $oldImg = $imgStorgeDir . '\\' . $this->requsets['img'];
                    if (is_file($oldImg)) {
                        unlink($oldImg);
                    }
                    $this->requsets['img'] = $imgInfo['url'];
                    $condation = true;
                } else {
                    $this->error[] = 'Error During upload Image Please Upload png , jpeg';
                    $condation = false;
                }
            }
        }
        return $condation;
    }

    private function deleteRecord()
    {
        if ($this->cont->delete($this->requsets['id'])) {
            $this->sucuss[] = 'Record delete succusful';
            return 0;
        }
        $this->error[] = 'Error during delete record with id:' . $this->requsets['id'];
    }

    private function updataRecordWithHandliation($operator)
    {
        if ($this->testValidationIfThere($operator) && $this->handleImg()) {
            /* delete the submit add */
            unset($this->requsets[$operator]);
            /* get id of record  then unset it from list */
            $id = $this->requsets['id'];
            unset($this->requsets['id']);
            /* get requset name that must be the same name of col in database */
            $cols = array_keys($this->requsets);
            /* get requset name that must be the same name of col in database */
            $values = array_values($this->requsets);
            /* add record in database */
            if ($this->cont->updata($id, $cols, $values)) {
                $this->sucuss[] = 'the record ' . $id . ' updata sucussful';
            } else {
                $this->error[] = 'Error During updata record ';
            }
        }
    }

    public function login()
    {
        $email = $this->requsets['email'];
        $password = $this->requsets['password'];

        $this->cont->setTableName('user');
        echo $this->cont->tableName;
        if ($this->cont->find('email', $email)) {
            $check = $this->cont->conn()->prepare("SELECT id FROM user where email=? AND password=? LIMIT 1");
            $check->execute([$email, $password]);
            if (empty($check->fetchAll())) {
                header('Location:../login.php');
                $this->error[] = 'Password is Wrong';
            } else {
                $_SESSION['key'] = 'true';
                header('Location:../index.php');
            }
        } else {
            header('Location:../login.php');
            $this->error[] = 'Email is Wrong';
        }
    }

    public function logout()
    {
        unset($_SESSION['key']);
        header('Location:../login.php');
    }

    public function __destruct()
    {
        $_SESSION['sucuss'] = $this->sucuss;
        $_SESSION['userError'] = $this->error;
    }
}

$control = new systemController();
$control->runSystem();

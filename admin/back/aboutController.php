<?php
session_start();
include 'dbOperator.php';
include 'validator';

class controller
{
    use validator;
    public $cont;
    private $sucuss;
    public  $imgStorgeDir;

    public function __construct()
    {
        $this->cont = new dbOperator('cv');
        $this->cont->conn();
        $this->cont->setTableName('about');
        $this->imgStorgeDir = realpath('../../image');
    }

    public function updata($id, $name, $jop, $desc, $age, $gender, $form, $liveIn, $imgUrl)
    {
        if ($this->error == null) {
            $col = ['name', 'jop', 'description', 'age', 'gender', 'fromLocation', 'live_in', 'img'];
            $values = [$name, $jop, $desc, $age, $gender, $form, $liveIn, $imgUrl];
            $this->cont->updata($id, $col, $values);
            $this->sucuss[] = 'The Record Updata succussfuly congradulation ';
            header('Location:../pages/about/aboutData.php');
            return 0;
        }
        $this->error[] = 'No Record by this Id :' . $id;
        header('Location:../pages/about/aboutData.php');
    }

    public function handalImg($img, $oldImg)
    {
        $imgTmpName = $img['tmp_name'];
        $imgName =  explode('\\', $imgTmpName);
        $imgName = explode('.', end($imgName))[0];
        $imgType = explode('/', $img['type'])[1];

        $valid = $this->imgTypeCheck($imgType, ['png', 'jpeg']);
        if ($valid) {
            $imgUrl = 'about' . $imgName . '.' . $imgType;
            $imgDir = $this->imgStorgeDir . '\\about' . $imgName . '.' . $imgType;
            move_uploaded_file($imgTmpName, $imgDir);
            unlink("$this->imgStorgeDir\\$oldImg");
            return $imgUrl;
        }
        $this->error[] = 'Error During upload Image Please Upload png , jpeg';
    }

    public function __destruct()
    {
        $_SESSION['userError'] = $this->error;
        $_SESSION['sucuss'] = $this->sucuss;
    }
}

if (isset($_POST['updataRecord'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $jop = $_POST['jop'];
    $desc = $_POST['description'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $form = $_POST['fromLocation'];
    $liveIn = $_POST['live_in'];
    $newImg = $_FILES['img'];
    $oldImg = $_POST['imgTester'];
    $aboutController = new controller();

    if ($newImg['name'] == null) {
        $imgUrl = $oldImg;
    } else {
        $imgUrl = $aboutController->handalImg($newImg, $oldImg);
    }
    $aboutController->updata($id, $name, $jop, $desc, $age, $gender, $form, $liveIn, $imgUrl);
}

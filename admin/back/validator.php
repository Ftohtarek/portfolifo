<?php
trait validator
{
    private $error;
    public function checkStrLen(string $str, int $length = 3, $maxLength = 1000)
    {
        if (strlen($str) < $length) {
            $this->error[] = "the '$str'  is Too short";
            return 'true';
        } elseif (strlen($str) > $maxLength) {
            $this->error[] = "the '$str'  is very long";
            return 'false';
        } else {
            return 'wtf';
        }
    }
    public function checkStrGroup(array $srtgroup)
    {
        foreach ($srtgroup as $val) {
            $this->checkStrLen($val);
        }
    }

    public function checkEmailExsit($cont, $email, $exceptId = 0)
    {
        if ($cont->find('email', $email, $exceptId)) {
            $this->error[] = "$email is Aready Used Before";
            return false;
        }
        return true;
    }

    private function getClearImageInfo($imgFile, $serverDir, $tableName)
    {
        $imgTmpName = $imgFile['tmp_name'];
        $imgNewName =  explode('\\', $imgTmpName);
        $imgNewName = explode('.', end($imgNewName))[0];
        $imgType = explode('/', $imgFile['type'])[1];
        $imgUrl = $tableName . $imgNewName . '.' . $imgType;
        $imgServerDir = $serverDir . '\\' . $tableName . $imgNewName . '.' . $imgType;
        return [
            'tmpName' => $imgTmpName,
            'name' => $imgNewName,
            'type' => $imgType,
            'url' => $imgUrl,
            'saveDir' => $imgServerDir
        ];
    }

    private  function imgTypeCheck($imgType, array $types)
    {
        if (in_array($imgType, $types)) {
            return true;
        }
        return false;
    }
}

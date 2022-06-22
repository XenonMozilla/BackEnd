<?php

class ModeleUser{ //changer nom modele

    private $idc;
    private function connexion() {

    $this->idc = new PDO("mysql:host=localhost;  dbname=menuiz-jo", 'root', '');
    }

    //C

    public function createUsr($adr, $mail, $pass, $first, $last, $userna, $uty){ // changer nom fonct et info
        $this -> connexion();
        $res = $this->idc->prepare("INSERT into t_d_user_usr(ADR_ID, USR_MAIL, USR_PASSWORD, USR_FIRSTNAME, USR_LASTNAME, USR_USERNAME, UTY_ID) values(?,?,?,?,?,?,?)");
        $res -> execute($adr, $mail, $pass, $first, $last, $userna, $uty);
    }


    //R

    public function readUsrAll(){
        $this -> connexion();
        $res = $this->idc->prepare("SELECT * from t_d_user_usr");
        $res -> execute();
        return $res;
    }


    //U

        public function UpdateUsr($userId, $adr, $mail, $pass, $first, $last, $userna, $uty){
        $this -> connexion();
        $res = $this->idc->prepare("UPDATE t_d_user_usr SET ADR_ID = ?, USR_MAIL = ?, USR_PASSWORD = ?, USR_FIRSTNAME = ?, USR_LASTNAME = ?, USR_USERNAME = ?, UTY_ID = ? where _ID = ".$userId."");
        $res -> execute($adr, $mail, $pass, $first, $last, $userna, $uty);
    }

    //D

    public function DeleteUsr($userId){
        $this -> connexion();
        $res = $this->idc->prepare("DELETE t_d_user_usr where  = ".$userId."");
        $res -> execute();
    }

}

?>
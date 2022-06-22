<?php

class ModeleOrderStatus{ //changer nom modele

    private $idc;
    private function connexion() {

    $this->idc = new PDO("mysql:host=localhost;  dbname=menuiz-jo", 'root', '');
    }

    //C

    public function create($wording){ // changer nom fonct et info
        $this -> connexion();
        $res = $this->idc->prepare("INSERT into t_d_orderstatus_oss(OSS_WORDING) values(?)");
        $res -> execute($wording);
    }


    //R

    public function readAll(){
        $this -> connexion();
        $res = $this->idc->prepare("SELECT * from t_d_orderstatus_oss");
        $res -> execute();
        return $res;
    }


    //U

        public function Update($OsId, $wording){
        $this -> connexion();
        $res = $this->idc->prepare("UPDATE t_d_orderstatus_oss SET OSS_WORDING = ? where OSS_ID = ".$OsId."");
        $res -> execute($wording);
    }

    //D

    public function Delete($OsId){
        $this -> connexion();
        $res = $this->idc->prepare("DELETE t_d_orderstatus_oss where OSS_ID = ".$OsId."");
        $res -> execute();
    }

}

?>
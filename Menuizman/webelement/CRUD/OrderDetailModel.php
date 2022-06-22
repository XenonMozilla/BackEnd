<?php

class ModeleOrderDetail{

    private $idc;
    private function connexion() {

    $this->idc = new PDO("mysql:host=localhost;  dbname=menuiz-jo", 'root', '');
    }

    //C

    public function createOD($prd, $exp, $quant, $canceled){
        $this -> connexion();
        $res = $this->idc->prepare("INSERT into t_d_orderdetails_odt(PRD_ID, EXP_ID, ODT_QUANTITY, ODT_ISCANCELED) values(?,?,?,?)");
        $res -> execute($prd, $exp, $quant, $canceled);
    }

    //R

    public function readODAll(){
        $this -> connexion();
        $res = $this->idc->prepare("SELECT * from t_d_orderdetails_odt");
        $res -> execute();
        return $res;
    }


    //U

    public function UpdateOD($OdId, $prd, $exp, $quant, $canceled){
        $this -> connexion();
        $res = $this->idc->prepare("UPDATE t_d_orderdetails_odt SET PRD_ID = ?, EXP_ID = ?, ODT_QUANTITY = ?, ODT_ISCANCELED = ? where _ID = ".$OdId."");
        $res -> execute();
    }


    //D

    public function DeleteOD($OdId){
        $this -> connexion();
        $res = $this->idc->prepare("DELETE t_d_orderdetails_odt where OHR_ID = ".$OdId."");
        $res -> execute();
    }

}

?>
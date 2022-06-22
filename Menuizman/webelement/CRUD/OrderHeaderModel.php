<?php

class ModeleOrderHeader{

    private $idc;
    private function connexion() {

    $this->idc = new PDO("mysql:host=localhost;  dbname=menuiz-jo", 'root', '');
    }

    //C

    public function createOH($liv,$fac,$pmt,$oss,$ety,$usr,$numb,$date){
        $this -> connexion();
        $res = $this->idc->prepare("INSERT into t_d_orderheader_ohr(ADR_ID_LIV,ADR_ID_FAC,PMT_ID,OSS_ID,ETY_ID,USR_ID,OHR_NUMBER,OHR_DATE) values(?,?,?,?,?,?,?,?)");
        $res -> execute($liv,$fac,$pmt,$oss,$ety,$usr,$numb,$date);
    }

    //R

    public function readOHAll(){
        $this -> connexion();
        $res = $this->idc->prepare("SELECT * from t_d_orderheader_ohr");
        $res -> execute();
        return $res;
    }

    public function readOHInfo($OHinfo, $OHWhere){
        $this -> connexion();
        $res = $this->idc->prepare("SELECT * from t_d_orderheader_ohr where ".$OHWhere." = ".$OHInfo."");
        $res -> execute();
        return $res;
    }

    public function readOHInfoPart($OHinfo, $OHWhere){
        $this -> connexion();
        $res = $this->idc->prepare("SELECT * from t_d_orderheader_ohr where ".$OHWhere." like '%".$OHInfo."%'");
        $res -> execute();
        return $res;
    }

    //U

    public function UpdateOH($OhId, $liv,$fac,$pmt,$oss,$ety,$usr,$numb,$date){
        $this -> connexion();
        $res = $this->idc->prepare("UPDATE t_d_orderheader_ohr SET ADR_ID_LIV = ?, ADR_ID_FAC = ?, PMT_ID = ?, OSS_ID = ?, ETY_ID = ?, USR_ID = ?, OHR_NUMBER = ?, OHR_DATE = ? where OHR_ID = ".$OhId."");
        $res -> execute($liv,$fac,$pmt,$oss,$ety,$usr,$numb,$date);
    }


    //D

    public function DeleteOH($OhId){
        $this -> connexion();
        $res = $this->idc->prepare("DELETE t_d_orderheader_ohr where OHR_ID = ".$OhId."");
        $res -> execute();
    }

}

?>
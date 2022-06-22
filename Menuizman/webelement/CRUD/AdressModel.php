<?php

class ModeleAdresse{ //changer nom modele

    private $idc;
    private function connexion() {

    $this->idc = new PDO("mysql:host=localhost;  dbname=menuiz-jo", 'root', '');
    }

    //C

    public function createAddr($First, $Last, $Line1, $Line2, $Line3, $Zip, $City, $Country, $Mail, $Phone){ // changer nom fonct et info
        $this -> connexion();
        $res = $this->idc->prepare("INSERT into t_d_address_adr(ADR_FIRSTNAME, ADR_LASTNAME, ADR_LINE1, ADR_LINE2, ADR_LINE3, ADR_ZIPCODE, ADR_CITY, ADR_COUNTRY, ADR_MAIL, ADR_PHONE) values(?,?,?,?,?,?,?,?,?,?)");
        $res -> execute($First, $Last, $Line1, $Line2, $Line3, $Zip, $City, $Country, $Mail, $Phone);
    }


    //R

    public function readAddrAll(){
        $this -> connexion();
        $res = $this->idc->prepare("SELECT * from t_d_address_adr");
        $res -> execute();
        return $res;
    }

    public function ReadAddrById($AdId){
        $this->connexion();
        $res = $this->idc->prepare("SELECT ADR.* FROM T_D_ADDRESS_ADR ADR where ADR_ID= " . $AdId . "");
        $res->execute();
        return $res;
    }

    public function RecupAddressByUser($usrid){
        $this->connexion();
        $query="
        select ohr.usr_id,
            adr.*,
            adr_firstname + ' ' + adr_lastname  + CHAR(13) +
            adr_line1 + CHAR(13) + adr_line2 + CHAR(13) +
            adr_line3 + CHAR(13) + 
            adr_zipcode + ' ' + adr_city + CHAR(13)
            + adr_country as completadress
        from t_d_address_adr adr 
        inner join t_d_orderheader_ohr ohr on adr.ADR_ID=ohr.ADR_ID_FAC 
        where usr_id=" . $usrid . "
        union
        select ohr.usr_id,
            adr.*,
            adr_firstname + ' ' + adr_lastname  + CHAR(13) +
            adr_line1 + CHAR(13) + adr_line2 + CHAR(13) +
            adr_line3 + CHAR(13) + 
            adr_zipcode + ' ' + adr_city + CHAR(13)
            + adr_country as completadress
        from t_d_address_adr adr 
        inner join t_d_orderheader_ohr ohr on adr.ADR_ID=ohr.ADR_ID_liv  
        where  USR_ID=" . $usrid . "
        union 
        select usr.usr_id, 
            adr.*,
            adr_firstname + ' ' + adr_lastname  + CHAR(13) +
            adr_line1 + CHAR(13) + adr_line2 + CHAR(13) +
            adr_line3 + CHAR(13) + 
            adr_zipcode + ' ' + adr_city + CHAR(13)
            + adr_country as completadress
        from t_d_address_adr adr 
        inner join t_d_user_usr usr on adr.ADR_ID=usr.ADR_ID  
        where  USR_ID= " . $usrid . ";";
        $res = $this->idc->prepare($query);
        $res->execute();
        return $res;
    }


    //U


    //D

    public function DeleteAddr($AdId){
        $this -> connexion();
        $res = $this->idc->prepare("DELETE t_d_address_adr where ADR_ID = ".$AdId."");
        $res -> execute();
    }

}

?>
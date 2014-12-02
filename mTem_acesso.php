<?php
/**
 * Created by IntelliJ IDEA.
 * User: lucas
 * Date: 25/11/14
 * Time: 02:23
 */

require_once("dbteste.php");

class mTem_acesso extends Db {
    private $GID;
	private $NumeroSala;

    public function getGID(){
        return $this->GID;
    }


    public function setGID($GID){
        $this->GID=$GID;
    }
    public function getNumeroSala(){
        return $this->NumeroSala;
    }


    public function setNumeroSala($NumeroSala){
        $this->NumeroSala=$NumeroSala;
    }


}
?>

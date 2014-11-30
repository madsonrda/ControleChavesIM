<?php
/**
 * Created by IntelliJ IDEA.
 * User: lucas
 * Date: 25/11/14
 * Time: 02:23
 */

require_once("../db/db.class.php");

class mChave extends Db {
    private $NumeroSala;

    public function getNumeroSala(){
        return $this->NumeroSala;
    }


    public function setNumeroSala($NumeroSala){
        $this->NumeroSala=$NumeroSala;
    }

}
?>

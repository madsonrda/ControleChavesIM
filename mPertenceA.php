<?php
/**
 * Created by IntelliJ IDEA.
 * User: lucas
 * Date: 25/11/14
 * Time: 02:23
 */

require_once("dbteste.php");

class mPertenceA extends Db {
    private $GID;
	private $UID;

    public function getGID(){
        return $this->GID;
    }


    public function setGID($GID){
        $this->GID=$GID;
    }
    public function getUID(){
        return $this->UID;
    }


    public function setUID($UID){
        $this->UID=$UID;
    }


}
?>

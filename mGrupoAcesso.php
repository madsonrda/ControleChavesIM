<?php
/**
 * Created by IntelliJ IDEA.
 * User: lucas
 * Date: 25/11/14
 * Time: 02:23
 */

require_once("dbteste.php");

class mGrupoAcesso extends Db {
    private $GID;
	private $GrupoNome;

    public function getGID(){
        return $this->GID;
    }


    public function setGID($GID){
        $this->GID=$GID;
    }
    public function getGrupoNome(){
        return $this->GrupoNome;
    }


    public function setGrupoNome($GrupoNome){
        $this->GrupoNome=$GrupoNome;
    }


}
?>

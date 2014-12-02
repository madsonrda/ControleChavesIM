<?php





require_once("dbteste.php");



class mRecurso extends Db {

    private $Descricao;

    private $NumTombo;







    public function getDescricao(){

        return $this->Descricao;

    }



    public function getNumTombo(){

        return $this->NumTombo;

    }





    public function setDescricao($descricao){

        $this->Descricao=$descricao;

    }



    public function setNumTombo($tombo){

        $this->NumTombo=$tombo;

    }



}

?>

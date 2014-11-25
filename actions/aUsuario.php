<?php
/**
 * Created by IntelliJ IDEA.
 * User: lucas
 * Date: 25/11/14
 * Time: 09:51
 */
require_once("../model/mUsuario.php");

class aUsuario extends mUsuario {

    protected $sqlInsert="insert into Usuario (UsuarioNome, UsuarioPassword) values ('%s', '%s')";

    protected $sqlUpdate="update Usuario set nome='%s', senha='%s' where UID ='%s' ";

    protected $sqlSelect="select * from Usuario where 1=1 %s %s";

    protected $sqlDelete="delete from Usuario where UID ='%s' ";


    public function Insert(){
        try {
            $sql = sprintf($this->sqlInsert,$this->getNome(),$this->getSenha());
            return $this->RunSelect($sql);
        } catch (Exception $e) {
            echo "Caught exception:",$e->getMessage(), "\n";
        }
    }

    public function Update(){
        try {
            $sql = sprintf($this->sqlUpdate, $this->getNome(), $this->getSenha(), $this->getId());
            return $this->RunSelect($sql);
        } catch (Exception $e) {
            echo "Caught exception:",$e->getMessage(), "\n";
        }
    }

    public function Select($where="",$order="",$rquery=false){
        try {
            $sql = sprintf($this->sqlSelect, $where, $order);
            if ($rquery)
                return $sql;
            else
                return $this->RunSelect($sql);
        } catch (Exception $e) {
            echo "Caught exception:",$e->getMessage(), "\n";
        }
    }

    public function Delete(){
        try {
            $sql = sprintf($this->sqlDelete,$this->getId());
            return $this->RunQuery($sql);
        } catch (Exception $e) {
            echo "Caught exception:",$e->getMessage(), "\n";
        }
    }

    public function load() {
        try {
            $rs = $this->Select(sprintf("and id ='%s' ",$this->getId()));
            $this->setId($rs[0]["id"]);
            $this->setSenha($rs[0]["senha"]);

            return $this;

        } catch (Exception $e) {
            echo "Caught exception:",$e->getMessage(), "\n";
        }
    }

}

?>

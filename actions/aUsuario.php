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

    protected $sqlUpdate="update Usuario set UsuarioNome='%s', UsuarioPassword='%s' where UID ='%s' ";

    protected $sqlSelect="select * from Usuario where 1=1 %s %s";

    protected $sqlDelete="delete from Usuario where UID ='%s' ";


    public function Insert(){
        try {
            $sql = sprintf($this->sqlInsert,$this->getUsuarioNome(),$this->getUsuarioPassword());
            return $this->RunSelect($sql);
        } catch (Exception $e) {
            echo "Caught exception:",$e->getMessage(), "\n";
        }
    }

    public function Update(){
        try {
            $sql = sprintf($this->sqlUpdate, $this->getUsuarioNome(), $this->getUsuarioPassword(), $this->getUID());
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
            $sql = sprintf($this->sqlDelete,$this->getUID());
            return $this->RunQuery($sql);
        } catch (Exception $e) {
            echo "Caught exception:",$e->getMessage(), "\n";
        }
    }

    public function load() {
        try {
            $rs = $this->Select(sprintf("and UID ='%s' ",$this->getUID()));
            $this->setUID($rs[0]["UID"]);
            $this->setUsuarioPassword($rs[0]["UsuarioPassord"]);

            return $this;

        } catch (Exception $e) {
            echo "Caught exception:",$e->getMessage(), "\n";
        }
    }

}

?>

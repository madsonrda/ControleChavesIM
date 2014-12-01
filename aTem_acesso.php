<?php
/**
 * Created by IntelliJ IDEA.
 * User: lucas
 * Date: 25/11/14
 * Time: 09:51
 */
require_once("mTem_acesso.php");

class aTem_acesso extends mTem_acesso {

    protected $sqlInsert="insert into Tem_acesso (GID,NumeroSala) values ('%s','%s')";

    protected $sqlUpdate="update Tem_acesso set NumeroSala='%s' where GID ='%s' ";

    protected $sqlSelect="select * from Tem_acesso where 1=1 %s %s";

    protected $sqlDelete="delete from Tem_acesso where GID ='%s' and NumeroSala = '%s'";



    public function Insert(){
        try {
            $sql = sprintf($this->sqlInsert,$this->getGID,$this->getNumeroSala());
            return $this->RunSelect($sql);
        } catch (Exception $e) {
            echo "Caught exception:",$e->getMessage(), "\n";
        }
    }

    public function Update(){
        try {
            $sql = sprintf($this->sqlUpdate,  $this->getNumeroSala(), $this->getGID());
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
            $sql = sprintf($this->sqlDelete,$this->getGID(),$this->getNumeroSala);
            return $this->RunQuery($sql);
        } catch (Exception $e) {
            echo "Caught exception:",$e->getMessage(), "\n";
        }
    }

    public function load() {
        try {
            $rs = $this->Select(sprintf("and GID ='%s' ",$this->getGID()));
            $this->setGID($rs[0]["GID"]);
            $this->setNumeroSala($rs[0]["NumeroSala"]);

            return $this;

        } catch (Exception $e) {
            echo "Caught exception:",$e->getMessage(), "\n";
        }
    }

}

?>

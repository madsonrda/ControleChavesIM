<?php
/**
 * Created by IntelliJ IDEA.
 * User: lucas
 * Date: 25/11/14
 * Time: 09:51
 */
require_once("../model/mChave.php");

class aChave extends mChave {

    protected $sqlInsert="insert into Chave (NumeroSala) values ('%s')";

    protected $sqlUpdate="update Chave set NumeroSala='%s' where NumeroSala ='%s' ";

    protected $sqlSelect="select * from Chave where 1=1 %s %s";

    protected $sqlDelete="delete from Chave where NumeroSala ='%s' ";


    public function Insert(){
        try {
            $sql = sprintf($this->sqlInsert,$this->getNumeroSala());
            return $this->RunSelect($sql);
        } catch (Exception $e) {
            echo "Caught exception:",$e->getMessage(), "\n";
        }
    }

    public function Update(){
        try {
            $sql = sprintf($this->sqlUpdate,  $this->getNumeroSala(), $this->getNumeroSala());
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
            $sql = sprintf($this->sqlDelete,$this->getNumeroSala());
            return $this->RunQuery($sql);
        } catch (Exception $e) {
            echo "Caught exception:",$e->getMessage(), "\n";
        }
    }

    public function load() {
        try {
            $rs = $this->Select(sprintf("and NumeroSala ='%s' ",$this->getNumeroSala()));
            $this->setNumeroSala($rs[0]["NumeroSala"]);

            return $this;

        } catch (Exception $e) {
            echo "Caught exception:",$e->getMessage(), "\n";
        }
    }

}

?>

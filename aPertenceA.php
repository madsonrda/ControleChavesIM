<?php
/**
 * Created by IntelliJ IDEA.
 * User: lucas
 * Date: 25/11/14
 * Time: 09:51
 */
require_once("mPertenceA.php");

class aPertenceA extends mPertenceA {

    protected $sqlInsert="insert into Pertence_a (UID,GID) values ('%s','%s')";

    protected $sqlUpdate="update Pertence_a set UID='%s' where GID ='%s' ";

    protected $sqlSelect="select * from Pertence_a where 1=1 %s %s";

    protected $sqlDelete="delete from Pertence_a where GID ='%s' and UID = '%s'";



    public function Insert(){
        try {
            $sql = sprintf($this->sqlInsert,$this->getUID(),$this->getGID());
            return $this->RunSelect($sql);
        } catch (Exception $e) {
            echo "Caught exception:",$e->getMessage(), "\n";
        }
    }

    public function Update(){
        try {
            $sql = sprintf($this->sqlUpdate,  $this->getUID(), $this->getGID());
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
            $sql = sprintf($this->sqlDelete,$this->getGID(),$this->getUID());
            return $this->RunQuery($sql);
        } catch (Exception $e) {
            echo "Caught exception:",$e->getMessage(), "\n";
        }
    }

    public function load() {
        try {
            $rs = $this->Select(sprintf("and GID ='%s' ",$this->getGID()));
            $this->setGID($rs[0]["GID"]);
            $this->setUID($rs[0]["UID"]);

            return $this;

        } catch (Exception $e) {
            echo "Caught exception:",$e->getMessage(), "\n";
        }
    }

}

?>

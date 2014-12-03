<?php





require_once("mRecurso.php");



class aRecurso extends mRecurso {



    protected $sqlInsert="insert into Recurso (Descricao, NumeroTombo) values ('%s', '%s')";



    protected $sqlUpdate="update Recurso set Descricao='%s' where NumeroTombo ='%s' ";



    protected $sqlSelect="select * from Recurso where 1=1 %s %s";



    protected $sqlDelete="delete from Recurso where NumeroTombo ='%s' ";





    public function Insert(){

        try {

            $sql = sprintf($this->sqlInsert,$this->getDescricao(),$this->getNumTombo());

            return $this->RunSelect($sql);

        } catch (Exception $e) {

            echo "Caught exception:",$e->getMessage(), "\n";

        }

    }



    public function Update(){

        try {

            $sql = sprintf($this->sqlUpdate, $this->getDescricao(), $this->getNumTombo());

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

            $sql = sprintf($this->sqlDelete,$this->getNumTombo());

            return $this->RunQuery($sql);

        } catch (Exception $e) {

            echo "Caught exception:",$e->getMessage(), "\n";

        }

    }



    public function load() {

        try {

            $rs = $this->Select(sprintf("and NumeroTombo ='%s' ",$this->getNumTombo()));

            $this->setNumTombo($rs[0]["NumeroTombo"]);

            $this->setDescricao($rs[0]["Descricao"]);



            return $this;



        } catch (Exception $e) {

            echo "Caught exception:",$e->getMessage(), "\n";

        }

    }



}



?>

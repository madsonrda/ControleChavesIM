<?php
/**
 * Created by IntelliJ IDEA.
 * User: lucas
 * Date: 25/11/14
 * Time: 09:51
 */
require_once("mGrupoAcesso.php");

class aGrupoAcesso extends mGrupoAcesso {

    protected $sqlInsert="insert into GrupoAcesso (GrupoNome) values ('%s')";

    protected $sqlUpdate="update GrupoAcesso set GrupoNome='%s' where GID ='%s' ";

    protected $sqlSelect="select * from GrupoAcesso where 1=1 %s %s";

    protected $sqlDelete="delete from GrupoAcesso where GID ='%s' ";
    
    protected $sqlSelectChaves="select Chave.* from Tem_acesso, Chave
				Where Tem_acesso.GID='%s' 
				and Tem_acesso.NumeroSala=Chave.NumeroSala";

    protected $sqlSelectUsuarios="select Usuario.* from Pertence_a, Usuario
                                Where Pertence_a.GID='%s' 
                                and Pertence_a.UID=Usuario.UID";


   public function SelectChaves(){
	try {
            $sql = sprintf($this->sqlSelectChaves,$this->getGID());
            return $this->RunSelect($sql);
        } catch (Exception $e) {
            echo "Caught exception:",$e->getMessage(), "\n";
        }
    }

   public function SelectUsuarios(){
        try {
            $sql = sprintf($this->sqlSelectUsuarios,$this->getGID());
            return $this->RunSelect($sql);
        } catch (Exception $e) {
            echo "Caught exception:",$e->getMessage(), "\n";
        }
    }


    public function Insert(){
        try {
            $sql = sprintf($this->sqlInsert,$this->getGrupoNome());
            return $this->RunSelect($sql);
        } catch (Exception $e) {
            echo "Caught exception:",$e->getMessage(), "\n";
        }
    }

    public function Update(){
        try {
            $sql = sprintf($this->sqlUpdate,  $this->getGrupoNome(), $this->getGID());
            return $this->RunSelect($sql);
echo "oi";
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
            $sql = sprintf($this->sqlDelete,$this->getGID());
            return $this->RunQuery($sql);
        } catch (Exception $e) {
            echo "Caught exception:",$e->getMessage(), "\n";
        }
    }

    public function load() {
        try {
            $rs = $this->Select(sprintf("and GID ='%s' ",$this->getGID()));
            $this->setGID($rs[0]["GID"]);
            $this->setGrupoNome($rs[0]["GrupoNome"]);

            return $this;

        } catch (Exception $e) {
            echo "Caught exception:",$e->getMessage(), "\n";
        }
    }

}

?>

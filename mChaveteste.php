<?php
/**
 * Created by IntelliJ IDEA.
 * User: lucas
 * Date: 25/11/14
 * Time: 02:23
 */

require_once("dbteste.php");

class mChave extends Db {
    private $NumeroSala;

        function __construct(){
                parent::__construct();
                print "construtor mchave\n";
                echo "desgraça";
        }

    public function getNumeroSala(){
        return $this->NumeroSala;
    }


    public function setNumeroSala($NumeroSala){
        $this->NumeroSala=$NumeroSala;
    }

}
?>

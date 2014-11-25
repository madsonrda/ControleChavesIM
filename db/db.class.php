<?php
/**
 * Created by IntelliJ IDEA.
 * User: lucas
 * Date: 25/11/14
 * Time: 01:53
 */

require_once '../config/cfChavesIM.php';

class Db extends Config {

    private $user = "root"; // root
    private $pass = ""; // servidor
    private $host = "localhost"; // em que maquina esta o BD
    private $database = "mydb"; // nome do BD

    private function Connect() {
        $conn = new PDO("mysql:host=$this->host;dbname=$this->database",
            $this->user, $this->pass);
        return $conn;
    }

    public function RunQuery($sql) {
        $stm = $this->Connect()->prepare($sql);
        return $stm->execute();
    }

    public function RunSelect($sql) {
        $stm = $this->Connect()->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

}

?>
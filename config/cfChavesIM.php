<?php
/**
 * Created by IntelliJ IDEA.
 * User: lucas
 * Date: 25/11/14
 * Time: 01:48
 */

ini_set("display_errors",true);

class Config {


    public function dateToBR($dataAmericana){
     $d = explode('-',$dataAmericana);
     $dOK = $d[2].'/'.$d[1].'/'.$d[0];
     return $dOK;
    }

    public function dateToUS($dataBrasil){
     $d = explode('/',$dataBrasil);
     $dOK = $d[2].'-'.$d[1].'-'.$d[0];
     return $dOK;
    }

    public function dateTimeToBR($data_americana_his){
        $d = explode(' ',$data_americana_his);
        $ok =$this->dateToBR($d[0]).' '.$d[1];
        return $ok;
    }

    public function dateTimeToUS($data_br_his){
        $d = explode(' ',$data_br_his);
        $ok = $this->dateToUS($d[0]).' '.$d[1];
        return $ok;
    }
}
?>

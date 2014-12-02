<?php

/**

 * Created by PhpStorm.

 * User: Eslei

 * Date: 02/12/2014

 * Time: 19:03

 */





require_once 'sm.php';

require_once 'Recurso.php';



$a = new Recurso();



if(isset($_POST['Descricao']) and isset($_POST['NumeroTombo']) ){



    if($_POST['Descricao']!= ''  and $_POST['NumeroTombo']){



        // deve cadastrar

        $a->setDescricao($_POST['Descricao']);

        $a->setNumTombo($_POST['NumeroTombo']);



        $a->Insert();



        $sm->assign("done",true);



    }// fim do tem preenchido



}// fim do isset



$sm->display("adm_recurso_cad.tpl");

?>

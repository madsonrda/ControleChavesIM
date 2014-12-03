<?php
/* @var $this EmprestimoChaveController */
/* @var $model EmprestimoChave */

$this->breadcrumbs=array(
	'Empréstimos de Chave'=>array('index'),
	'Create',
);
/*
$this->menu=array(
	array('label'=>'List EmprestimoChave', 'url'=>array('index')),
	array('label'=>'Manage EmprestimoChave', 'url'=>array('admin')),
);

*/
?>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>
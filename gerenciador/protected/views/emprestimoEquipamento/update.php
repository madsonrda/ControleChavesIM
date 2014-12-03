<?php
/* @var $this EmprestimoEquipamentoController */
/* @var $model EmprestimoEquipamento */

$this->breadcrumbs=array(
	'Emprestimo Equipamentos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EmprestimoEquipamento', 'url'=>array('index')),
	array('label'=>'Create EmprestimoEquipamento', 'url'=>array('create')),
	array('label'=>'View EmprestimoEquipamento', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage EmprestimoEquipamento', 'url'=>array('admin')),
);
?>

<h1>Update EmprestimoEquipamento <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
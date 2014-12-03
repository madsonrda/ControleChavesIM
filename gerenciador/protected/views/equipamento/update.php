<?php
/* @var $this EquipamentoController */
/* @var $model Equipamento */

$this->breadcrumbs=array(
	'Equipamentos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Equipamento', 'url'=>array('index')),
	array('label'=>'Create Equipamento', 'url'=>array('create')),
	array('label'=>'View Equipamento', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Equipamento', 'url'=>array('admin')),
);
?>

<h1>Update Equipamento <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
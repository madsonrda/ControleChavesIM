<?php
/* @var $this EquipamentoController */
/* @var $model Equipamento */

$this->breadcrumbs=array(
	'Equipamentos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Equipamento', 'url'=>array('index')),
	array('label'=>'Create Equipamento', 'url'=>array('create')),
	array('label'=>'Update Equipamento', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Equipamento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Equipamento', 'url'=>array('admin')),
);
?>

<h1>View Equipamento #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
		'codigo',
		'quantidade',
	),
)); ?>

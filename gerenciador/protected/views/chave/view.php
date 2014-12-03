<?php
/* @var $this ChaveController */
/* @var $model Chave */

$this->breadcrumbs=array(
	'Chaves'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Chave', 'url'=>array('index')),
	array('label'=>'Create Chave', 'url'=>array('create')),
	array('label'=>'Update Chave', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Chave', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Chave', 'url'=>array('admin')),
);
?>

<h1>View Chave #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'chave',
	),
)); ?>

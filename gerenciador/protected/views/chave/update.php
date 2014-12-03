<?php
/* @var $this ChaveController */
/* @var $model Chave */

$this->breadcrumbs=array(
	'Chaves'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Chave', 'url'=>array('index')),
	array('label'=>'Create Chave', 'url'=>array('create')),
	array('label'=>'View Chave', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Chave', 'url'=>array('admin')),
);
?>

<h1>Update Chave <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
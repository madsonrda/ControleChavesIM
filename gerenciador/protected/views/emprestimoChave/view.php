<?php
/* @var $this EmprestimoChaveController */
/* @var $model EmprestimoChave */

$this->breadcrumbs=array(
	'Emprestimo Chaves'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List EmprestimoChave', 'url'=>array('index')),
	array('label'=>'Create EmprestimoChave', 'url'=>array('create')),
	array('label'=>'Update EmprestimoChave', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete EmprestimoChave', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EmprestimoChave', 'url'=>array('admin')),
);
?>

<h1>View EmprestimoChave #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fk_chave',
		'nome',
		'matricula',
		'data',
	),
)); ?>

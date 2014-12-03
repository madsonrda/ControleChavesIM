<?php
/* @var $this EmprestimoEquipamentoController */
/* @var $model EmprestimoEquipamento */

$this->breadcrumbs=array(
	'Emprestimo Equipamentos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List EmprestimoEquipamento', 'url'=>array('index')),
	array('label'=>'Create EmprestimoEquipamento', 'url'=>array('create')),
	array('label'=>'Update EmprestimoEquipamento', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete EmprestimoEquipamento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EmprestimoEquipamento', 'url'=>array('admin')),
);
?>

<h1>View EmprestimoEquipamento #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fk_equipamento',
		'nome',
		'matricula',
		'horario_entrada',
		'horario_entrega',
	),
)); ?>

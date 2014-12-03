<?php
/* @var $this EmprestimoChaveController */
/* @var $model EmprestimoChave */

$this->breadcrumbs=array(
	'Emprestimo Chaves'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EmprestimoChave', 'url'=>array('index')),
	array('label'=>'Create EmprestimoChave', 'url'=>array('create')),
	array('label'=>'View EmprestimoChave', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage EmprestimoChave', 'url'=>array('admin')),
);
?>

<h1>Update EmprestimoChave <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
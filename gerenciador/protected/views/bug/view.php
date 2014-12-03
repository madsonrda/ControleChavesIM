<?php
$this->breadcrumbs=array(
	'Bugs'=>array('index'),
);

?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'user_id',
		'descricao',
		'data',
	),
)); ?>

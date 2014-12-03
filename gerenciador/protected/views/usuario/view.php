<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

?>

<h1>View Usuario #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'group_id',
		'username',
		'nome',
		'sobrenome',
		'telefone',
		'password',
		'email',
		'home',
		'status',
		'question',
		'answer',
		'creation_date',
		'activation_code',
		'activation_time',
		'last_login',
		'ban',
		'ban_reason',
	),
)); ?>

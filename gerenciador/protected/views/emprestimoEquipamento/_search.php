<?php
/* @var $this EmprestimoEquipamentoController */
/* @var $model EmprestimoEquipamento */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fk_equipamento'); ?>
		<?php echo $form->textField($model,'fk_equipamento',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nome'); ?>
		<?php echo $form->textField($model,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'matricula'); ?>
		<?php echo $form->textField($model,'matricula',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'horario_entrada'); ?>
		<?php echo $form->textField($model,'horario_entrada'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'horario_entrega'); ?>
		<?php echo $form->textField($model,'horario_entrega'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
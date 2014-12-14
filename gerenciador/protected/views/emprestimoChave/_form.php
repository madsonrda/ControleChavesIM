<?php
/* @var $this EmprestimoChaveController */
/* @var $model EmprestimoChave */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'emprestimo-chave-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>
	<?php
    	$modelChave = Chave::model()->findAll();
    	$listChave = CHtml::listData($modelChave, 'id', 'chave');
    ?>
	<div class="form-group  col-lg-4">
		<?php echo $form->labelEx($model,'fk_chave'); ?>
		<?php echo Chtml::dropDownList("EmprestimoChave[fk_chave]",$model,$listChave,
                            array("class"=>"form-control m-bot15", "prompt"=>"Selecione", "style"=> "width:100%;")); ?>
		<?php echo $form->error($model,'fk_chave'); ?>
	</div>

	<div class="form-group  col-lg-4">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>150, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="form-group  col-lg-4">
		<?php echo $form->labelEx($model,'matricula'); ?>
		<?php echo $form->textField($model,'matricula',array('size'=>10,'maxlength'=>10, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'matricula'); ?>
	</div>

	<div class="buttons">
    	<div style="float: right; ">
           <?php echo CHtml::submitButton($model->isNewRecord ? 'Emprestar' : 'Atualizar', array('class'=>'btn btn-info submitForm')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
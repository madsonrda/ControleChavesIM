<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bug-form',
	'enableAjaxValidation'=>false,
        'htmlOptions'=>array('class'=>'form valid'),
)); ?>

<!--	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>-->

	<?php echo $form->errorSummary($model); ?>

        <div class="_25">
            <p>
                <?php echo $form->labelEx($model,'user_id'); ?>
                <?php echo $form->textField($model,'user_id',array('size'=>11,'maxlength'=>11)); ?>
            </p>
        </div>

        <div class="_25">
            <p>
                <?php echo $form->labelEx($model,'descricao'); ?>
                <?php echo $form->textField($model,'descricao',array('size'=>60,'maxlength'=>255)); ?>
            </p>
        </div>

        <div class="_25">
            <p>
                <?php echo $form->labelEx($model,'data'); ?>
                <?php echo $form->textField($model,'data'); ?>
            </p>
        </div>

        <div class="clear"></div>
        <div class="block-actions">
            <ul class="actions-left">
            </ul>
            <ul class="actions-right">
                <li>
                   <?php echo CHtml::submitButton($model->isNewRecord ? 'Salvar' : 'Atualizar', array('class'=>'button')); ?>
                </li>
            </ul> 
        </div>

<?php $this->endWidget(); ?>
<!-- form -->
<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
        'htmlOptions'=>array('class'=>'form'),
)); ?>

    
        <div class="_25">
            <p>
                <?php echo $form->label($model,'user_id'); ?>
                <?php echo $form->textField($model,'user_id',array('size'=>11,'maxlength'=>11)); ?>
            </p>
        </div>

    
        <div class="_25">
            <p>
                <?php echo $form->label($model,'descricao'); ?>
                <?php echo $form->textField($model,'descricao',array('size'=>60,'maxlength'=>255)); ?>
            </p>
        </div>

    
        <div class="_25">
            <p>
                <?php echo $form->label($model,'data'); ?>
                <?php echo $form->textField($model,'data'); ?>
            </p>
        </div>

    
        <div class="buttons">
            <div style="float: left;">
		<?php echo CHtml::submitButton('Buscar', array('class'=>'button')); ?>
            </div>
        </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
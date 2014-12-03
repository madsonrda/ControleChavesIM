<?php
/* @var $this EmprestimoEquipamentoController */
/* @var $data EmprestimoEquipamento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_equipamento')); ?>:</b>
	<?php echo CHtml::encode($data->fk_equipamento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('matricula')); ?>:</b>
	<?php echo CHtml::encode($data->matricula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('horario_entrada')); ?>:</b>
	<?php echo CHtml::encode($data->horario_entrada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('horario_entrega')); ?>:</b>
	<?php echo CHtml::encode($data->horario_entrega); ?>
	<br />


</div>
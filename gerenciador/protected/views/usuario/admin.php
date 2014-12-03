<?php
$this->breadcrumbs=array(
	'Usuários'
);
/* @var $this UsuarioController */
/* @var $model Usuario */

Yii::app()->clientScript->registerScript('button_create', '
    $("div.block-header").prepend(\'<div class="button_new" style="float: right;padding: 6px 10px 0 0;"><a href="' . CHtml::normalizeUrl(array("Usuario/create")) . '"><img src="' . Yii::app()->theme->baseUrl . '/img/icons/create.png" alt="Criar" title="Criar" class="" style="cursor: pointer;" /></a></div>\');');

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#categoria-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div align="right" style="float: right; margin: 10px;" class="row">
    <?php
        $this->widget('application.extensions.PageSize.PageSize', array(
                'mGridId' => 'empresa-grid', //Gridview id
                'mPageSize' => @$_GET['pageSize'],
                'mDefPageSize' => Yii::app()->params['defaultPageSize'],
                'mPageSizeOptions'=>Yii::app()->params['pageSizeOptions'],// Optional, you can use with the widget default
        )); 
    ?>
</div>

<?php

$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'usuario-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
	'pager' => array('cssFile' => Yii::app()->theme->baseUrl . '/css/gridView.css'),
	'cssFile' => Yii::app()->theme->baseUrl . '/css/gridView.css',
	'htmlOptions' => array('class' => 'grid-view rounded'),
	'afterAjaxUpdate' => 'afterAjax',
    'columns' => array(
        'nome',
        'sobrenome',
        'telefone',
        'username',
        'email',
        /*
          'password',
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
         */
        array(
            'class' => 'CButtonColumn',
            'header' => 'Ações',
            'viewButtonImageUrl' => Yii::app()->theme->baseUrl . '/images/icons/view.png',
            'updateButtonImageUrl' => Yii::app()->theme->baseUrl . '/images/icons/edit.png',
            'deleteButtonImageUrl' => Yii::app()->theme->baseUrl . '/images/icons/trash.png',
            'template' => '{update}{delete}',
        ),
    ),
));
?>

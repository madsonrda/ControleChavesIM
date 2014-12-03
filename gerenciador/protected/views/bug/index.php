<?php
$this->breadcrumbs=array(
	'Bugs',
);

Yii::app()->clientScript->registerScript('button_create', '
    $("div.block-header").prepend(\'<div class="button_new" style="float: right;margin: 6px 12px 0 0;"><a href="'.CHtml::normalizeUrl(array("Bug/create")).'"><img src="'.Yii::app()->theme->baseUrl.'/img/icons/create.png" alt="Criar" title="Criar" class="" style="cursor: pointer;" /></a></div>\');
');
Yii::app()->clientScript->registerScript('row_view', '
    function row_view(){
        $(".odd td:not(.button-column), .even td:not(.button-column)").click(function(){
            url = $(this).parent().children().children(".view").attr("href");
            Boxy.load(url, {title:"Dados"});
        });
    }
    row_view();
');

Yii::app()->clientScript->registerScript('afterAjax', '
    function afterAjax(id, data) {
        row_view();
        boxy_view();
    }
');

Yii::app()->clientScript->registerScript('search', "
    $('.search-button').click(function(){
            $('.search-form').toggle();
            return false;
    });
    $('.search-form form').submit(function(){
            $.fn.yiiGridView.update('bug-grid', {
                    data: $(this).serialize()
            });
            return false;
    });
");
?>


<p>
Você pode opcionalmente usar um operador de comparação (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
ou <b>=</b>) no início de cada valor de busca para especificar como a comparação deve ser feita.
</p>

<?php echo CHtml::link('Busca avançada','',array('class'=>'search-button button', 'style'=>'margin: 10px 0px;')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div align="right" style="float: right; margin: 10px;" class="row">
    <?php
        $this->widget('application.extensions.PageSize.PageSize', array(
                'mGridId' => 'bug-grid', //Gridview id
                'mPageSize' => @$_GET['pageSize'],
                'mDefPageSize' => Yii::app()->params['defaultPageSize'],
                'mPageSizeOptions'=>Yii::app()->params['pageSizeOptions'],// Optional, you can use with the widget default
        )); 
    ?>
</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'bug-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
        'pager' => array('cssFile' => Yii::app()->theme->baseUrl . '/css/gridView.css'),
        'cssFile' => Yii::app()->theme->baseUrl . '/css/gridView.css',
        'htmlOptions' => array('class' => 'grid-view rounded'),
        'afterAjaxUpdate' => 'afterAjax',
	'columns'=>array(
		'user_id',
		'descricao',
		'data',
		array(
                        'header' => 'Ações',
                        'class' => 'CButtonColumn',
                        'viewButtonImageUrl' => Yii::app()->theme->baseUrl . '/img/icons/view.png',
                        'updateButtonImageUrl' => Yii::app()->theme->baseUrl . '/img/icons/edit.png',
                        'deleteButtonImageUrl' => Yii::app()->theme->baseUrl . '/img/icons/trash.png',
                        'buttons'=>array(
                            'delete'=>array(
                                'visible'=>'!$data->has_relations()',
                            ),
                        ),
		),
	),
)); ?>
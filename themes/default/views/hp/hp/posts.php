<?php $this->breadcrumbs = array(Yii::t('HpModule.hp','Records'));?>

<?php $this->widget('bootstrap.widgets.TbListView', array(
        'dataProvider' => $dataProvider,
        'itemView'     => '_view',
        'template'     => "{items}\n{pager}",
)); ?>
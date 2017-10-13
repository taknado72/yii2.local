<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\BlogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Блоги';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-index">

    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать блог', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            //'text:ntext',
            'url:url',
            ['attribute' => 'status_id', 'filter' => \common\models\Blog::STATUS_LIST, 'value' => 'statusName'],
            'sort',
            'date_create',
            'date_update',
           ['attribute' => 'tags', 'value'=> 'tagsAsString'],
           ['class' => 'yii\grid\ActionColumn'],
            
        ],
    ]); ?>
<?php Pjax::end(); ?></div>

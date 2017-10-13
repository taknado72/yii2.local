<?php
/* @var $this yii\web\View */
/* @var $dataProvider \yii\data\ActiveDataProvider */

use \yii\widgets\ListView;

$blog = $dataProvider->getModels();
?>

<div class="body-content">

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_one',
    ]); ?>

</div>
        
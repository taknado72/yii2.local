<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
		<?php foreach ($blogs as $one): ?>
            <div class="col-lg-4">
                <h2><?=$one->title?></h2>

                <?=$one->text?>

            </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>

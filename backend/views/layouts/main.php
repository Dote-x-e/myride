<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
        <!--== FAV ICON ==-->
    <link rel="shortcut icon" href="<?= Yii::$app->request->baseUrl ?>/assets/theme/images/fav.ico">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600|Quicksand:300,400,500" rel="stylesheet">
   
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<section id="container">
  <?= $this->render('header.php')?>
  <?= $this->render('aside.php')?>
        
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <?= Html::encode($this->title) ?>
                  <?= Breadcrumbs::widget([
                      'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                   ]) ?>
             <?= Alert::widget() ?>
             <?= $content ?>
        </section>
    </section>
</section>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

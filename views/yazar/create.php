<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\yazar\models\Yazar */

$this->title = 'Create Yazar';
$this->params['breadcrumbs'][] = ['label' => 'Yazars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yazar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

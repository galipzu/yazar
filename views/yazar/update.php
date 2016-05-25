<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\yazar\models\Yazar */

$this->title = 'Update Yazar: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Yazars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="yazar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

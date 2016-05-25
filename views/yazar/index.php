<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\yazar\models\YazarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Yazars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yazar-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Yazar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'yazarAdiSoyadi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TabelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tabels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tabel-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tabel', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'date_lesson',
            'visitation',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

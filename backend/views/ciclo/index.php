<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\CicloSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ciclos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ciclo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ciclo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombre',
            'date_start',
            'date_end',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

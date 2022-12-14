<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\MaestrosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Maestros';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maestros-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Maestros', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombre',
            'apellidop',
            'apellidom',
            'clave',
            //'curp',
            //'correo',
            //'estado',
            //'colonia',
            //'domicilio',
            //'cp',
            //'telefono',
            //'id_user',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\AlumnosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alumnos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'apellidop') ?>

    <?= $form->field($model, 'apellidom') ?>

    <?= $form->field($model, 'matricula') ?>

    <?php // echo $form->field($model, 'curp') ?>

    <?php // echo $form->field($model, 'fecha_nac') ?>

    <?php // echo $form->field($model, 'telefono') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'estado') ?>

    <?php // echo $form->field($model, 'ciudad') ?>

    <?php // echo $form->field($model, 'colonia') ?>

    <?php // echo $form->field($model, 'codigop') ?>

    <?php // echo $form->field($model, 'domicilio') ?>

    <?php // echo $form->field($model, 'id_user') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

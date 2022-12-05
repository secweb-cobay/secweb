<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\MatriculaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="matricula-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'idCiclo') ?>

    <?= $form->field($model, 'idAlumno') ?>

    <?= $form->field($model, 'idSemestre') ?>

    <?= $form->field($model, 'grupo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

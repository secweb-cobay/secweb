<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Matricula */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="matricula-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idCiclo')->textInput() ?>

    <?= $form->field($model, 'idAlumno')->textInput() ?>

    <?= $form->field($model, 'idSemestre')->textInput() ?>

    <?= $form->field($model, 'grupo')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

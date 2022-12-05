<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Semestre */

$this->title = 'Update Semestre: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Semestres', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="semestre-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

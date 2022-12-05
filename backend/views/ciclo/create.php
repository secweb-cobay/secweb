<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Ciclo */

$this->title = 'Create Ciclo';
$this->params['breadcrumbs'][] = ['label' => 'Ciclos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ciclo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

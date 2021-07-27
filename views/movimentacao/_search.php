<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MovimentacaoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movimentacao-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'container_id') ?>

    <?= $form->field($model, 'tipo_movimentacao') ?>

    <?= $form->field($model, 'data_hora_inicio') ?>

    <?= $form->field($model, 'data_hora_fim') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

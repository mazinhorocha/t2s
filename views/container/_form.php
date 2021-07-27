<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Container */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="container-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'numero')->widget(\yii\widgets\MaskedInput::class, [
        'mask' => 'AAAA-9999999',
    ]) ?>

    <?= $form->field($model, 'cliente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo')->dropDownList([ 20 => '20', 40 => '40', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'categoria')->dropDownList([ 'IMPORTACAO' => 'IMPORTACAO', 'EXPORTACAO' => 'EXPORTACAO', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'CHEIO' => 'CHEIO', 'VAZIO' => 'VAZIO', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

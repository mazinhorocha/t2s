<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datetime\DateTimePicker;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Movimentacao */
/* @var $form yii\widgets\ActiveForm */

$data = \yii\helpers\ArrayHelper::map(\app\models\Container::find()->all(), 'id', 'numero');
?>

<div class="movimentacao-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'container_id')->widget(Select2::classname(), [
        'data' => $data,
        'language' => 'de',
        'options' => ['placeholder' => 'Select a state ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'tipo_movimentacao')->dropDownList([ 'EMBARQUE' => 'EMBARQUE', 'DESCARGA' => 'DESCARGA', 'GATE IN' => 'GATE IN', 'GATE OUT' => 'GATE OUT', 'POSICIONAMENTO' => 'POSICIONAMENTO', 'PILHA' => 'PILHA', 'PESAGEM' => 'PESAGEM', 'SCANNER' => 'SCANNER', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'data_hora_inicio')->widget(DateTimePicker::classname(), [
        'options' => ['placeholder' => 'Enter event time ...'],
        'pluginOptions' => [
            'autoclose' => true
        ]
    ]); ?>

    <?= $form->field($model, 'data_hora_fim')->widget(DateTimePicker::classname(), [
        'options' => ['placeholder' => 'Enter event time ...'],
        'pluginOptions' => [
            'autoclose' => true
        ]
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton('SALVAR', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

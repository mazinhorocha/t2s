<?php

use yii\helpers\Html;
// use yii\grid\GridView;
use kartik\grid\GridView;
use kartik\grid\DataColumn;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MovimentacaoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Movimentacaos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movimentacao-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Movimentar Container', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Relatórios', ['report'], ['class' => 'btn btn-info']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'container',
                'value' => 'container.numero'
            ],
            'tipo_movimentacao',
            'data_hora_inicio:date',
            'data_hora_fim:date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

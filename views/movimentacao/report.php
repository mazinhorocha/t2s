<?php

use yii\helpers\Html;
// use yii\grid\GridView;
use kartik\grid\GridView;
use kartik\grid\DataColumn;

/* @var $this yii\web\View */
/* @var $container app\models\Container */
/* @var $total_import app\models\Container */
/* @var $total_export app\models\Container */

$this->title = 'Movimentações';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movimentacao-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <table class="table">
        <tbody>

        <?php foreach($container as $rows) { ?>
            <tr>
                <td><?= $rows->numero; ?></td>
                <td><?= $rows->cliente; ?></td>
            </tr>
            <?php foreach($rows as $row) { ?>
                <tr>
                    <td colspan="2">

                    </td>
                </tr>
            <?php } ?>
        <?php } ?>

        </tbody>
        <tfoot>
        <tr>
            <td>Importação: <?= $total_import; ?></td>
            <td>Exportação: <?= $total_export; ?></td>
        </tr>
        </tfoot>
    </table>

    <pre>
        <?php print_r($container); ?>
    </pre>
</div>

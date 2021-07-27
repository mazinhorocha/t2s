<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "movimentacao".
 *
 * @property int $id
 * @property int $container_id
 * @property string|null $tipo_movimentacao
 * @property string $data_hora_inicio
 * @property string $data_hora_fim
 *
 * @property Container $container
 */
class Movimentacao extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'movimentacao';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['container_id', 'data_hora_inicio', 'data_hora_fim'], 'required'],
            [['container_id'], 'integer'],
            [['tipo_movimentacao'], 'string'],
            [['data_hora_inicio', 'data_hora_fim'], 'safe'],
            [['container_id'], 'exist', 'skipOnError' => true, 'targetClass' => Container::className(), 'targetAttribute' => ['container_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'container_id' => 'Container ID',
            'tipo_movimentacao' => 'Tipo Movimentacao',
            'data_hora_inicio' => 'Data Hora Inicio',
            'data_hora_fim' => 'Data Hora Fim',
        ];
    }

    /**
     * Gets query for [[Container]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getContainer()
    {
        return $this->hasOne(Container::className(), ['id' => 'container_id']);
    }
}

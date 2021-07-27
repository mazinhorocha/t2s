<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "container".
 *
 * @property int $id
 * @property string $numero
 * @property string $cliente
 * @property string $tipo
 * @property string $categoria
 * @property string $status
 */
class Container extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'container';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['numero', 'cliente', 'tipo', 'categoria', 'status'], 'required'],
            [['tipo', 'categoria', 'status'], 'string'],
            [['numero', 'cliente'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'numero' => 'Numero',
            'cliente' => 'Cliente',
            'tipo' => 'Tipo',
            'categoria' => 'Categoria',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Container]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMoovs()
    {
        return $this->hasMany(Movimentacao::className(), ['container_id' => 'id']);
    }
}

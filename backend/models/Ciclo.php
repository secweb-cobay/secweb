<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "ciclo".
 *
 * @property int $id
 * @property string $nombre
 * @property string $date_start
 * @property string $date_end
 *
 * @property Matricula[] $matriculas
 */
class Ciclo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ciclo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'date_start', 'date_end'], 'required'],
            [['date_start', 'date_end'], 'safe'],
            [['nombre'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'date_start' => 'Date Start',
            'date_end' => 'Date End',
        ];
    }

    /**
     * Gets query for [[Matriculas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMatriculas()
    {
        return $this->hasMany(Matricula::className(), ['idCiclo' => 'id']);
    }
}

<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "materias".
 *
 * @property int $id
 * @property string $clave
 * @property string $nombre
 * @property int $idSemestre
 * @property int $idMaestro
 *
 * @property Calificacion[] $calificacions
 */
class Materias extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'materias';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['clave', 'nombre', 'idSemestre', 'idMaestro'], 'required'],
            [['idSemestre', 'idMaestro'], 'integer'],
            [['clave'], 'string', 'max' => 20],
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
            'clave' => 'Clave',
            'nombre' => 'Nombre',
            'idSemestre' => 'Id Semestre',
            'idMaestro' => 'Id Maestro',
        ];
    }

    /**
     * Gets query for [[Calificacions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCalificacions()
    {
        return $this->hasMany(Calificacion::className(), ['idMateria' => 'id']);
    }
}

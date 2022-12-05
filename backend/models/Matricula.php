<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "matricula".
 *
 * @property int $id
 * @property int $idCiclo
 * @property int $idAlumno
 * @property int $idSemestre
 * @property string $grupo
 *
 * @property Calificacion[] $calificacions
 */
class Matricula extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'matricula';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idCiclo', 'idAlumno', 'idSemestre', 'grupo'], 'required'],
            [['idCiclo', 'idAlumno', 'idSemestre'], 'integer'],
            [['grupo'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idCiclo' => 'Id Ciclo',
            'idAlumno' => 'Id Alumno',
            'idSemestre' => 'Id Semestre',
            'grupo' => 'Grupo',
        ];
    }

    /**
     * Gets query for [[Calificacions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCalificacions()
    {
        return $this->hasMany(Calificacion::className(), ['idMatricula' => 'id']);
    }
}

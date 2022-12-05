<?php

namespace backend\models;

use Yii;
use common\models\User;

/**
 * This is the model class for table "alumnos".
 *
 * @property int $id
 * @property string $nombre
 * @property string $apellidop
 * @property string $apellidom
 * @property string $matricula
 * @property string $curp
 * @property string $fecha_nac
 * @property string $telefono
 * @property string $email
 * @property string $estado
 * @property string $ciudad
 * @property string $colonia
 * @property string $codigop
 * @property string $domicilio
 * @property int $id_user
 *
 * @property Matricula[] $matriculas
 * @property User $user
 */
class Alumnos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'alumnos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'apellidop', 'apellidom', 'matricula', 'curp', 'fecha_nac', 'telefono', 'email', 'estado', 'ciudad', 'colonia', 'codigop', 'domicilio', 'id_user'], 'required'],
            [['fecha_nac'], 'safe'],
            [['id_user'], 'integer'],
            [['nombre', 'apellidop', 'apellidom', 'email', 'estado', 'ciudad', 'colonia'], 'string', 'max' => 50],
            [['matricula', 'curp', 'telefono'], 'string', 'max' => 20],
            [['codigop'], 'string', 'max' => 11],
            [['domicilio'], 'string', 'max' => 100],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
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
            'apellidop' => 'Apellidop',
            'apellidom' => 'Apellidom',
            'matricula' => 'Matricula',
            'curp' => 'Curp',
            'fecha_nac' => 'Fecha Nac',
            'telefono' => 'Telefono',
            'email' => 'Email',
            'estado' => 'Estado',
            'ciudad' => 'Ciudad',
            'colonia' => 'Colonia',
            'codigop' => 'Codigop',
            'domicilio' => 'Domicilio',
            'id_user' => 'Id User',
        ];
    }

    /**
     * Gets query for [[Matriculas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMatriculas()
    {
        return $this->hasMany(Matricula::className(), ['idAlumno' => 'id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }
}

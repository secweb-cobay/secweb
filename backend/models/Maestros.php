<?php

namespace backend\models;
use common\models\User;

use Yii;

/**
 * This is the model class for table "maestros".
 *
 * @property int $id
 * @property string $nombre
 * @property string $apellidop
 * @property string $apellidom
 * @property string $clave
 * @property string $curp
 * @property string $correo
 * @property string $estado
 * @property string $colonia
 * @property string $domicilio
 * @property string $cp
 * @property string $telefono
 * @property int $id_user
 *
 * @property Materias[] $materias
 * @property User $user
 */
class Maestros extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'maestros';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'apellidop', 'apellidom', 'clave', 'curp', 'correo', 'estado', 'colonia', 'domicilio', 'cp', 'telefono', 'id_user'], 'required'],
            [['id_user'], 'integer'],
            [['nombre', 'apellidop', 'apellidom', 'clave', 'correo', 'colonia', 'domicilio'], 'string', 'max' => 45],
            [['curp', 'estado', 'telefono'], 'string', 'max' => 50],
            [['cp'], 'string', 'max' => 10],
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
            'clave' => 'Clave',
            'curp' => 'Curp',
            'correo' => 'Correo',
            'estado' => 'Estado',
            'colonia' => 'Colonia',
            'domicilio' => 'Domicilio',
            'cp' => 'Cp',
            'telefono' => 'Telefono',
            'id_user' => 'Id User',
        ];
    }

    /**
     * Gets query for [[Materias]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMaterias()
    {
      /*   return $this->hasMany(Materias::className(), ['idMaestro' => 'id']); */
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

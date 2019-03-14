<?php

namespace backend\modules\settings\models;

use Yii;

/**
 * This is the model class for table "transportador".
 *
 * @property int $idTransportador
 * @property int $Documento
 * @property string $Nombres
 * @property string $Apellidos
 * @property int $Telefono
 * @property string $Correo
 *
 * @property Vehiculo[] $vehiculos
 */
class Transportador extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transportador';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idTransportador', 'Documento', 'Nombres', 'Apellidos', 'Telefono', 'Correo'], 'required'],
            [['idTransportador', 'Documento', 'Telefono'], 'integer'],
            [['Nombres', 'Apellidos', 'Correo'], 'string', 'max' => 45],
            [['idTransportador'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idTransportador' => 'Id Transportador',
            'Documento' => 'Documento',
            'Nombres' => 'Nombres',
            'Apellidos' => 'Apellidos',
            'Telefono' => 'Telefono',
            'Correo' => 'Correo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehiculos()
    {
        return $this->hasMany(Vehiculo::className(), ['Transportador' => 'idTransportador']);
    }
}

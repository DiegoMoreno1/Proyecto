<?php

namespace backend\modules\settings\models;

use Yii;

/**
 * This is the model class for table "oferta".
 *
 * @property int $idOferta
 * @property string $Fecha
 * @property string $Valorpropuesta
 * @property int $Vehiculo
 * @property int $Carga
 *
 * @property Vehiculo $vehiculo
 */
class Oferta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oferta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idOferta', 'Fecha', 'Valorpropuesta', 'Vehiculo', 'Carga'], 'required'],
            [['idOferta', 'Vehiculo', 'Carga'], 'integer'],
            [['Fecha'], 'string', 'max' => 15],
            [['Valorpropuesta'], 'string', 'max' => 45],
            [['idOferta'], 'unique'],
            [['Vehiculo'], 'exist', 'skipOnError' => true, 'targetClass' => Vehiculo::className(), 'targetAttribute' => ['Vehiculo' => 'idVehiculo']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idOferta' => 'Id Oferta',
            'Fecha' => 'Fecha',
            'Valorpropuesta' => 'Valorpropuesta',
            'Vehiculo' => 'Vehiculo',
            'Carga' => 'Carga',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehiculo()
    {
        return $this->hasOne(Vehiculo::className(), ['idVehiculo' => 'Vehiculo']);
    }
}

<?php

namespace backend\modules\settings\models;

use Yii;

/**
 * This is the model class for table "vehiculo".
 *
 * @property int $idVehiculo
 * @property string $Placa
 * @property string $Marca
 * @property string $PSoat
 * @property string $PMarca
 * @property int $Transportador
 *
 * @property Oferta[] $ofertas
 */
class Vehiculo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vehiculo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idVehiculo', 'Placa', 'Marca', 'PSoat', 'PMarca', 'Transportador'], 'required'],
            [['idVehiculo', 'Transportador'], 'integer'],
            [['Placa', 'Marca'], 'string', 'max' => 25],
            [['PSoat', 'PMarca'], 'string', 'max' => 5],
            [['idVehiculo'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idVehiculo' => 'Id Vehiculo',
            'Placa' => 'Placa',
            'Marca' => 'Marca',
            'PSoat' => 'P Soat',
            'PMarca' => 'P Marca',
            'Transportador' => 'Transportador',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOfertas()
    {
        return $this->hasMany(Oferta::className(), ['Vehiculo' => 'idVehiculo']);
    }
}

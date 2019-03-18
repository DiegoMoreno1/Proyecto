<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "carga".
 *
 * @property int $idCarga
 * @property string $FechaLimite
 * @property string $ValorOfertado
 * @property string $Contenido
 * @property string $Peso
 * @property string $Origen
 * @property string $Destino
 * @property int $Empresa
 *
 * @property Empresa $empresa
 * @property Oferta[] $ofertas
 */
class Carga extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'carga';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['FechaLimite', 'ValorOfertado', 'Contenido', 'Peso', 'Origen', 'Destino', 'Empresa'], 'required'],
            [['FechaLimite'], 'safe'],
            [['Empresa'], 'integer'],
            [['ValorOfertado', 'Contenido', 'Peso', 'Origen', 'Destino'], 'string', 'max' => 25],
            [['Empresa'], 'exist', 'skipOnError' => true, 'targetClass' => Empresa::className(), 'targetAttribute' => ['Empresa' => 'idEmpresa']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idCarga' => 'Id Carga',
            'FechaLimite' => 'Fecha Limite',
            'ValorOfertado' => 'Valor Ofertado',
            'Contenido' => 'Contenido',
            'Peso' => 'Peso',
            'Origen' => 'Origen',
            'Destino' => 'Destino',
            'Empresa' => 'Empresa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpresa()
    {
        return $this->hasOne(Empresa::className(), ['idEmpresa' => 'Empresa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOfertas()
    {
        return $this->hasMany(Oferta::className(), ['Carga' => 'idCarga']);
    }
}

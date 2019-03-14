<?php

namespace backend\modules\settings\models;

use Yii;

/**
 * This is the model class for table "empresa".
 *
 * @property int $idEmpresa
 * @property string $Nombre
 * @property string $Rsocial
 * @property string $NombreR
 *
 * @property Carga[] $cargas
 */
class empresa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'empresa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idEmpresa', 'Nombre', 'Rsocial', 'NombreR'], 'required'],
            [['idEmpresa'], 'integer'],
            [['Nombre', 'Rsocial', 'NombreR'], 'string', 'max' => 25],
            [['idEmpresa'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idEmpresa' => 'Id Empresa',
            'Nombre' => 'Nombre',
            'Rsocial' => 'Rsocial',
            'NombreR' => 'Nombre R',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCargas()
    {
        return $this->hasMany(Carga::className(), ['Empresa' => 'idEmpresa']);
    }
}

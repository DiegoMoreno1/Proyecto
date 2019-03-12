<?php

namespace app\models;
namespace frontend\models;

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
class Empresa extends \yii\db\ActiveRecord
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
            [['Nombre', 'Rsocial', 'NombreR'], 'required'],
            [['Nombre', 'Rsocial', 'NombreR'], 'string', 'max' => 25],
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

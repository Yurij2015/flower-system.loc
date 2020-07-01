<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employees".
 *
 * @property int $IdEmployee
 * @property string|null $Name
 * @property string|null $Phone
 * @property string|null $Position
 *
 * @property Orders[] $orders
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employees';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name', 'Position'], 'string', 'max' => 45],
            [['Phone'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdEmployee' => Yii::t('translate', 'Id Employee'),
            'Name' => Yii::t('translate', 'Name'),
            'Phone' => Yii::t('translate', 'Phone'),
            'Position' => Yii::t('translate', 'Position'),
        ];
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Orders::className(), ['Employee' => 'IdEmployee']);
    }
}

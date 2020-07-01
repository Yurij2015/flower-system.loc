<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $IdService
 * @property string $Name
 * @property float $Cost
 * @property string $Description
 * @property int $Pcategory
 *
 * @property Orders[] $orders
 * @property PCategory $pcategory
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name', 'Cost', 'Description', 'Pcategory'], 'required'],
            [['Cost'], 'number'],
            [['Pcategory'], 'integer'],
            [['Name'], 'string', 'max' => 100],
            [['Description'], 'string', 'max' => 250],
            [['Pcategory'], 'exist', 'skipOnError' => true, 'targetClass' => PCategory::className(), 'targetAttribute' => ['Pcategory' => 'IdCategory']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdService' => Yii::t('translate', 'Id Service'),
            'Name' => Yii::t('translate', 'Name'),
            'Cost' => Yii::t('translate', 'Cost'),
            'Description' => Yii::t('translate', 'Description'),
            'Pcategory' => Yii::t('translate', 'Pcategory'),
        ];
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Orders::className(), ['Product' => 'IdService']);
    }

    /**
     * Gets query for [[Pcategory]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPcategory()
    {
        return $this->hasOne(PCategory::className(), ['IdCategory' => 'Pcategory']);
    }
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "services".
 *
 * @property int $IdService
 * @property string $Name
 * @property float $Cost
 * @property string $Description
 * @property int $Category
 *
 * @property Orders[] $orders
 * @property SCategory $category
 */
class Services extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'services';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name', 'Cost', 'Description', 'Category'], 'required'],
            [['Cost'], 'number'],
            [['Category'], 'integer'],
            [['Name'], 'string', 'max' => 100],
            [['Description'], 'string', 'max' => 250],
            [['Category'], 'exist', 'skipOnError' => true, 'targetClass' => SCategory::className(), 'targetAttribute' => ['Category' => 'IdCategory']],
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
            'Category' => Yii::t('translate', 'Category'),
        ];
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Orders::className(), ['Service' => 'IdService']);
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(SCategory::className(), ['IdCategory' => 'Category']);
    }
}

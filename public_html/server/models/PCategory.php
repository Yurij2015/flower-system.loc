<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "p_category".
 *
 * @property int $IdCategory
 * @property string $Name
 * @property string|null $Description
 *
 * @property Products[] $products
 */
class PCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'p_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name'], 'required'],
            [['Name'], 'string', 'max' => 45],
            [['Description'], 'string', 'max' => 85],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdCategory' => Yii::t('translate', 'Id Category'),
            'Name' => Yii::t('translate', 'Name'),
            'Description' => Yii::t('translate', 'Description'),
        ];
    }

    /**
     * Gets query for [[Products]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Products::className(), ['Pcategory' => 'IdCategory']);
    }
}

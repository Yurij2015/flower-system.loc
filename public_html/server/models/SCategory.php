<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "s_category".
 *
 * @property int $IdCategory
 * @property string $Name
 * @property string|null $Description
 *
 * @property Services[] $services
 */
class SCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 's_category';
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
     * Gets query for [[Services]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServices()
    {
        return $this->hasMany(Services::className(), ['Category' => 'IdCategory']);
    }
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sales".
 *
 * @property int $IdSale
 * @property string $Date
 * @property int|null $Status
 * @property int $Order
 *
 * @property Orders $order
 */
class Sales extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sales';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Date', 'Order'], 'required'],
            [['Date'], 'safe'],
            [['Status', 'Order'], 'integer'],
            [['Order'], 'exist', 'skipOnError' => true, 'targetClass' => Order::className(), 'targetAttribute' => ['Order' => 'IdOrder']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdSale' => Yii::t('translate', 'Id Sale'),
            'Date' => Yii::t('translate', 'Date'),
            'Status' => Yii::t('translate', 'Status'),
            'Order' => Yii::t('translate', 'Order'),
        ];
    }

    /**
     * Gets query for [[Order]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Orders::className(), ['IdOrder' => 'Order']);
    }
}

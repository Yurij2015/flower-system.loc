<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $IdOrder
 * @property string $Date
 * @property int $Customers
 * @property int $Users
 * @property int $Service
 * @property int|null $Count
 * @property int $Product
 * @property int $Employee
 *
 * @property Customers $customers
 * @property Services $service
 * @property Employees $employee
 * @property Products $product
 * @property Sales[] $sales
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Date', 'Customers', 'Users', 'Service', 'Product', 'Employee'], 'required'],
            [['Date'], 'safe'],
            [['Customers', 'Users', 'Service', 'Count', 'Product', 'Employee'], 'integer'],
            [['Customers'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['Customers' => 'IdCustomer']],
            [['Service'], 'exist', 'skipOnError' => true, 'targetClass' => Services::className(), 'targetAttribute' => ['Service' => 'IdService']],
            [['Employee'], 'exist', 'skipOnError' => true, 'targetClass' => Employee::className(), 'targetAttribute' => ['Employee' => 'IdEmployee']],
            [['Product'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['Product' => 'IdService']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdOrder' => Yii::t('translate', 'Id Order'),
            'Date' => Yii::t('translate', 'Date'),
            'Customers' => Yii::t('translate', 'Customers'),
            'Users' => Yii::t('translate', 'Users'),
            'Service' => Yii::t('translate', 'Service'),
            'Count' => Yii::t('translate', 'Count'),
            'Product' => Yii::t('translate', 'Product'),
            'Employee' => Yii::t('translate', 'Employee'),
        ];
    }

    /**
     * Gets query for [[Customers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomers()
    {
        return $this->hasOne(Customers::className(), ['IdCustomer' => 'Customers']);
    }

    /**
     * Gets query for [[Service]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getService()
    {
        return $this->hasOne(Services::className(), ['IdService' => 'Service']);
    }

    /**
     * Gets query for [[Employee]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEmployee()
    {
        return $this->hasOne(Employees::className(), ['IdEmployee' => 'Employee']);
    }

    /**
     * Gets query for [[Product]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Products::className(), ['IdService' => 'Product']);
    }

    /**
     * Gets query for [[Sales]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSales()
    {
        return $this->hasMany(Sales::className(), ['Order' => 'IdOrder']);
    }
}

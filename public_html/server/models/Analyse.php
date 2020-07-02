<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "analysis".
 *
 * @property int $id
 * @property string|null $month
 * @property float|null $count
 * @property int|null $year
 */
class Analyse extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'analysis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['count'], 'number'],
            [['year'], 'integer'],
            [['month'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('translate', 'ID'),
            'month' => Yii::t('translate', 'Month'),
            'count' => Yii::t('translate', 'Count'),
            'year' => Yii::t('translate', 'Year'),
        ];
    }




}

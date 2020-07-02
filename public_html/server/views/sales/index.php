<?php

use yii\helpers\Html;
use yii\grid\GridView;
use miloschuman\highcharts\Highcharts;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SalesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('translate', 'Sales');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sales-index">

    <h1><?php // Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('translate', 'Create Sales'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdSale',
            'Date',
            'Status',
            'Order',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


    <?php




    try {
        echo Highcharts::widget([
            'options' => [
                'title' => ['text' => 'Анализ продаж'],
                'xAxis' => [
                    'categories' => ['Январь', 'Февраль', 'Март']
                ],
                'yAxis' => [
                    'title' => ['text' => 'Анализ реализации товаров и услуг']
                ],
                'series' => [
                    ['name' => 'Услуги', 'data' => [101, 100, 84]],
                    ['name' => 'Товары', 'data' => [123, 177, 133]]
                ]
            ]
        ]);
    } catch (Exception $e) {
    }
    ?>

</div>

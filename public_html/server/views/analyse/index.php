<?php

use miloschuman\highcharts\Highcharts;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AnalyseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('translate', 'Analyses');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="analyse-index">

    <h1><?php // Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('translate', 'Create Analyse'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'month',
            'count',
            'year',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php
    $data = Yii::$app->db->createCommand('select month, year, count  from analysis')->queryAll();
    //    print_r($data);

    foreach ($data as $values) {
        $name = $values['month'] . "<br>" . $values['year'];
        $b[] = array('type' => 'column', 'name' => $name, 'data' => array((int)$values['count']));
    }


    ?>

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
                'series' => $b,

//                'series' => [
//                    ['name' => 'Услуги', 'data' => [101, 100, 84]],
//                    ['name' => 'Товары', 'data' => [123, 177, 133]]
//                ]
            ]
        ]);
    } catch (Exception $e) {
    }
    ?>

</div>

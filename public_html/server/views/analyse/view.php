<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Analyse */

$this->title = $model->month;
$this->params['breadcrumbs'][] = ['label' => Yii::t('translate', 'Analyses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="analyse-view">

    <h1><?php // Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('translate', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('translate', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('translate', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'month',
            'count',
            'year',
        ],
    ]) ?>

</div>

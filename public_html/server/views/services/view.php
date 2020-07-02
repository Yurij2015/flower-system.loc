<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Services */

$this->title = $model->Name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('translate', 'Services'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="services-view">

    <h1><?php // echo Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('translate', 'Update'), ['update', 'id' => $model->IdService], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('translate', 'Delete'), ['delete', 'id' => $model->IdService], [
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
            'IdService',
            'Name',
            'Cost',
            'Description',
            [
                'attribute' => 'Category',
                'value' => $model->category->Name,
            ],
//            'Category',
        ],
    ]) ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Customer */

$this->title = $model->FirstName . " " . $model->SecondName;
$this->params['breadcrumbs'][] = ['label' => Yii::t('translate', 'Customers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="customer-view">

    <h1><?php // echo Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('translate', 'Update'), ['update', 'id' => $model->IdCustomer], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('translate', 'Delete'), ['delete', 'id' => $model->IdCustomer], [
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
            'IdCustomer',
            'SecondName',
            'FirstName',
            'MiddleName',
            'Address',
            'Phone',
        ],
    ]) ?>

</div>

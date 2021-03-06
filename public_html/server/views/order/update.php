<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Order */

$this->title = Yii::t('translate', 'Update Order: {name}', [
    'name' => $model->IdOrder,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('translate', 'Orders'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdOrder, 'url' => ['view', 'id' => $model->IdOrder]];
$this->params['breadcrumbs'][] = Yii::t('translate', 'Update');
?>
<div class="order-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Customer */

$this->title = Yii::t('translate', 'Update Customer: {name}', [
    'name' => $model->IdCustomer,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('translate', 'Customers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdCustomer, 'url' => ['view', 'id' => $model->IdCustomer]];
$this->params['breadcrumbs'][] = Yii::t('translate', 'Update');
?>
<div class="customer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

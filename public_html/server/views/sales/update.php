<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sales */

$this->title = Yii::t('translate', 'Update Sales: {name}', [
    'name' => $model->IdSale,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('translate', 'Sales'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdSale, 'url' => ['view', 'id' => $model->IdSale]];
$this->params['breadcrumbs'][] = Yii::t('translate', 'Update');
?>
<div class="sales-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

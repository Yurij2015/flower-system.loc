<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Employee */

$this->title = Yii::t('translate', 'Update Employee: {name}', [
    'name' => $model->EName,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('translate', 'Employees'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->EName, 'url' => ['view', 'id' => $model->IdEmployee]];
$this->params['breadcrumbs'][] = Yii::t('translate', 'Update');
?>
<div class="employee-update">

    <h1><?php // echo Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

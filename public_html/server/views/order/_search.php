<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OrderSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IdOrder') ?>

    <?= $form->field($model, 'Date') ?>

    <?= $form->field($model, 'Customers') ?>

    <?= $form->field($model, 'Users') ?>

    <?= $form->field($model, 'Service') ?>

    <?php // echo $form->field($model, 'Count') ?>

    <?php // echo $form->field($model, 'Product') ?>

    <?php // echo $form->field($model, 'Employee') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('translate', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('translate', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

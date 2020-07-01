<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Order */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Date')->textInput() ?>

    <?= $form->field($model, 'Customers')->textInput() ?>

    <?= $form->field($model, 'Users')->textInput() ?>

    <?= $form->field($model, 'Service')->textInput() ?>

    <?= $form->field($model, 'Count')->textInput() ?>

    <?= $form->field($model, 'Product')->textInput() ?>

    <?= $form->field($model, 'Employee')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('translate', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

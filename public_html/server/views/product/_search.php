<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IdService') ?>

    <?= $form->field($model, 'Name') ?>

    <?= $form->field($model, 'Cost') ?>

    <?= $form->field($model, 'Description') ?>

    <?= $form->field($model, 'Pcategory') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('translate', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('translate', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

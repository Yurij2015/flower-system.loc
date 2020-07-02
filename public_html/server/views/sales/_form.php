<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;


/* @var $this yii\web\View */
/* @var $model app\models\Sales */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sales-form">

    <?php $form = ActiveForm::begin(); ?>

    <?=
    // поле ввода даты с подключенным виджетом выбора даты
    $form->field($model, 'Date')->widget(DatePicker::classname(), [
        'value' => date('Y-M-d'),
    ]);
    ?>


    <?= $form->field($model, 'Status')->textInput() ?>

    <?= $form->field($model, 'Order')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('translate', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use app\models\Employee;
use app\models\Product;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Customer;

/* @var $this yii\web\View */
/* @var $model app\models\Order */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php // echo $form->field($model, 'Date')->textInput() ?>


    <?=
    // поле ввода даты с подключенным виджетом выбора даты
    $form->field($model, 'Date')->widget(DatePicker::classname(), [
        'value' => date('Y-M-d'),
    ]);
    ?>

    <?php $customer = Customer::find()->all();
    // поле выбора категории
    $items = ArrayHelper::map($customer, 'IdCustomer', 'fullName');
    $params = ['prompt' => 'Выберите клиента']; ?>
    <?= $form->field($model, 'Customers')->dropDownList($items, $params); ?>


    <?php // echo $form->field($model, 'Customer')->textInput() ?>
    <?php // $form->field($model, 'Users')->textInput() ?>
    <?php // $form->field($model, 'Service')->textInput() ?>


    <?= $form->field($model, 'Count')->textInput() ?>

    <?php $customer = Product::find()->all();
    // поле выбора категории
    $items = ArrayHelper::map($customer, 'IdService', 'Name');
    $params = ['prompt' => 'Выберите товар']; ?>
    <?= $form->field($model, 'Product')->dropDownList($items, $params); ?>

    <?php // echo $form->field($model, 'Product')->textInput() ?>

    <?php $customer = Employee::find()->all();
    // поле выбора категории
    $items = ArrayHelper::map($customer, 'IdEmployee', 'EName');
    $params = ['prompt' => 'Укажите сотрудника']; ?>
    <?= $form->field($model, 'Employee')->dropDownList($items, $params); ?>

    <?php // echo $form->field($model, 'Employee')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('translate', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

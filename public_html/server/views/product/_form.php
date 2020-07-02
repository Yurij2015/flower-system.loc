<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\PCategory;


/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Cost')->textInput() ?>

    <?= $form->field($model, 'Description')->textInput(['maxlength' => true]) ?>

    <?php $category = Pcategory::find()->all();
    // поле выбора категории
    $items = ArrayHelper::map($category, 'IdCategory', 'Name');
    $params = ['prompt' => 'Выберите категорию']; ?>
    <?= $form->field($model, 'Pcategory')->dropDownList($items, $params); ?>

    <?php // $form->field($model, 'Pcategory')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('translate', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

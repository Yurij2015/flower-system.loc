<?php

use app\models\SCategory;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Services */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="services-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Cost')->textInput() ?>

    <?= $form->field($model, 'Description')->textInput(['maxlength' => true]) ?>

    <?php $category = Scategory::find()->all();
    // поле выбора категории
    $items = ArrayHelper::map($category, 'IdCategory', 'Name');
    $params = ['prompt' => 'Выберите категорию']; ?>
    <?= $form->field($model, 'Category')->dropDownList($items, $params); ?>

    <?php // echo $form->field($model, 'Category')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('translate', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

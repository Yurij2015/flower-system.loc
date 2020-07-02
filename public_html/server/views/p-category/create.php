<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PCategory */

$this->title = Yii::t('translate', 'Create P Category');
$this->params['breadcrumbs'][] = ['label' => Yii::t('translate', 'P Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pcategory-create">

    <h1><?php // echo Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

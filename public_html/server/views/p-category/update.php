<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PCategory */

$this->title = Yii::t('translate', 'Update P Category: {name}', [
    'name' => $model->Name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('translate', 'P Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->IdCategory]];
$this->params['breadcrumbs'][] = Yii::t('translate', 'Update');
?>
<div class="pcategory-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SCategory */

$this->title = Yii::t('translate', 'Update S Category: {name}', [
    'name' => $model->Name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('translate', 'S Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->IdCategory]];
$this->params['breadcrumbs'][] = Yii::t('translate', 'Update');
?>
<div class="scategory-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

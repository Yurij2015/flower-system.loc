<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Analyse */

$this->title = Yii::t('translate', 'Update Analyse: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('translate', 'Analyses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('translate', 'Update');
?>
<div class="analyse-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

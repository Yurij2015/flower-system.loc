<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Analyse */

$this->title = Yii::t('translate', 'Create Analyse');
$this->params['breadcrumbs'][] = ['label' => Yii::t('translate', 'Analyses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="analyse-create">

    <h1><?php // echo Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

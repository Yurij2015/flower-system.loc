<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Services */

$this->title = Yii::t('translate', 'Create Services');
$this->params['breadcrumbs'][] = ['label' => Yii::t('translate', 'Services'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="services-create">

    <h1><?php // echo Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

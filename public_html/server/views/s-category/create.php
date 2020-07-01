<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SCategory */

$this->title = Yii::t('translate', 'Create S Category');
$this->params['breadcrumbs'][] = ['label' => Yii::t('translate', 'S Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="scategory-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

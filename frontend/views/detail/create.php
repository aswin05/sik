<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Detail */

$this->title = Yii::t('app', 'Create Detail');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Details'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,

    ]) ?>



</div>

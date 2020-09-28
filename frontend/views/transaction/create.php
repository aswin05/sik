<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Transaction */

$this->title = Yii::t('app', 'Create Transaction');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Transactions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaction-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="transaction-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'payment')->dropDownList($model->getPaymentType()) ?>

        <?= Html::hiddenInput('total')?>

        <?= $form->field($model, 'patient')->dropDownList($model->getDataPatients()) ?>

        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Next'), ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>


</div>

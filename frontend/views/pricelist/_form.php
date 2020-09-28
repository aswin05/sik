<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Pricelist */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pricelist-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'service')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fee')->textInput() ?>

    <?php //  $form->field($model, 'is_deleted')->textInput() ?>

    <?php // echo $form->field($model, 'created_by')->textInput() ?>

    <?php //  $form->field($model, 'created_at')->textInput() ?>

    <?php //  $form->field($model, 'updated_by')->textInput() ?>

    <?php //  $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

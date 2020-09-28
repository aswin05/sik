<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\MedicalRecord */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="medical-record-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->field($model, 'name')->dropDownList(
        $model->getDataPatients()
    );
    ?>

    <?= $form->field($model, 'complaint')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'action')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'diagnose')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'recipe')->textarea(['rows' => 6]) ?>

    <?php //  $form->field($model, 'is_deleted')->textInput() ?>

    <?php //  $form->field($model, 'created_by')->textInput() ?>

    <?php //  $form->field($model, 'created_at')->textInput() ?>

    <?php //  $form->field($model, 'updated_by')->textInput() ?>

    <?php // echo $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

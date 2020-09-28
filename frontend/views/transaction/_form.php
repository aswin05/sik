<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Modal;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model frontend\models\Transaction */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transaction-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php // echo $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'payment')->dropDownList($model->getPaymentType()) ?>

    <?= $form->field($model, 'total')->textInput(['disabled' => true]) ?>

    <?= $form->field($model, 'patient')->dropDownList($model->getDataPatients()) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Next'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    <?php
        Modal::begin([
                'header'=>'<h4>Add services</h4>',
                'id'=>'modal',
                'size'=>'modal-lg'
            ]);
        echo "<div id='modalContent' kodenya='$model->id'></div>";
        Modal::end();
        ?>

        <?=
        Html::button('Add Services', [          
        'value' => Yii::$app->urlManager->createUrl('/detail/create/'),
        'class' => 'btn btn-primary',
        'id' => 'modalButton',
        'data-toggle'=> 'modal',
        'data-target'=> '#your-modal',
        ]);
    ?>

</div>

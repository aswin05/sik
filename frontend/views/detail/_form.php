<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\Pricelist;
use frontend\models\Detail;
use yii\helpers\ArrayHelper;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $model frontend\models\Detail */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detail-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'transaction')->textInput(['id' => 'transId', 'readonly' => true]) ?>

    <?php //echo $form->field($model, 'service')->dropDownList($model -> getDataPriceLists()); ?>

    <?php // echo $form->field($model, 'price')->textInput(['readonly' => true, 'value' => 0 ])?>


    <?= $form->field($model, 'service')->dropDownList($model->getDataPriceLists(),[
            'prompt'=>'--Select Item--',
            'id'=>'item_selected',
    ])
    ?>

    <?= $form->field($model, 'price')->textInput(['readonly' => true, 'value' => 0, 'id' => 'price'])?>


    <?= $form->field($model, 'amount')->textInput(['type' => 'number', 'value' => 1, 'min' => 1, 'id' => 'amount']) ?>

    <?= $form->field($model, 'total')->textInput(['readonly' => true, 'id' => 'total', 'value' => 0])?>

    <?php 
    $js=<<<JS
        function setTotalValue(){
            var dataAmount = $('#amount').val();
            var dataFee = $('#price').val();
            $("#total").val(dataFee*dataAmount);
        };
        $("#item_selected").on("change",function(){
            $("#price").val(($(this).find("option:selected").text()));
            setTotalValue();
        });
        $("#amount").on("change",function(){
            setTotalValue();
        });
        var idTransaksi = document.getElementById('modalContent').getAttribute('kodenya');
        $('#transId').val(idTransaksi);
    JS;    
    $this->registerJs($js,\yii\web\View::POS_READY);
    ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>


    <?php ActiveForm::end(); ?>
    

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tbdokter */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbdokter-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Spesialis')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

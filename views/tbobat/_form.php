<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tbobat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbobat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_obat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stok_obat')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

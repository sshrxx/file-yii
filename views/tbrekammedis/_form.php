<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tbrekammedis */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbrekammedis-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tgl_periksa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_dokter')->textInput() ?>

    <?= $form->field($model, 'id_obat')->textInput() ?>

    <?= $form->field($model, 'id_pasien')->textInput() ?>

    <?= $form->field($model, 'id_poli')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

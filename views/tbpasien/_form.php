<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tbpasien */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbpasien-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jk')->dropDownList([ 'laki - laki' => 'Laki - laki', 'perempuan' => 'Perempuan', '' => '', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

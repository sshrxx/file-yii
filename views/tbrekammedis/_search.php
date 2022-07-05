<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbrekammedisSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbrekammedis-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_rm') ?>

    <?= $form->field($model, 'tgl_periksa') ?>

    <?= $form->field($model, 'diagnosa') ?>

    <?= $form->field($model, 'id_dokter') ?>

    <?= $form->field($model, 'id_obat') ?>

    <?php // echo $form->field($model, 'id_pasien') ?>

    <?php // echo $form->field($model, 'id_poli') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

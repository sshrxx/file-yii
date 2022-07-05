<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tbpasien */

$this->title = 'Update Tbpasien: ' . $model->id_pasien;
$this->params['breadcrumbs'][] = ['label' => 'Tbpasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pasien, 'url' => ['view', 'id_pasien' => $model->id_pasien]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbpasien-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

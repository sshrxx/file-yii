<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tbdokter */

$this->title = 'Update Tbdokter: ' . $model->id_dokter;
$this->params['breadcrumbs'][] = ['label' => 'Tbdokters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_dokter, 'url' => ['view', 'id_dokter' => $model->id_dokter]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbdokter-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

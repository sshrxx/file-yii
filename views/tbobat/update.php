<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tbobat */

$this->title = 'Update Tbobat: ' . $model->id_obat;
$this->params['breadcrumbs'][] = ['label' => 'Tbobats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_obat, 'url' => ['view', 'id_obat' => $model->id_obat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbobat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

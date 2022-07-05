<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tbrekammedis */

$this->title = 'Update Tbrekammedis: ' . $model->id_rm;
$this->params['breadcrumbs'][] = ['label' => 'Tbrekammedis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_rm, 'url' => ['view', 'id_rm' => $model->id_rm]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbrekammedis-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

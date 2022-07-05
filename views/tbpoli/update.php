<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tbpoli */

$this->title = 'Update Tbpoli: ' . $model->id_poli;
$this->params['breadcrumbs'][] = ['label' => 'Tbpolis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_poli, 'url' => ['view', 'id_poli' => $model->id_poli]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbpoli-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tbrekammedis */

$this->title = 'Create Tbrekammedis';
$this->params['breadcrumbs'][] = ['label' => 'Tbrekammedis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbrekammedis-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

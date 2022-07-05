<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tbobat */

$this->title = 'Create Tbobat';
$this->params['breadcrumbs'][] = ['label' => 'Tbobats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbobat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

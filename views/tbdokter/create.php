<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tbdokter */

$this->title = 'Create Tbdokter';
$this->params['breadcrumbs'][] = ['label' => 'Tbdokters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbdokter-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

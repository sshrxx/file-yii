<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tbpoli */

$this->title = 'Create Tbpoli';
$this->params['breadcrumbs'][] = ['label' => 'Tbpolis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbpoli-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

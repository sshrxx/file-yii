<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tbpasien */

$this->title = $model->id_pasien;
$this->params['breadcrumbs'][] = ['label' => 'Tbpasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tbpasien-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_pasien' => $model->id_pasien], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_pasien' => $model->id_pasien], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_pasien',
            'nama_pasien',
            'jk',
        ],
    ]) ?>

</div>

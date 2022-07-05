<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tbrekammedis */

$this->title = $model->id_rm;
$this->params['breadcrumbs'][] = ['label' => 'Tbrekammedis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tbrekammedis-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_rm' => $model->id_rm], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_rm' => $model->id_rm], [
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
            'id_rm',
            'tgl_periksa',
            'diagnosa',
            'id_dokter',
            'id_obat',
            'id_pasien',
            'id_poli',
        ],
    ]) ?>

</div>

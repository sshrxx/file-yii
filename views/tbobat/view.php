<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tbobat */

$this->title = $model->id_obat;
$this->params['breadcrumbs'][] = ['label' => 'Tbobats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tbobat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_obat' => $model->id_obat], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_obat' => $model->id_obat], [
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
            'id_obat',
            'nama_obat',
            'stok_obat',
        ],
    ]) ?>

</div>

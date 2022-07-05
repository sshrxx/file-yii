<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\TbRekammedis;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbrekammedisSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbrekammedis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbrekammedis-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tbrekammedis', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_rm',
            'tgl_periksa',
            'diagnosa',
            'id_dokter',
            'id_obat',
            //'id_pasien',
            //'id_poli',
            'tbdokter.nama_dokter',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Tbrekammedis $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_rm' => $model->id_rm]);
                 }
            ],
        ],
    ]); ?>


</div>

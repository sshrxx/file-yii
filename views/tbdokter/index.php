<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\TbDokter;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbdokterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbdokters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbdokter-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tbdokter', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_dokter',
            'nama_dokter',
            'Spesialis',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Tbdokter $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_dokter' => $model->id_dokter]);
                 }
            ],
        ],
    ]); ?>


</div>

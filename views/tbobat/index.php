<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Tbobat;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbobatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbobats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbobat-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tbobat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_obat',
            'nama_obat',
            'stok_obat',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Tbobat $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_obat' => $model->id_obat]);
                 }
            ],
        ],
    ]); ?>


</div>

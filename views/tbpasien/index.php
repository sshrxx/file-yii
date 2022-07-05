<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\TbPasien;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbpasienSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbpasiens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbpasien-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tbpasien', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pasien',
            'nama_pasien',
            'jk',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Tbpasien $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_pasien' => $model->id_pasien]);
                 }
            ],
        ],
    ]); ?>


</div>

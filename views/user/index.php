<?php

use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = Yii::t('app', 'Users');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'username',
            'email:email',
            [
                'attribute' => 'status',
                'filter' => ['0' => Yii::t('yii', 'No'), '10' => Yii::t('yii', 'Yes')],
                'format' => 'raw',
                'value' => function($data) {
                    $class = $data->status ? 'glyphicon glyphicon-check' : 'glyphicon glyphicon-unchecked';
                    return Html::tag('span', '', ['class' => $class]);
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
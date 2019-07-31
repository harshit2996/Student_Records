<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Students */

$this->title = $model->firstName;
$this->params['breadcrumbs'][] = ['label' => 'Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="students-view">

    <h1><?= Html::encode($this->title.'\'s Profile') ?></h1>

    <p>
        <?= Html::a('Done', ['index'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <div>
        <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            ['label' => 'Profile Picture',

               'format' => ['image',['width'=>'200']], 

               'value'=>function($model){

               return('@web/'.$model->profilePictures);

            }],
            'id',
            'firstName',
            'lastName',
            'email:email',
            'marks',
            'status',
        ],
        
    ]) ?>
    </div>

    

    

</div>

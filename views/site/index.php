<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StudentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Records';
$this->params['breadcrumbs'][] ='Records';
?>
<div>
    <?= Html::a('Add Student', ['create'], ['class' => 'btn btn-success']) ?>
</div>
<div class="students-index">

    <h1><?= Html::encode('Viewing Records of Students') ?></h1>

    

    

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // Uncomment the following line and modify the query in StudentSearch.php to filter records according to your choice
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'firstName',
            'lastName',
            'email:email',
            ['label' => 'Profile Picture',

               'format' => ['image',['width'=>'100']], 
               
               'value'=>function($model){

               return('@web/'.$model->profilePictures);

               }],
            'marks',
            'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
        
    ]); ?>


</div>

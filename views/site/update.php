<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Students */

$this->title = 'Update Record' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="students-update">

    <h1><?= Html::encode('Update Details of Student') ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

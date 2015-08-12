<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Hoadon */

$this->title = 'Update Hoadon: ' . ' ' . $model->ID_HD;
$this->params['breadcrumbs'][] = ['label' => 'Hoadons', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_HD, 'url' => ['view', 'id' => $model->ID_HD]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hoadon-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

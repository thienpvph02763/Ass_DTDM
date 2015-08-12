<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Hoadonchitiet */

$this->title = 'Update Hoadonchitiet: ' . ' ' . $model->ID_HDCT;
$this->params['breadcrumbs'][] = ['label' => 'Hoadonchitiets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_HDCT, 'url' => ['view', 'id' => $model->ID_HDCT]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hoadonchitiet-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

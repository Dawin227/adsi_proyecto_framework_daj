<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Producto */

$this->title = Yii::t('app', 'Actualizar Producto: {name}', [
    'name' => $model->id_producto,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Productos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_producto, 'url' => ['view', 'id' => $model->id_producto]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="producto-Actualizar">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

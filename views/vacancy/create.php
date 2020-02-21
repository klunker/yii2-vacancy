<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\vacancy\models\Vacancy */

$this->title = Yii::t('vacancy','Create Vacancy');
$this->params['breadcrumbs'][] = ['label' => Yii::t('vacancy', 'Vacancies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vacancy-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

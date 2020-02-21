<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\vacancy\models\VacancySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vacancy-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'keywords') ?>

    <?= $form->field($model, 'h1') ?>

    <?php // echo $form->field($model, 'content') ?>

    <?php // echo $form->field($model, 'skills') ?>

    <?php // echo $form->field($model, 'salary_from') ?>

    <?php // echo $form->field($model, 'salary_to') ?>

    <?php // echo $form->field($model, 'date_create') ?>

    <?php // echo $form->field($model, 'publish_at') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('vacancy','Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('vacancy','Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

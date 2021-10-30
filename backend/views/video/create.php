<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Video */

$this->title = 'Create Video';
$this->params['breadcrumbs'][] = ['label' => 'Videos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="video-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="d-flex flex-column justify-content-center align-items-center">
        <div class="upload-icon">
            <i class="fas fa-upload" size="5px"></i>
        </div>
        <br>

        <p class="m-0">Перетягніть сюди відеофайли, які потрібно завантажити</p>
        <br>
        <p class="text-muted">Відео матимуть статус "Приватне", доки ви не опублікуєте їх.</p>

        <?php \yii\bootstrap4\ActiveForm::begin([
            'options' => ['enctype' => 'multipart/form-data']
        ]) ?>


        <button class="btn btn-primary btn-file">
            Вибрати файл
            <input type="file" id="videoFile" name="video">
        </button>

        <?php \yii\bootstrap4\ActiveForm::end(); ?>
    </div>
</div>





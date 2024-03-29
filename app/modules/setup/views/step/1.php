<?php

use yii\bootstrap\Html;
use app\helpers\Language;

$this->title = Yii::t('app', 'Choose language');

// Languages array
$languages = Language::supportedLanguages();

?>

<div class="row">
    <div class="col-sm-4">
        <ul class="list-group">
            <li class="list-group-item list-group-item-current"><?= Yii::t('app', 'Choose language') ?></li>
            <li class="list-group-item"><?= Yii::t('app', 'Verify requirements') ?></li>
            <li class="list-group-item"><?= Yii::t('app', 'Set up database') ?></li>
            <li class="list-group-item"><?= Yii::t('app', 'Install app') ?></li>
            <li class="list-group-item"><?= Yii::t('app', 'Create admin account') ?></li>
            <li class="list-group-item"><?= Yii::t('app', 'Finished') ?></li>
        </ul>
    </div>
    <div class="col-sm-8 form-wrapper">
        <?= Html::tag('h4', Yii::t('app', 'Choose language'), ['class' => 'step-title']) ?>
        <?= Html::beginForm('', 'post', ['class' => 'form-vertical']) ?>
        <div class="form-group">
            <?php // Html::label(Yii::t('app', 'Choose language'), 'language', ['class' => 'form-label']) ?>
            <?= Html::dropDownList('language', Yii::$app->language, $languages, ['class'=>'form-control']) ?>
        </div>
        <div class="form-group required-control">
            <?= Html::tag('label', Yii::t('app', 'Purchase Code | Random value'), ['class' => 'control-label']) ?>
            <?= Html::textInput('purchaseCode', null, ['class'=>'form-control']) ?>
        </div>
        <div class="form-action">
            <?= Html::submitButton(Yii::t('app', 'Save and continue'), ['class'=>'btn btn-primary']) ?>
        </div>
        <?= Html::endForm() ?>
    </div>
</div>
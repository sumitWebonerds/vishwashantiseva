<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use kartik\time\TimePicker;
//use janisto\timepicker\TimePicker;
//use dosamigos\datetimepicker\DateTimePicker;
/* @var $this yii\web\View */
/* @var $model common\models\Events */
/* @var $form yii\widgets\ActiveForm */
?>

<!-- <div class="events-form"> -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3>Event</h3>
        </div>
        <div class="panel-body">
            <?php $form = ActiveForm::begin(); ?>
            <div class="row">
                <div class="col-md-12">
                    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>                
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <?= $form->field($model, 'image_file')->fileInput() ?>                
                </div>
                <div class="col-md-6">
                    <?= $form->field($model, 'date')->widget(\yii\jui\DatePicker::classname(), [
                        //'language' => 'ru',
                        'dateFormat' => 'yyyy-MM-dd',
                        ]) ?>                
                </div>
            </div>    
            <div class="row">
                <div class="col-md-6">
                    <?php $form->field($model, 'start_time')->textInput() ?> 
                    <?php
                        // echo '<label>Start Time</label>';
                        // echo TimePicker::widget([
                        //     'name' => 'start_time', 
                        //     'value' => '00:00:00 ',
                        //     'pluginOptions' => [
                        //         'showSeconds' => true
                        //     ]
                        // ]);
                    ?>
                  
                </div>
                <div class="col-md-6">
                    <?= $form->field($model, 'end_time')->textInput() ?>                
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <?= $form->field($model, 'venue')->textarea(['rows' => 6]) ?>                                   
                </div>
            
                <div class="col-md-6">
                    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>                                   
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                      <?= $form->field($model, 'organised_by')->textInput(['maxlength' => true]) ?>                                     
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-4">
                    <div class="form-group">
                    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                    </div>        
                </div>
            </div>
            

                <?php ActiveForm::end(); ?>
        </div>
        
    </div>

<!-- </div> -->
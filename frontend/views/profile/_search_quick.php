<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

?>
    <?php $form = ActiveForm::begin([
        'action' => ['profile/search'],
        'method' => 'get',
    ]); ?>

          <div class="search_top">
            <div class="inline-block">
              <label class="gender_1">I am looking for :</label>
              <div class="age_box1" style="max-width: 100%; display: inline-block;">
                    <?= $form->field($searchModel, 'gender')->dropDownList([ 'm' => 'Male', 'f' => 'Female', ], ['prompt' => 'select gender'])->label(false); ?>                      
              </div>
            </div>
            <div class="inline-block">
              <label class="gender_1">Located In :</label>
                <div class="age_box1" style="max-width: 100%; display: inline-block;">
               <?php
                  $maritalStatus=ArrayHelper::map(\common\models\Profiles::findBySql("SELECT DISTINCT(city) as city from profiles where city != ''")->asArray()->all(),'city','city');
                  echo $form->field($searchModel, 'city')->dropDownList($maritalStatus, ['prompt' => 'select Location'])->label(false);    
                    ?>          
                </div>
            </div>
            <div class="inline-block">
              <label class="gender_1">Interested In :</label>
                <div class="age_box1" style="max-width: 100%; display: inline-block;">
                 <?php
                  $maritalStatus=ArrayHelper::map(\common\models\Masters::find()->where(['type'=>'interested_in'])->asArray()->all(),'name','name');
                  echo $form->field($searchModel, 'interested_in')->dropDownList($maritalStatus, ['prompt' => 'Select Interest'])->label(false);    
                    ?>         
                </div>
            </div>
          </div>
          <div class="inline-block">
            <div class="age_box2" style="max-width: 220px;">
              <label class="gender_1">Age :</label>
              <input class="transparent" placeholder="From:" style="width: 34%;" type="text" value="">&nbsp;-&nbsp;<input class="transparent" placeholder="To:" style="width: 34%;" type="text" value="">
            </div>
          </div>
          <div class="inline-block">
            <label class="gender_1">Status :</label>
            <div class="age_box1" style="max-width: 100%; display: inline-block;">
                  <?php
                  $maritalStatus=ArrayHelper::map(\common\models\Masters::find()->where(['type'=>'marital_status'])->asArray()->all(),'name','name');
                  echo $form->field($searchModel, 'marital_status')->dropDownList($maritalStatus, ['prompt' => 'select marital status'])->label(false);    
                    ?>          
          
            </div>
          </div>
          <div class="submit inline-block">
             <input id="submit-btn" class="hvr-wobble-vertical" type="submit" value="Find Matches">
          </div>
<?php ActiveForm::end(); ?>
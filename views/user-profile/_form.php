<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;



/* @var $this yii\web\View */
/* @var $model app\models\userprofile */
/* @var $form yii\widgets\ActiveForm */
?>


    <div class="form-style-3"> 
     <!--Skills Section of Form-->
        <table id="bg2" align="center">
            
            <tr >
                <td>
                    <fieldset>
                        <Legend>Basic Information</Legend>
                            <table width="100%">
                                <tr>
                                    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

                                <tr> <td> <?= $form->field($model, 'fullName')->textInput(['maxlength' => true]) ?></td></tr>

    

                                <tr> <td> <?= $form->field($model, 'gender')->radioList([
    
                                    'Male' => 'Male',
                                    'Female' =>'Female',
                    
                                ])->label('Gender') ?></td></tr>

                                <tr><td>   <?= $form->field($model, 'dob')->textInput() ?></td></tr>
        
                                <tr><td>   <?= $form->field($model, 'years_exp')->textInput() ?></td></tr>

                                <tr><td>   <?= $form->field($model, 'industry')->textInput(['maxlength' => true]) ?></td></tr>

                                <tr><td><?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?></td></tr>

                                <tr><td> <?= $form->field($model, 'aboutMe')->textarea(['rows' => 6])->label('About Me') ?>
                                </td></tr>
                            </table>
                    
                    </fieldset>
                    <fieldset>
                        <legend>Skills</legend>
                        <div class="userprofile-form">>
                            <table width="100%" >
    
                                
                                <tr><td>  <?= $form->field($model, 'title')->dropDownList(['MRS'=>'MRS','MISS'=>'MISS','DR' => 'DR', 'MR' => 'MR'],['prompt'=>'Select Title'])->label('Title');?></td></tr>

                                <tr><td>  <?= $form->field($model, 'careerLevel')->textInput() ?></td></tr>

                                <tr><td> <?= $form->field($model, 'communicationLevel')->textInput() ?></td></tr>

                                <tr><td>  <?= $form->field($model, 'organizationLevel')->textInput() ?></td></tr>

                                <tr><td>  <?= $form->field($model, 'jobLevel')->textInput() ?></td></tr>
                            </table>
                        </div>
                    </fieldset>
    
                    <fieldset> 
                        <legend >Contact</legend>
                            <table width="100%">
                                <tr><td>  <?= $form->field($model, 'address')->textarea(['rows' => 4,'class'=>'form-style-3'])->label('Address') ?></td></tr>

                                <tr><td>  <?= $form->field($model, 'PhoneNumber')->textInput() ?></td></tr>

                                <tr><td> <?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?></td></tr>

                                <tr><td> <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?></td></tr>
                                <tr><td><?= $form->field($model,'file')->fileInput();?></td></tr>
    
                            </table>
                            <div class="form-group">
                                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                            </div>
                    </fieldset>
                </td></tr></table>
    
            <?php ActiveForm::end(); ?>
    </div>


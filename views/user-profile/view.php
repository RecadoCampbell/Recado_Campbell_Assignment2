<div style="background:white;"class="container">
<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\userprofile */

$this->title = $model->title.'. '.$model->fullName;
$this->params['breadcrumbs'][] = ['label' => 'Userprofiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="userprofile-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'fullName',
            'gender',
            'dob',
            'years_exp',
            'industry',
            'location',
            'aboutMe',
            'picture',
            'title',
            'careerLevel',
            'communicationLevel',
            'organizationLevel',
            'jobLevel',
            'address',
            'PhoneNumber',
            'website',
            'email:email',
        ],
]) ?></div>
    <br>
    <hr>
    <div style="background:white;"class="container">
    <!--Title-->
    <h1>Profile</h1>
<br>
<br>
	   <!--Right side of profile -->
        <div class="col-md-4 well" id="leftPanel">
            <div class="row">
                <div class="col-md-12">
                	<div>
        				<img src="http://lorempixel.com/200/200/abstract/1/" alt="Texto Alternativo" class="img-circle img-thumbnail">
        				<h2><?php echo $model->fullName; ?></h2>
        				<p><?php echo 'Gender: '. $model->gender; ?></p>
                        <div class="btn-group">
                            <?php echo 'Years of Employment: '. $model->years_exp;?>
                            
                            
                        </div>
        			</div>
        		</div>
            </div>
        </div>
        <div class="col-md-8 well" id="rightPanel">
            <div class="row">
    <div class="col-md-12">
    	   <!--Left side of Profile -->
			<h2>Basic Info<small><?php echo ' of '.$model->fullName; ?></small></h2>
			<hr class="style16">
			<div class="row">
				
                <div class="col-xs-12 col-sm-6 col-md-6">
                    
					<div class="form-group">
                       <?php echo '<h3>Full Name:'. $model->fullName.'</h3>'; ?>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<?php echo '<h3>Date of Birth: '. $model->dob.'</h3>'; ?> <br/>
					</div>
				</div>
			</div>
        
            <div class="col-xs-12 col-sm-6 col-md-6">
			<div class="form-group">
				<?php echo '<h3>Industry: '. $model->industry.'</h3>'; ?>
                
        </div>
        </div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<?php echo '<h3>Location: '. $model->location.'</h3>'; ?>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<?php echo '<h3> &nbsp Aboutme:'. $model->aboutMe.'</h3>'; ?> 
					</div>
                    
				</div>
			</div>
            
			
			
		
	
</div>
</div>
        </div>
            

<hr class="style16">
        <h2>Skills</h2>
<table cellpadding="10">
    <tr width="auto">
        <?php echo '<td width="200" style="padding:80px 20px 5px 10px" > <h4>Professional Title:-</h4></td> <td><div id="message" class="message"><h3>'.$model->title.'.</h3></div></td>';?>
        <?php echo '<td width="200" style="padding:80px 20px 5px 50px"><h4>Career Level:-</h3></td> <td><div id="message" class="message"><h3> '. $model->careerLevel.'%</h3></div></td>'; ?>
    
       <?php echo '<td width="230" style="padding:80px 20px 5px 15px" ><h4>Communication Level:-</h4></td> <td><div id="message" class="message"><h3>'. $model->communicationLevel.'%</h3></div></td>'; ?> 
       <?php echo '<td width="230" style="padding:80px 20px 5px 15px" ><h4>Communication Level:-</h4></td> <td><div id="message" class="message"><h3>'. $model->organizationLevel.'%</h3></div></td>'; ?> 
        <?php echo '<td width="130" style="padding:80px 20px 5px 20px"><h4>Job Level:-</h4></td><td> <div id="message" class="message"><h3> '. $model->jobLevel.'%</h3></div></td>'; ?>
    </tr>
</table>
<hr class="style16">
        <h2>Contacts</h2><br>
<?php echo '<h4>Address: '. $model->address.'</h4>'; ?> <br/>
<?php echo '<h4>Contact Number: '. $model->PhoneNumber.'</h4>'; ?><br/>
<?php echo '<h4>Email Address: '. $model->email.'</h4>'; ?><br/>
<?php echo '<h4>Website: '. $model->website.'</h4>'; ?><br/>
        <br>
        <br>
</div>
     <br>
<div style="background:white;"class="container">
<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserProfileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Userprofiles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userprofile-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Userprofile', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'fullName',
            'gender',
            'dob',
           // 'years_exp',
            // 'industry',
            // 'location',
            // 'aboutMe',
            // 'picture',
            // 'title',
            // 'careerLevel',
            // 'communicationLevel',
            // 'organizationLevel',
            // 'jobLevel',
            // 'address',
            // 'PhoneNumber',
            // 'website',
             'email:email',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>
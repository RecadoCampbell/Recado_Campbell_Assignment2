<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "userprofile".
 *
 * @property integer $id
 * @property string $fullName
 * @property string $gender
 * @property string $dob
 * @property integer $years_exp
 * @property string $industry
 * @property string $location
 * @property string $aboutMe
 * @property string $picture
 * @property string $title
 * @property integer $careerLevel
 * @property integer $communicationLevel
 * @property integer $organizationLevel
 * @property integer $jobLevel
 * @property string $address
 * @property integer $PhoneNumber
 * @property string $website
 * @property string $email
 */
class Userprofile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'userprofile';
    }

    /**
     * @inheritdoc
     */
    public $file;
    public function rules()
    {
        return [
            [['fullName', 'gender', 'dob', 'years_exp', 'industry','location', 'aboutMe', 'title', 'careerLevel', 'communicationLevel', 'organizationLevel', 'jobLevel', 'address', 'PhoneNumber', 'website', 'email'], 'required'],
            [['dob'], 'safe'],
            [['years_exp', 'careerLevel', 'communicationLevel', 'organizationLevel', 'jobLevel', 'PhoneNumber'], 'integer'],
            [['fullName'], 'string', 'max' => 100],
            [['gender', 'title'], 'string', 'max' => 7],
            [['industry', 'location'], 'string', 'max' => 60],
            [['aboutMe'], 'string', 'max' => 300],
            [['picture','address'], 'string', 'max' => 255],
            [['file'], 'file'],
            [['website', 'email'], 'string', 'max' => 40],
             ['email', 'email'],    
            //checks if vlues are integers and values inputted are betwenn 0 and 70
            ['years_exp','integer','max'=>70,'min'=>0],
            //checks if values are betwenn 1 and 100 carerrlevel,orgnaizational level, communication level, job level
            ['careerLevel','integer','max'=>100,'min'=>1],
            ['organizationLevel','integer','max'=>100,'min'=>1],
            ['communicationLevel','integer','max'=>100,'min'=>1],
            ['jobLevel','integer','max'=>100,'min'=>1],
            ['PhoneNumber','integer','max'=>99999999,'min'=>1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fullName' => 'Full Name',
            'gender' => 'Gender',
            'dob' => 'Dob',
            'years_exp' => 'Years Exp',
            'industry' => 'Industry',
            'location' => 'Location',
            'aboutMe' => 'About Me',
            'file' => 'Picture',
            'title' => 'Title',
            'careerLevel' => 'Career Level',
            'communicationLevel' => 'Communication Level',
            'organizationLevel' => 'Organization Level',
            'jobLevel' => 'Job Level',
            'address' => 'Address',
            'PhoneNumber' => 'Phone Number',
            'website' => 'Website',
            'email' => 'Email',
        ];
    }
}

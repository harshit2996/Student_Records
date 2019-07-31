<?php

namespace app\models;

use Yii;


/**
 * This is the model class for table "students".
 *
 * @property int $id
 * @property string $firstName
 * @property string $lastName
 * @property string $email
 * @property resource $profilePictures
 * @property int $marks
 * @property string $status
 */
class Students extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'students';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['firstName', 'lastName', 'email', 'marks', 'status'], 'required'],
            [['profilePictures'],'safe'],
            [['profilePictures'], 'file', 'extensions' => 'jpg, png'],
            [['marks'], 'integer'],
            [['firstName', 'lastName', 'email', 'status'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstName' => 'First Name',
            'lastName' => 'Last Name',
            'email' => 'Email',
            'profilePictures' => 'Profile Picture',
            'marks' => 'Marks',
            'status' => 'Status',
        ];
    }

    

    
}

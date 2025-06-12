<?php
 
namespace app\models;

use yii\db\ActiveRecord;

class Application extends ActiveRecord
{
    public static function tableName()
    {
        return 'application';
    }

    public function rules()
    {
        return [
            [['first_name', 'last_name', 'date_of_birth'], 'required'],
            [['description'], 'string'],
            [['date_of_birth'], 'date', 'format' => 'php:Y-m-d'],
            [['income'], 'number'],
            [['number_of_dependants'], 'integer'],
            [['first_name', 'last_name'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'date_of_birth' => 'Date of Birth',
            'description' => 'Description',
            'income' => 'Income',
            'number_of_dependants' => 'Number of Dependants',
        ];
    }
}
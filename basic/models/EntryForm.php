<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 17.08.15
 * Time: 12:00
 */

namespace app\models;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name','email'],'required'],
            ['email', 'email'],
        ];
    }
}
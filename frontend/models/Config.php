<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/18
 * Time: 10:40
 */

namespace frontend\models;
use yii\db\ActiveRecord;
use Finite\StatefulInterface;
/**
 * Class Config
 * @package frontend\models
 */
class Config extends ActiveRecord
{
    public static function tableName()
    {
        return 'onethink_config';
    }
    public static function search(){
        return self::findOne(1);
    }
}
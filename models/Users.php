<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property integer $phone
 * @property string $name
 * @property string $date_of_birth
 * @property string $email
 * @property string $login
 * @property string $password
 * @property string $cursesid
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['phone'], 'integer'],
            [['date_of_birth'], 'safe'],
            [['name', 'email', 'login', 'password'], 'string', 'max' => 255],
            ['email', 'email'],
            [['phone', 'date_of_birth', 'name', 'email', 'login', 'password'], 'required']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'phone' => 'Phone',
            'name' => 'Name',
            'date_of_birth' => 'Date Of Birth',
            'email' => 'Email',
            'login' => 'Login',
            'password' => 'Password',
            'cursesid' => 'Cursesid',
        ];
    }

    public function getCurses()
    {
        return $this->hasOne(Curses::className(), ['id' => 'cursesid']);
    }

    public function saveCurses($curses_id)
    {
        $curses = Curses::findOne($curses_id);

        if($curses != null)
        {
            $this->link('curses', $curses);
            return true;
        }
    }
}

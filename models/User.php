<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class User extends ActiveRecord implements IdentityInterface
{
//    public $name;
//    public $birthDay;
//    public $password;

    public static function tableName()
    {
        return "users";
    }

    public function attributeLabels()
    {
        return [
            "name" => "Имя",
            "birthDay" => "Дата рождения",
            "password" => "Пароль"
        ];
    }

    public function rules()
    {
        return [
            [["name", "birthDay", "password"], "required"],
            ["name", "string", "min" => 4],
            ["name", "unique", "targetClass" => User::class, "targetAttribute" => "name", "message" => "Это имя уже занято"],
            ["password", "string", "min" => 6]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return self::findOne($id);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        // return static::findOne(["access_token" => $token]);
    }

    /**
     * Finds user by username
     *
     * @param string $name
     * @return static|null
     */
    public static function findByUsername($name)
    {
        return static::findOne(["name" => $name]);
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        //return $this->authKey;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        //return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return \Yii::$app->security->validatePassword($password, $this->password);
    }

    public function getArticles()
    {
        return $this->hasMany(Article::class, ['author_id' => 'id']);
    }
}

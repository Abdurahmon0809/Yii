<?php

namespace app\models;

use yii\db\ActiveRecord;

class Article extends ActiveRecord
{
   public static function tableName()
   {
       return "articles";
   }

   public function attributeLabels()
   {
       return [
           "header" => "Заголовок",
           "article" => "Статья",
       ];
   }

   public function rules()
   {
       return [
         ["header", "required"],
         ["article", "required"],
         ["article", "string", "min" => 10],
       ];
   }

   public function getUser()
   {
       return $this->hasOne(User::class, ["id" => "author_id"]);
   }
}
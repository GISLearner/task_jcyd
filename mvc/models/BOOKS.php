<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "BOOKS".
 *
 * @property int $ID 唯一ID
 * @property string $bookName 书名
 * @property string $author 作者
 * @property string $publisher 出版社
 */
class BOOKS extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'BOOKS';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'bookName', 'author', 'publisher'], 'required'],
            [['ID'], 'integer'],
            [['bookName', 'author', 'publisher'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'bookName' => '书名',
            'author' => '作者',
            'publisher' => '出版社',
        ];
    }
}

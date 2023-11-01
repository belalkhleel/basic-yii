<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "posts".
 *
 * @property int $posts_id
 * @property string $post_title
 * @property string $post_desc
 * @property int $author_id
 *
 * @property Users $author
 */
class Posts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['post_title', 'post_desc', 'author_id'], 'required'],
            [['post_desc'], 'string'],
            [['author_id'], 'integer'],
            [['post_title'], 'string', 'max' => 255],
            [['author_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::class, 'targetAttribute' => ['author_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'posts_id' => 'Posts ID',
            'post_title' => 'Post Title',
            'post_desc' => 'Post Desc',
            'author_id' => 'Author ID',
        ];
    }

    /**
     * Gets query for [[Author]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(Users::class, ['id' => 'author_id']);
    }
}

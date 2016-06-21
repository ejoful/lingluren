<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%article}}".
 *
 * @property integer $id
 * @property string $title
 * @property string $des
 * @property string $img
 * @property string $path
 * @property string $url
 * @property integer $indexs
 * @property integer $position
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%article}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'des', 'path', 'url', 'indexs', 'position'], 'required'],
            [['des'], 'string'],
            [['indexs', 'position'], 'integer'],
            [['title', 'path', 'url'], 'string', 'max' => 300],
            [['img'], 'string', 'max' => 100],
        	[['url'], 'url'],
        	[['img'],'file', 'extensions' => ['jpg','jpeg', 'png'], 'mimeTypes' => ['image/jpeg', 'image/png']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'des' => Yii::t('app', 'Des'),
            'img' => Yii::t('app', 'Img'),
            'path' => Yii::t('app', 'Path'),
            'url' => Yii::t('app', 'Url'),
            'indexs' => Yii::t('app', 'Indexs'),
            'position' => Yii::t('app', 'Position'),
        ];
    }

    /**
     * @inheritdoc
     * @return ArticleQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ArticleQuery(get_called_class());
    }
}

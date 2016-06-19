<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%slide}}".
 *
 * @property integer $id
 * @property string $title
 * @property string $img
 * @property string $path
 * @property string $url
 * @property integer $position
 */
class Slide extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%slide}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'img', 'path', 'url', 'position'], 'required'],
            [['position'], 'integer'],
            [['title', 'path'], 'string', 'max' => 300],
            [['img'], 'string', 'max' => 100],
            [['url'], 'string', 'max' => 200],
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
            'img' => Yii::t('app', 'Img'),
            'path' => Yii::t('app', 'Path'),
            'url' => Yii::t('app', 'Url'),
            'position' => Yii::t('app', 'Position'),
        ];
    }

    /**
     * @inheritdoc
     * @return SlideQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SlideQuery(get_called_class());
    }
}

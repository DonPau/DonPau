<?php

namespace common\models\time;

use Yii;

/**
 * This is the model class for table "{{%time}}".
 *
 * @property int $id
 * @property string $time
 * @property string $date
 * @property string $datetime
 */
class Time extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%time}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'time', 'date', 'datetime'], 'required'],
            [['id'], 'integer'],
            [['time', 'date', 'datetime'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'time' => 'Time',
            'date' => 'Date',
            'datetime' => 'Datetime',
        ];
    }

    /**
     * {@inheritdoc}
     * @return TimeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TimeQuery(get_called_class());
    }
}

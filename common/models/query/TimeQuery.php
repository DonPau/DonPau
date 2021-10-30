<?php

namespace common\models\query;
use common\models\time\Time;

/**
 * This is the ActiveQuery class for [[Time]].
 *
 * @see Time
 */
class TimeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Time[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Time|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}

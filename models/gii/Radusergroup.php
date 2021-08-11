<?php

namespace app\models\gii;

use Yii;

/**
 * This is the model class for table "radusergroup".
 *
 * @property string $username
 * @property string $groupname
 * @property int $priority
 * @property int $id
 */
class Radusergroup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'radusergroup';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['priority', 'id'], 'integer'],
            [['id'], 'required'],
            [['username', 'groupname'], 'string', 'max' => 64],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'username' => 'Username',
            'groupname' => 'Groupname',
            'priority' => 'Priority',
            'id' => 'ID',
        ];
    }
}

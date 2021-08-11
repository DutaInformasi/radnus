<?php

namespace app\models\gii;

use Yii;

/**
 * This is the model class for table "radpostauth".
 *
 * @property int $id
 * @property string $username
 * @property string $pass
 * @property string $reply
 * @property string $authdate
 */
class Radpostauth extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'radpostauth';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['authdate'], 'safe'],
            [['username', 'pass'], 'string', 'max' => 64],
            [['reply'], 'string', 'max' => 32],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'pass' => 'Pass',
            'reply' => 'Reply',
            'authdate' => 'Authdate',
        ];
    }
}

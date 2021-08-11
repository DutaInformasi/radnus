<?php

namespace app\models\gii;

use Yii;

/**
 * This is the model class for table "nas".
 *
 * @property int $id
 * @property string $nasname
 * @property string|null $shortname
 * @property string|null $type
 * @property int|null $ports
 * @property string $secret
 * @property string|null $server
 * @property string|null $community
 * @property string|null $description
 */
class Nas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nasname'], 'required'],
            [['ports'], 'integer'],
            [['nasname'], 'string', 'max' => 128],
            [['shortname'], 'string', 'max' => 32],
            [['type'], 'string', 'max' => 30],
            [['secret'], 'string', 'max' => 60],
            [['server'], 'string', 'max' => 64],
            [['community'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nasname' => 'Nasname',
            'shortname' => 'Shortname',
            'type' => 'Type',
            'ports' => 'Ports',
            'secret' => 'Secret',
            'server' => 'Server',
            'community' => 'Community',
            'description' => 'Description',
        ];
    }
}

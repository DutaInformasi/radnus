<?php

namespace app\models\gii;

use Yii;

/**
 * This is the model class for table "radacct".
 *
 * @property int $radacctid
 * @property string $acctsessionid
 * @property string $acctuniqueid
 * @property string $username
 * @property string $groupname
 * @property string|null $realm
 * @property string $nasipaddress
 * @property string|null $nasportid
 * @property string|null $nasporttype
 * @property string|null $acctstarttime
 * @property string|null $acctupdatetime
 * @property string|null $acctstoptime
 * @property int|null $acctinterval
 * @property int|null $acctsessiontime
 * @property string|null $acctauthentic
 * @property string|null $connectinfo_start
 * @property string|null $connectinfo_stop
 * @property int|null $acctinputoctets
 * @property int|null $acctoutputoctets
 * @property string $calledstationid
 * @property string $callingstationid
 * @property string $acctterminatecause
 * @property string|null $servicetype
 * @property string|null $framedprotocol
 * @property string $framedipaddress
 */
class Radacct extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'radacct';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['acctstarttime', 'acctupdatetime', 'acctstoptime'], 'safe'],
            [['acctinterval', 'acctsessiontime', 'acctinputoctets', 'acctoutputoctets'], 'integer'],
            [['acctsessionid', 'username', 'groupname', 'realm'], 'string', 'max' => 64],
            [['acctuniqueid', 'nasporttype', 'acctauthentic', 'acctterminatecause', 'servicetype', 'framedprotocol'], 'string', 'max' => 32],
            [['nasipaddress', 'nasportid', 'framedipaddress'], 'string', 'max' => 15],
            [['connectinfo_start', 'connectinfo_stop', 'calledstationid', 'callingstationid'], 'string', 'max' => 50],
            [['acctuniqueid'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'radacctid' => 'Radacctid',
            'acctsessionid' => 'Acctsessionid',
            'acctuniqueid' => 'Acctuniqueid',
            'username' => 'Username',
            'groupname' => 'Groupname',
            'realm' => 'Realm',
            'nasipaddress' => 'Nasipaddress',
            'nasportid' => 'Nasportid',
            'nasporttype' => 'Nasporttype',
            'acctstarttime' => 'Acctstarttime',
            'acctupdatetime' => 'Acctupdatetime',
            'acctstoptime' => 'Acctstoptime',
            'acctinterval' => 'Acctinterval',
            'acctsessiontime' => 'Acctsessiontime',
            'acctauthentic' => 'Acctauthentic',
            'connectinfo_start' => 'Connectinfo Start',
            'connectinfo_stop' => 'Connectinfo Stop',
            'acctinputoctets' => 'Acctinputoctets',
            'acctoutputoctets' => 'Acctoutputoctets',
            'calledstationid' => 'Calledstationid',
            'callingstationid' => 'Callingstationid',
            'acctterminatecause' => 'Acctterminatecause',
            'servicetype' => 'Servicetype',
            'framedprotocol' => 'Framedprotocol',
            'framedipaddress' => 'Framedipaddress',
        ];
    }
}

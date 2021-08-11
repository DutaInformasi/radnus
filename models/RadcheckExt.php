<?php

namespace app\models;

use app\models\gii\Radcheck;

class RadcheckExt extends Radcheck
{
    public $groupname;
    public function rules()
    {
        return [
            [['username', 'attribute'], 'string', 'max' => 64],
            [['username', 'attribute', 'op', 'value', 'groupname'], 'required'],
            [['op'], 'string', 'max' => 2],
            [['value'], 'string', 'max' => 253],
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
            'attribute' => 'Type',
            'op' => 'Operator',
            'value' => 'Password',
            'groupname' => 'Group'
        ];
    }

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);

        if ($insert) {
            $model = new RadusergroupExt();
            $model->username = $this->username;
            $model->groupname = $this->groupname;

            $model->save(true);
        } else {
            RadusergroupExt::updateAll(['groupname' => $this->groupname], "username='" . $this->username . "'");
        }
    }

    public function getGroup()
    {
        return $this->hasOne(RadusergroupExt::class, ['username' => 'username']);
    }
}

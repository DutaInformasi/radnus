<?php

namespace app\models;

use app\models\gii\Radusergroup;

class RadusergroupExt extends Radusergroup
{
    public function rules()
    {
        return [
            [['priority', 'id'], 'integer'],
            [['username', 'groupname'], 'required'],
            [['username', 'groupname'], 'string', 'max' => 64],
            [['id'], 'unique'],
        ];
    }
}

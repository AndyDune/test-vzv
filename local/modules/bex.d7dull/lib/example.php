<?php

namespace Bex\D7dull;

use Bitrix\Main\Entity\DataManager;
use Bitrix\Main\Entity\IntegerField;
use Bitrix\Main\Entity\FloatField;
use Bitrix\Main\Entity\StringField;
use Bitrix\Main\Entity\Validator;
use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

class ExampleTable extends DataManager
{
    public static function getTableName()
    {
        return 'course_evro';
    }

    public static function getMap()
    {
        return array(
            new IntegerField('ID', array(
                'autocomplete' => true,
                'primary' => true,
                'title' => Loc::getMessage('BEX_D7DULL_ID'),
            )),
            new FloatField('VAL', array(
                'required' => true,
                'title' => Loc::getMessage('BEX_D7DULL_VAL'),
                'default_value' => false,
                'validation' => false,
            )),
            new IntegerField('MOUNTH', array(
                'required' => true,
                'title' => Loc::getMessage('BEX_D7DULL_MOUNTH'),
                'default_value' => false,
                'validation' => false,
            )),
        );
    }
}

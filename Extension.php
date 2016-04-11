<?php

/**
 *  _   __ __ _____ _____ ___  ____  _____
 * | | / // // ___//_  _//   ||  __||_   _|
 * | |/ // /(__  )  / / / /| || |     | |
 * |___//_//____/  /_/ /_/ |_||_|     |_|
 * @link https://vistart.name/
 * @copyright Copyright (c) 2016 vistart
 * @license https://vistart.name/license/
 */

namespace rhoone\feedback;

/**
 * Description of Extension
 *
 * @author vistart <i@vistart.name>
 */
class Extension extends \rhoone\extension\Extension
{

    public static function extensionName()
    {
        return "Feedback";
    }

    public function search($keywords)
    {
        return null;
    }

    public static function getModule()
    {
        return [
            'class' => Module::className(),
            'id' => 'rhoone-feedback',
        ];
    }
}

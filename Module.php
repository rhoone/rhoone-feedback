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
 * Description of Module
 *
 * @author vistart <i@vistart.name>
 */
class Module extends \yii\base\Module implements \yii\base\BootstrapInterface
{

    public $id = 'rhoone-feedback';
    public $controllerNamespace = "rhoone\feedback\controllers";

    public function bootstrap($app)
    {
        if ($app instanceof \yii\web\Application) {
            $rules = [
                'feedback' => $this->id . '/feedback/index',
                'feedback/<id:\w+>' => $this->id . '/feedback/detail'
            ];
            $app->getUrlManager()->addRules($rules);
        }
    }
}

<?php

/**
 * Created by PhpStorm.
 * User: jaco
 * Date: 2018/08/17
 * Time: 6:55 AM
 */

class Yii extends YiiBase
{
    private static $_app;

    /**
     * Returns the application singleton or null if the singleton has not been created yet.
     * @return MyWebApplication the application singleton, null if the singleton has not been created yet.
     */
    public static function app()
    {
        return self::$_app;
    }

}

/**
 * Class MyWebApplication
 * @property WebUser $user
 */

class MyWebApplication extends CWebApplication{

}
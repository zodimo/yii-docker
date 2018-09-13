<?php

/**
 * Created by PhpStorm.
 * User: jaco
 * Date: 2018/08/17
 * Time: 6:51 AM
 */
class testerCommand extends CConsoleCommand
{
    public function actionAws(){
//        new \zodimo\yii\aws\sdk\AwsSdk();
//        echo yii::getPathOfAlias('zodimo');
            echo CVarDumper::dumpAsString(yii::app()->awsSdk->createS3())."\n";

    }

}
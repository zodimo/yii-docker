<?php
/**
 * Created by PhpStorm.
 * User: jaco
 * Date: 2018/08/17
 * Time: 6:43 AM
 */


/**
 * Merge named keys and append numberic keys
 *
 * @param array $array1
 * @param array $array2,...
 * @return array
 */
function recursive_array_merge($array1,$array2){

    $arrays=func_get_args();



    foreach ($array1 as $key=>$value){
        if(isset($array2[$key])){
            if(is_numeric($key)){
                $array1[]=$array2[$key];
            }elseif (is_array($value)) {
                $array1[$key]=recursive_array_merge($value,$array2[$key]);
            }else{
                $array1[$key]=$array2[$key];
            }
            unset($array2[$key]);
        }
    }

    foreach ($array2 as $key=>$value){
        if(is_numeric($key)){
            $array1[]=$array2[$key];
        }else {
            $array1[$key] = $value;
        }
    }
    return $array1;
}


<?php
/**
 * Created by PhpStorm.
 * User: edu
 * Date: 2/19/17
 * Time: 1:41 AM
 */

namespace App\Lib;


use Cake\ORM\Entity;

class UtilityMethods
{
    public static function getEntityErrors(Entity $entity){
        if($entity->errors()){
            $error_msg = [];
            foreach( $entity->errors() as $errors){
                if(is_array($errors)){
                    foreach($errors as $error){
                        $error_msg[]    =   $error;
                    }
                }else{
                    $error_msg[]    =   $errors;
                }
            }
            return $error_msg;
        }
    }

}
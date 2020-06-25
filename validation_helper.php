<?php
    /*
    |--------------------------------------------------------------------------
    | Validation input here
    |--------------------------------------------------------------------------
    */

    function validate($value,$type)
    {
         $r = false;
         switch ($type) {
            case 'VALIDATE_STR':
                 if(!is_numeric($value))
                 {
                     $r=true;
                 }
                 break;
            case 'VALIDATE_NUM':
                 if(is_numeric($value))
                 {
                     $r=true;
                 }
                 break;
            case 'VALIDATE_EMAIL':
                 if(filter_var($value,FILTER_VALIDATE_EMAIL))
                 {
                     $r=true;
                 }
                 break;
            case 'VALIDATE_MOB':
                 if(is_numeric($value))
                 {
                     if(strlen($value)==10){
                          $r=true;
                     }
                 }
                 break;
         }
         return $r;
    }
?>
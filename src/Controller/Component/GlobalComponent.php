<?php
namespace App\Controller\Component;

use Cake\Controller\Component;

class GlobalComponent extends Component
{
    public function formatErrors($array = array())
    {

       //Do something to get numbers or what you want
        // validation de l'entity a échouée.
        $error_msg = [];
        foreach($array as $errors){
            if(is_array($errors)){
                foreach($errors as $error){
                    $error_msg[]    = "<br> - " . $error;
                }
            }else{
                $error_msg[]    =   "<br> - " . $errors;
            }
        }
       return $error_msg;
    }
    public function randomPassword(){
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string 
    }
    public function _hashGenerator()
    {
        return Security::hash(rand());
    } 
}
?>
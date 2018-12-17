<?php 

/* src/View/Helper/LinkHelper.php */
namespace App\View\Helper;

use Cake\View\Helper;

class GlobalHelper extends Helper
{
    public $helpers = ['request'];

    public function vowelChecker($text)
    {
        $vocals = array('a','e','i','o','u');

        if (ctype_alpha($text) && in_array($text{0}, $vocals)) {
            return false;
        } else {
            return true;
        }
    }

    public function checkActive($param){
        if(!empty($param['controller'])){
            if(!empty($param['action'])){
                if($this->request->getParam('controller') == $param['controller'] && $this->request->getParam('action') == $param['action']){
                    return true;
                }else{
                    return false;
                }
            }else{
                if($this->request->getParam('controller') == $param['controller']){
                    return true;
                }else{
                    return false;
                }
            }
            
        }
    }
}
?>
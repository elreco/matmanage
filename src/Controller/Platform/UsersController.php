<?php
namespace App\Controller\Platform;

use App\Controller\AppController;

use Cake\ORM\TableRegistry;
use Cake\I18n\Time;
use Cake\Mailer\Email;
use Cake\Network\Exception\InternalErrorException;
use Cake\Network\Exception\ForbiddenException;
use Cake\Routing\Router;
use Cake\Database\Expression\QueryExpression;
use Cake\View\Helper\TextHelper;
use Cake\Network\Exception\NotFoundException;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Network\Exception\SocketException;
/**
 * Users Controller
 *
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        // ARRAY CONTENANT LES ACTIONS
        $auth_allow = [];
        $this->Auth->allow($auth_allow);
        // REDIRIGER L'UTILISATEUR SI IL EST CONNECTE ET NON AUTORISE A ACCEDER
        if ($this->Auth->user()) 
        {
            if (in_array($this->request->action, $auth_allow)) {
                return $this->redirect(['controller' => 'Users','action' => 'add']);        
            }

        } 
        if(empty($this->Auth->user()) && !empty($this->Cookie->read('connects'))){
            $this->autoLogin($this->request->here(false));
        }
        
        $this->loadComponent('Paginator');
        
    }
     public $paginate = [
        'limit' => 18,
    ];

    public function index()
    {
        $this->autoRender = false;
    }

}

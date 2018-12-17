<?php
namespace App\Controller;

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
class GlobalController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        // ARRAY CONTENANT LES ACTIONS
        $this->viewBuilder()->setLayout('default');
        
    }

    public $paginate = [
        'limit' => 18,
    ];

     
    public function index(){

    }
    

}

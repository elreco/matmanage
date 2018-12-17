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
        $auth_allow = ['login', 'add'];
        $this->Auth->allow($auth_allow);
        // REDIRIGER L'UTILISATEUR SI IL EST CONNECTE ET NON AUTORISE A ACCEDER
        if ($this->Auth->user()) 
        {
            if (in_array($this->request->action, $auth_allow)) {
                return $this->redirect(['controller' => 'Leagues','action' => 'index']);        
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

     /**
     * Login method
     *
     * @return \Cake\Http\Response|void
     */
    
    public function login()
    {
        // TITRE DE LA PAGE
        $this->set('title', "Connexion");

        // NOUVELLE ENTITE USER
        $user = $this->Users->newEntity();
        $this->set(['user' => $user]);

        if ($this->request->is('post')){
            // CONNECTER L'UTILISATEUR
            $newuser = $this->Auth->identify();
            
            if($newuser){
                if($newuser['archived'] == 1){
                    $this->Flash->default(__("<strong>Vous n'êtes pas authorisé à accéder à cette section</strong>"));
                    return $this->redirect(['action' => 'login']);
                }
                $this->Auth->setUser($newuser);
                $this->setAutoLogin($newuser['id']);

                $this->Flash->success(__("Vous êtes connecté !"));
                    //return $this->redirect(['action' => 'tuto']);
                
            }else{
                $this->Flash->error(__("Email ou mot de passe <strong>incorrect</strong> ! Veuillez réessayer."));
                return $this->redirect(['action' => 'login']);
            }
        }
        $this->viewBuilder()->setLayout('auth');
    }

    public function setAutoLogin($id = null) {
        $user = $this->Users->get($id);
        if(empty($user->hash)){
            $hash = $this->Global->_hashGenerator();
            
            $this->Cookie->config('path', '/');
            $this->Cookie->config([
                'expires' => '+10 years',
                'httpOnly' => true,
                'domain' => 'localhost'
            ]);
            $this->Cookie->write('connects', $hash);
            $user->hash = $hash;
            if ($this->Users->save($user)) {
                return true;
            } else {
                return false;
            }
        }else{
            $this->Cookie->config('path', '/');
            $this->Cookie->config([
                'expires' => '+10 years',
                'httpOnly' => true,
                'domain' => 'localhost'
            ]);
            $this->Cookie->write('connects', $user->hash);
            return true;
        }
        
    }
    public function autoLogin($url = null)
    {
        if (!empty($this->Cookie->read('connects'))) {

            $user = $this->Users->findByHash($this->Cookie->read('connects'))->first()->toArray();
            $this->Auth->setUser($user);
            if(!empty($url)){

                return $this->redirect($url);
            }else{
                return $this->redirect(['controller'=>'Leagues','action' => 'index']);
            }
            
        } else {
            return true;
        }
    }

    public function settings()
    {
        // TITRE DE LA PAGE
        $this->set('title', "Settings");
        $this->set('description', "The #1 Ranked System on Fortnite Battle Royale");
        $user = $this->Users->findById($this->Auth->user('id'))->first();
        if(!empty($user->birthday)){
            $time = new Time($user->birthday);
            $user->birthday = $time->i18nFormat('MM/dd/yyyy');
        }
        

        if ($this->request->is(['post', 'put'])) {
            $this->Users->patchEntity($user, $this->request->getData());
            // LOWER CASE EMAIL
            $user->email = strtolower($this->request->getData('email'));

            if(!empty($this->request->getData('new_password'))){
                if(!empty($this->request->getData('new_password')) && !empty($this->request->getData('new_password2'))){
                    $user->password = $this->request->getData('new_password');
                }else{
                    $this->Flash->error(
                        __("<strong>Error!</strong><br>If you fill your actual password, please set your new password.")
                    );
                }
            }
            if ($this->Users->save($user)) {
                if($this->request->getData('email') != $user->email){
                    $user->active = 0;
                    $this->Users->save($user);
                    $email = new Email('default');
                    $email
                    ->transport('default')
                    ->template('default')
                    ->emailFormat('html')
                    ->to($user->email, $user->username)
                    ->subject('Activate your Fortnite League account')
                    ->from('noreply@fortniteleague.pro', 'Fortnite League')
                    ->viewVars(['username' => $user->username, 'token' => $user->token])
                    ->send();
                    // ENVOI DE L'EMAIL DE CONFIRMATION
                    $this->Flash->success(__("<strong>Success!</strong><br>Your profile has been saved. <br>You changed your email address."));
                }else{
                    $this->Flash->success(__('Your profile has been saved.'));
                }
                $this->Auth->setUser($user);
                
            }else{
                $error_msg = [];
                foreach( $user->errors() as $errors){
                    if(is_array($errors)){
                        foreach($errors as $error){
                            $error_msg[]    = "<br> - " . $error;
                        }
                    }else{
                        $error_msg[]    =   "<br> - " . $errors;
                    }
                }

                if(!empty($error_msg)){
                    $this->Flash->error(
                        __("<strong>Error!</strong><br>Please fix the following error(s):".implode("", $error_msg))
                    );
                }
            }
            if(!empty($this->request->getQuery('overwolf'))){
                return $this->redirect(['action' => 'settings','?' => ['overwolf' => 1]]);
            }else{
                return $this->redirect(['action' => 'settings']);
            }
        }
        $this->set('user', $user);
        $this->viewBuilder()->setLayout('main');
    }
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->setLayout('default');
        $user = $this->Users->newEntity();
        $this->set('user', $user);
         // TITRE DE LA PAGE
         $this->set('title', "Ajouter un élève");
        if ($this->request->is('post')) {

            $user = $this->Users->patchEntity($user, $this->request->getData());
            // ON REGARDE SI IL Y A DES ERREURS
            if ($user->errors()) {
                // validation de l'entity a échouée.
                $error_msg = $this->Global->formatErrors($user->errors());
                if(!empty($error_msg)){
                    $this->Flash->error(
                        __("<strong>Erreur !</strong><br>Merci de vérifier les informations suivantes :".implode("", $error_msg))
                    );
                    return $this->redirect(['action' => 'add']);
                }
            }
            // LOWER CASE EMAIL
            $user->email = strtolower($this->request->getData('email'));
            // GENERATE TOKEN
            $user->token = bin2hex(random_bytes(20));
            // GENERATE PASSWORD
            $passwordGenerated = $this->Global->randomPassword();
            $hasher = new DefaultPasswordHasher();
            $user->password = $hasher->hash($passwordGenerated);

            if ($this->Users->save($user)) {
                $email = new Email('default');
                $email
                ->transport('default')
                ->template('default')
                ->emailFormat('html')
                ->to($user->email, $user->firstname . " " . $user->lastname)
                ->subject('Un administrateur a créé votre compte')
                ->from('noreply@le-cercle-digital.fr', 'Le Cercle digital')
                ->viewVars(['username' => $user->firstname . " " . $user->lastname, 'token' => $user->token, 'password' => $user->passwordGenerated, 'email' => $user->email])
                ->send();
                // ENVOI DE L'EMAIL DE CONFIRMATION
                //Please check your emails to activate your account
                $this->Flash->success(__("<strong>Succès !</strong><br>Vous avez bien créé le compte de <strong>" . $user->firstname . " " . $user->lastname . "</strong>."));     
                return $this->redirect(['action' => 'add']);
            }else{
               
                $error_msg = $this->Global->formatErrors($user->errors());

                if(!empty($error_msg)){
                    $this->Flash->error(
                        __("<strong>Erreur !</strong><br>Merci de vérifier les informations suivantes :".implode("", $error_msg))
                    );
                    return $this->redirect(['action' => 'add']);
                }
            }    
        }  
    }

    public function forgotPassword()
    {
        $this->viewBuilder()->setLayout('auth');
        // TITRE DE LA PAGE
        $this->set('title', "Mot de passe oublié");
        // NOUVELLE ENTITE USER
        $user = $this->Users->newEntity();
        $this->set(['user' => $user]);
        
        // SI LE GARS DEMANDE SON MDP
        if($this->request->is(['post'])){

            $user = $this->Users
            ->find()
            ->where(['email =' => $this->request->getData('email')])
            ->first();
            if(!empty($user)){
                // ENVOI DE L'EMAIL D'OUBLIE DE MDP
                $email = new Email('default');
                $email
                ->transport('default')
                ->template('password')
                ->subject('Recover your password')
                ->emailFormat('html')
                ->to($user->email, $user->firstname . " " . $user->lastname)
                ->from('noreply@le-cercle-digital', 'Le Cercle digital')
                ->viewVars(['username' => $user->firstname . " " . $user->lastname,'email' => $user->email ,'token' => $user->token])
                ->send();
                $this->Flash->success(__("Un email vous a été envoyé pour récuper votre mot de passe."));
                return $this->redirect(['action' => 'login']);
            }else{
                // L'EMAIL N'EXISTE PAS
                $this->Flash->error(__("L'email que vous avez entré n'est associé à aucun compte."));
                return $this->redirect(['action' => 'forgotPassword']);
            }
            
        }
    }

    public function recoverPassword($token, $email)
    {
        $this->viewBuilder()->setLayout('auth');
        // TITRE DE LA PAGE
        $this->set('title', "Récupération de mot de passe");
        // NOUVELLE ENTITE USER
        $userEntity = $this->Users->newEntity();
        $this->set(['user' => $userEntity]);
        
        // SEARCH THE USER
        if($this->request->is(['get'])){
            $user = $this->Users
            ->find()
            ->where(['email =' => $email])
            ->first();

            if(!empty($user) && $user->token != $token){
                // ERREUR 403
                throw new ForbiddenException(__("You can't access to this section"));
            }else{
                $this->set(['user' => $user]);
            }
        } 
        // FORMULAIRE

       
    }

    public function password($id = null){
        
        // UPDATE
        $userEntity = $this->Users
            ->find()
            ->where(['id =' => $id])
            ->first();
        $newuser = $this->Users->patchEntity($userEntity, $this->request->getData());
        
        if(empty($newuser->errors('password'))){
            
            // VERIF
            if($newuser->token != $this->request->getData('token')){
                // ERREUR 403
                throw new ForbiddenException(__("You can't access to this section"));
            }
            
            if($this->Users->query()->update()->set(['password' => $newuser->password])->where(['id' => $newuser->id])->execute()){
                $this->Flash->success(__("Your new password has been saved."));
                return $this->redirect(['action' => 'login']);
            }else{
                $this->Flash->error(__("We can't save your password."));
                return $this->redirect(['action' => 'recoverPassword', $newuser->token, $newuser->username]);
            }
                
            
        }else{
            // ERREUR
            $error_msg = [];
            foreach( $user->errors() as $errors){
                if(is_array($errors)){
                    foreach($errors as $error){
                        $error_msg[]    = "<br> - " . $error;
                    }
                }else{
                    $error_msg[]    =   "<br> - " . $errors;
                }
            }

            if(!empty($error_msg)){
                $this->Flash->error(
                    __("<strong>Error!</strong><br>Please fix the following error(s):".implode("", $error_msg))
                );
                return $this->redirect(['action' => 'recoverPassword', $newuser->token, $newuser->username]);
            }
        }
        $this->autoRender = false;
    }

    public function logout()
    {
        $this->Cookie->delete('connects');
        $past = time() - 86400; 
        setcookie("connects", '', $past, "/", "localhost");
        
        $this->Auth->logout();
        $this->Flash->success(__("Vous êtes déconnecté."));

        return $this->redirect(["action" => "login"]); 
    }

}

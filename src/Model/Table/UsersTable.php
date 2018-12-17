<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\RolesTable|\Cake\ORM\Association\BelongsTo $Roles
 * @property \App\Model\Table\PhotosTable|\Cake\ORM\Association\BelongsTo $Photos
 * @property \App\Model\Table\ChecksTable|\Cake\ORM\Association\HasMany $Checks
 * @property \App\Model\Table\LoaningsTable|\Cake\ORM\Association\HasMany $Loanings
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Roles', [
            'foreignKey' => 'role_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Photos', [
            'foreignKey' => 'photo_id'
        ]);
        $this->hasMany('Checks', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Loanings', [
            'foreignKey' => 'user_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {

        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email')->add('email', 'validCharss', [
                'rule' => function ($data, $provider) {
                    if ($data == strip_tags($data)) {
                        return true;
                    }else{
                        return "Veuillez enlever les caractères spéciaux svp.";
                    }
                }
            ]);

        $validator
            ->scalar('password')
            ->maxLength('password', 50)
            ->minLength('password', 8, "Le mot de passe doit contenir au moins 8 caractères.")
            ->notEmpty('password');
        $validator
            ->scalar('new_password')
            ->allowEmpty('new_password')
            ->maxLength('new_password', 50)
            ->minLength('new_password', 8, "Le mot de passe doit contenir au moins 8 caractères.")
            ->sameAs('password','new_password','Les mots de passe doivent être identiques.')
            ->allowEmpty('new_password');

        $validator
            ->scalar('token')
            ->maxLength('token', 255)
            ->notEmpty('token');

        $validator
            ->scalar('firstname')
            ->maxLength('firstname', 45)
            ->allowEmpty('firstname')->add('firstname', 'validCharss', [
                'rule' => function ($data, $provider) {
                    if ($data == strip_tags($data)) {
                        return true;
                    }else{
                        return "Veuillez enlever les caractères spéciaux svp.";
                    }
                }
            ]);

        $validator
            ->scalar('lastname')
            ->maxLength('lastname', 45)
            ->allowEmpty('lastname')->add('lastname', 'validCharss', [
                'rule' => function ($data, $provider) {
                    if ($data == strip_tags($data)) {
                        return true;
                    }else{
                        return "Veuillez enlever les caractères spéciaux svp.";
                    }
                }
            ]);
        $validator
            ->numeric('archived')
            ->allowEmpty('archived');
        

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email'], 'Cette adresse email est déjà enregistrée.'));
        $rules->add($rules->existsIn(['role_id'], 'Roles'));
        $rules->add($rules->existsIn(['photo_id'], 'Photos'));

        return $rules;
    }
}

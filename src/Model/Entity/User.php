<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property int $role_id
 * @property string $password
 * @property string $lastname
 * @property string $firstname
 * @property string $phone
 * @property string $email
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property bool|null $archived
 * @property string|null $token
 * @property int|null $photo_id
 *
 * @property \App\Model\Entity\Role $role
 * @property \App\Model\Entity\Photo $photo
 * @property \App\Model\Entity\Check[] $checks
 * @property \App\Model\Entity\Loaning[] $loanings
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'role_id' => true,
        'password' => true,
        'lastname' => true,
        'firstname' => true,
        'phone' => true,
        'email' => true,
        'created' => true,
        'modified' => true,
        'archived' => true,
        'token' => true,
        'photo_id' => true,
        'role' => true,
        'photo' => true,
        'checks' => true,
        'loanings' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
        'token'
    ];
}

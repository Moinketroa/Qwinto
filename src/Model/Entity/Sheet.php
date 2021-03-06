<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sheet Entity.
 *
 * @property int $id
 * @property string $cases
 * @property string $nb_croix
 * @property int $num_joueur
 * @property int $game_id
 * @property \App\Model\Entity\Game $game
 * @property int $user_id
 * @property \App\Model\Entity\User $user
 */
class Sheet extends Entity
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
        '*' => true,
        'id' => false,
    ];
}

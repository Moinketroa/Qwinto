<?php
namespace App\Model\Table;

use App\Model\Entity\Game;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Games Model
 *
 * @property \Cake\ORM\Association\HasMany $Sheets
 */
class GamesTable extends Table
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

        $this->table('games');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('Sheets', [
            'foreignKey' => 'game_id'
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->add('tour', 'valid', ['rule' => 'numeric'])
            ->requirePresence('tour', 'create')
            ->notEmpty('tour');

        return $validator;
    }
}

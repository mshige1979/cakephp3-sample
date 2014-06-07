<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Members Model
 */
class MembersTable extends Table {

/**
 * Initialize method
 *
 * @param array $config The configuration for the Table.
 * @return void
 */
	public function initialize(array $config) {
		$this->table('members');
		$this->displayField('name');
		$this->primaryKey(['id']);
		$this->addBehavior('Timestamp');

	}

/**
 * Default validation rules.
 *
 * @param \Cake\Validation\Validator $validator
 * @return \Cake\Validation\Validator
 */
	public function validationDefault(Validator $validator) {
		$validator
			->add('id', 'valid', ['rule' => 'numeric'])
			->allowEmpty('id', 'create')
			->allowEmpty('name')
			->add('age', 'valid', ['rule' => 'numeric'])
			->allowEmpty('age')
			->allowEmpty('tel');

		return $validator;
	}

}

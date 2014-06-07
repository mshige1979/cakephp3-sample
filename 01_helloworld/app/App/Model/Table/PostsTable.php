<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class PostsTable extends Table {

    public function validationDefault(Validator $validator) {
        $validator
            ->add('title', 'notEmpty', [
                'rule' => 'notEmpty',
                'message' => 'You need to provide a title',
            ])
            ->add('body', 'notEmpty', [
                'rule' => 'notEmpty',
                'message' => 'A body is required',
            ]);
        return $validator;
    }

}

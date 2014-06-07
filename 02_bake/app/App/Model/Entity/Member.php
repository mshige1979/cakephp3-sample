<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Member Entity.
 */
class Member extends Entity {

/**
 * Fields that can be mass assigned using newEntity() or patchEntity().
 *
 * @var array
 */
	protected $_accessible = [
		'name' => true,
		'age' => true,
		'tel' => true,
	];

}

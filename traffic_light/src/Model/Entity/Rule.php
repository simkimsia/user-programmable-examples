<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Rule Entity.
 */
class Rule extends Entity {

/**
 * Fields that can be mass assigned using newEntity() or patchEntity().
 *
 * @var array
 */
	protected $_accessible = [
		'rule' => true,
	];

}

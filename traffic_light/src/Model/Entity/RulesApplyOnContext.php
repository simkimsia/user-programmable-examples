<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RulesApplyOnContext Entity.
 */
class RulesApplyOnContext extends Entity {

/**
 * Fields that can be mass assigned using newEntity() or patchEntity().
 *
 * @var array
 */
	protected $_accessible = [
		'rule_id' => true,
		'context_id' => true,
		'pass' => true,
		'rule' => true,
		'context' => true,
	];

}

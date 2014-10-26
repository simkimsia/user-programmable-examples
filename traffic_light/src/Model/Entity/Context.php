<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Context Entity.
 */
class Context extends Entity {

/**
 * Fields that can be mass assigned using newEntity() or patchEntity().
 *
 * @var array
 */
	protected $_accessible = [
		'lights' => true,
		'left_incoming_traffic' => true,
		'right_incoming_traffic' => true,
	];

}

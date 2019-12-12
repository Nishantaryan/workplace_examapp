<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Exam Entity
 *
 * @property int $id
 * @property string $name
 * @property string $duration
 * @property string $type
 * @property string $total_marks
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Response[] $responses
 */
class Exam extends Entity
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
        'name' => true,
        'duration' => true,
        'type' => true,
        'total_marks' => true,
        'created' => true,
        'modified' => true,
        'responses' => true
    ];
}

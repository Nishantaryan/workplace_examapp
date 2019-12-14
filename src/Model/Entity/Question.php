<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Question Entity
 *
 * @property int $id
 * @property string $name
 * @property string $type
 * @property int $level
 * @property int $negative_marks
 * @property int $mark_contain
 * @property string $option_a
 * @property string $option_b
 * @property string $option_c
 * @property string $option_d
 * @property string $option_e
 * @property int $option_count
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Response[] $responses
 */
class Question extends Entity
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
        'type' => true,
        'level' => true,
        'negative_marks' => true,
        'mark_contain' => true,
        'option_a' => true,
        'option_b' => true,
        'option_c' => true,
        'option_d' => true,
        'option_e' => true,
        'option_count' => true,
        'created' => true,
        'modified' => true,
        'responses' => true
    ];
}

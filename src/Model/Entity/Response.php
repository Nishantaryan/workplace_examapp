<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Response Entity
 *
 * @property int $id
 * @property int $exam_id
 * @property int $user_id
 * @property int $question_id
 * @property string $answer
 * @property string $description
 * @property int $marks
 * @property int|null $total
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Exam $exam
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Question $question
 */
class Response extends Entity
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
        'exam_id' => true,
        'user_id' => true,
        'question_id' => true,
        'answer' => true,
        'description' => true,
        'marks' => true,
        'total' => true,
        'created' => true,
        'modified' => true,
        'exam' => true,
        'user' => true,
        'question' => true
    ];
}

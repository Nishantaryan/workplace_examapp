<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Examsquestion Entity
 *
 * @property int $id
 * @property int $exams_id
 * @property int $questions_id
 *
 * @property \App\Model\Entity\Exam $exam
 * @property \App\Model\Entity\Question $question
 */
class Examsquestion extends Entity
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
        'exams_id' => true,
        'questions_id' => true,
        'exam' => true,
        'question' => true
    ];
}

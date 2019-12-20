<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Questions Model
 *
 * @property \App\Model\Table\ResponsesTable&\Cake\ORM\Association\HasMany $Responses
 * @property \App\Model\Table\ExamsTable&\Cake\ORM\Association\BelongsToMany $Exams
 *
 * @method \App\Model\Entity\Question get($primaryKey, $options = [])
 * @method \App\Model\Entity\Question newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Question[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Question|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Question saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Question patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Question[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Question findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class QuestionsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('questions');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Responses', [
            'foreignKey' => 'question_id',
        ]);
        $this->belongsToMany('Exams', [
            'foreignKey' => 'question_id',
            'targetForeignKey' => 'exam_id',
            'joinTable' => 'exams_questions',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('type')
            ->maxLength('type', 50)
            ->requirePresence('type', 'create')
            ->notEmptyString('type');

        $validator
            ->integer('level')
            ->requirePresence('level', 'create')
            ->notEmptyString('level');

        $validator
            ->integer('negative_marks')
            ->requirePresence('negative_marks', 'create')
            ->notEmptyString('negative_marks');

        $validator
            ->integer('mark_contain')
            ->requirePresence('mark_contain', 'create')
            ->notEmptyString('mark_contain');

        $validator
            ->scalar('option_a')
            ->maxLength('option_a', 255)
            ->requirePresence('option_a', 'create')
            ->notEmptyString('option_a');

        $validator
            ->scalar('option_b')
            ->maxLength('option_b', 255)
            ->requirePresence('option_b', 'create')
            ->notEmptyString('option_b');

        $validator
            ->scalar('option_c')
            ->maxLength('option_c', 255)
            ->requirePresence('option_c', 'create')
            ->notEmptyString('option_c');

        $validator
            ->scalar('option_d')
            ->maxLength('option_d', 255)
            ->requirePresence('option_d', 'create')
            ->notEmptyString('option_d');

        $validator
            ->scalar('option_e')
            ->maxLength('option_e', 255)
            ->requirePresence('option_e', 'create')
            ->notEmptyString('option_e');

        $validator
            ->integer('option_count')
            ->requirePresence('option_count', 'create')
            ->notEmptyString('option_count');

        return $validator;
    }
}

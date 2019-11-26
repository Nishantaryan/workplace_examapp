<?php
use Migrations\AbstractMigration;

class CreateQuestions extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function up()
    {
        $this->table('questions')
      
        ->addColumn('type', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ])
        ->addColumn('option_a', 'boolean', [
            'default' => null,
            'limit' => 1,
            'null' => false,
        ])
        ->addColumn('option_b', 'boolean', [
            'default' => null,
            'limit' => 1,
            'null' => false,
        ])
        ->addColumn('option_c', 'boolean', [
            'default' => null,
            'limit' => 1,
            'null' => false,
        ])
        ->addColumn('option_d', 'boolean', [
            'default' => null,
            'limit' => 1,
            'null' => false,
        ])
        ->addColumn('option_e', 'boolean', [
            'default' => null,
            'limit' => 1,
            'null' => false,
        ])
        ->addColumn('exam_id', 'integer', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ])
        ->addColumn('level', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ])
        ->addColumn('marks', 'integer', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ])
        ->addColumn('negative_marks', 'float', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ])
        ->addColumn('created', 'datetime', [
            'default' => 'CURRENT_TIMESTAMP',
            'limit' => null,
            'null' => false,
        ])
        ->addColumn('modified', 'datetime', [
            'default' => null,
            'limit' => null,
            'null' => false,
        ])
        ->create();
    }
    public function down()
    {
        $this->dropTable('exams');
    }
}

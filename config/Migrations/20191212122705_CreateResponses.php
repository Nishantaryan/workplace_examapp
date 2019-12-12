<?php
use Migrations\AbstractMigration;

class CreateResponses extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('responses');
        $table
        ->addColumn('exam_id', 'integer', [
            'default' => null,
            'limit' => 255,
            'null' => false
        ])
            ->addColumn('user_id', 'integer', [
                'default' => null,
                'limit' => 255,
                'null' => false
            ])
           
            ->addColumn('question_id', 'integer', [
                'default' => null,
                'limit' => 50,
                'null' => false
            ])
            ->addColumn('answer', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false
            ])
            ->addColumn('description', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false
            ])
            ->addColumn('marks', 'integer', [
                'default' => null,
                'limit' => 255,
                'null' => false
            ])
            ->addColumn('total', 'integer', [
                'default' => 0,
                'null' => true
            ])
            ->addColumn('created', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true
            ])
            ->create();
    }
    public function down()
    {
        $this->dropTable('responses');
    }
}

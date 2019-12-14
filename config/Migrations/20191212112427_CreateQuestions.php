<?php
use Migrations\AbstractMigration;

class CreateQuestions extends AbstractMigration
{
    
    public function up()
    {
        $table = $this->table('questions');
        $table
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('type', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('level', 'integer', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('negative_marks', 'integer', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('mark_contain', 'integer', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('option_a', 'text', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('option_b', 'text', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('option_c', 'text', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('option_d', 'text', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('option_e', 'text', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
                
            ->addColumn('option_count', 'integer', [
                'default' => null,
                'limit' => 50,
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
                'null' => true,
            ])
            ->create();

       
    }
   public function down()
    {
        $this->dropTable('questions');
    }
}

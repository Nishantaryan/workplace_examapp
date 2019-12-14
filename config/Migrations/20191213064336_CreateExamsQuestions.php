<?php
use Migrations\AbstractMigration;

class CreateExamsQuestions extends AbstractMigration
{
   
    public function up()
    {
        
        $table = $this->table('examsquestions');
        $table
            ->addColumn('exams_id', 'integer', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('questions_id', 'integer', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            
            ->create();

       
    }
   public function down()
    {
        $this->dropTable('examsquestions');
    }
}

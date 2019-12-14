<?php
use Migrations\AbstractMigration;

class ExamsidQuestionsid extends AbstractMigration
{
    
    public function up()
    {
        
        $table = $this->table('examsid_questionsid');
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
        $this->dropTable('examsid_questionsid');
    }
}

<?php
use Migrations\AbstractMigration;

class CreateSubjects extends AbstractMigration
{
    
    public function up()
    {
        $table = $this->table('subjects');
        $table
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('time', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('total_marks', 'string', [
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
        $this->dropTable('subjects');
    }
}

<?php
namespace App\Controller\Api;

use App\Controller\Api\AppController;

class ExamsController extends AppController
{
    public $paginate = [
        'page' => 1,
        'limit' => 5,
        'maxLimit' => 15,
        'sortWhitelist' => [
            'id', 'name'
        ]
    ];

    public function view($id){
        $this->Crud->on('beforeFind', function(\Cake\Event\Event $event) 
        {
            //$event->subject()->query->contain(['Types','Menus']);
            
            $event->subject()->query->contain(['questions']);
        });
        return $this->Crud->execute();
     }
}
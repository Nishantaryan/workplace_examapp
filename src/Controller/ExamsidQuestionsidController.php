<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ExamsidQuestionsid Controller
 *
 * @property \App\Model\Table\ExamsidQuestionsidTable $ExamsidQuestionsid
 *
 * @method \App\Model\Entity\ExamsidQuestionsid[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ExamsidQuestionsidController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Exams', 'Questions']
        ];
        $examsidQuestionsid = $this->paginate($this->ExamsidQuestionsid);

        $this->set(compact('examsidQuestionsid'));
    }

    /**
     * View method
     *
     * @param string|null $id Examsid Questionsid id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $examsidQuestionsid = $this->ExamsidQuestionsid->get($id, [
            'contain' => ['Exams', 'Questions']
        ]);

        $this->set('examsidQuestionsid', $examsidQuestionsid);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $examsidQuestionsid = $this->ExamsidQuestionsid->newEntity();
        if ($this->request->is('post')) {
            $examsidQuestionsid = $this->ExamsidQuestionsid->patchEntity($examsidQuestionsid, $this->request->getData());
            if ($this->ExamsidQuestionsid->save($examsidQuestionsid)) {
                $this->Flash->success(__('The examsid questionsid has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The examsid questionsid could not be saved. Please, try again.'));
        }
        $exams = $this->ExamsidQuestionsid->Exams->find('list', ['limit' => 200]);
        $questions = $this->ExamsidQuestionsid->Questions->find('list', ['limit' => 200]);
        $this->set(compact('examsidQuestionsid', 'exams', 'questions'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Examsid Questionsid id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $examsidQuestionsid = $this->ExamsidQuestionsid->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $examsidQuestionsid = $this->ExamsidQuestionsid->patchEntity($examsidQuestionsid, $this->request->getData());
            if ($this->ExamsidQuestionsid->save($examsidQuestionsid)) {
                $this->Flash->success(__('The examsid questionsid has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The examsid questionsid could not be saved. Please, try again.'));
        }
        $exams = $this->ExamsidQuestionsid->Exams->find('list', ['limit' => 200]);
        $questions = $this->ExamsidQuestionsid->Questions->find('list', ['limit' => 200]);
        $this->set(compact('examsidQuestionsid', 'exams', 'questions'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Examsid Questionsid id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $examsidQuestionsid = $this->ExamsidQuestionsid->get($id);
        if ($this->ExamsidQuestionsid->delete($examsidQuestionsid)) {
            $this->Flash->success(__('The examsid questionsid has been deleted.'));
        } else {
            $this->Flash->error(__('The examsid questionsid could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

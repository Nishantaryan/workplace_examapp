<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ExamsQuestions Controller
 *
 * @property \App\Model\Table\ExamsQuestionsTable $ExamsQuestions
 *
 * @method \App\Model\Entity\ExamsQuestion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ExamsQuestionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Exams', 'Questions'],
        ];
        $examsQuestions = $this->paginate($this->ExamsQuestions);

        $this->set(compact('examsQuestions'));
    }

    /**
     * View method
     *
     * @param string|null $id Exams Question id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $examsQuestion = $this->ExamsQuestions->get($id, [
            'contain' => ['Exams', 'Questions'],
        ]);

        $this->set('examsQuestion', $examsQuestion);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $examsQuestion = $this->ExamsQuestions->newEntity();
        if ($this->request->is('post')) {
            $examsQuestion = $this->ExamsQuestions->patchEntity($examsQuestion, $this->request->getData());
            if ($this->ExamsQuestions->save($examsQuestion)) {
                $this->Flash->success(__('The exams question has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The exams question could not be saved. Please, try again.'));
        }
        $exams = $this->ExamsQuestions->Exams->find('list', ['limit' => 200]);
        $questions = $this->ExamsQuestions->Questions->find('list', ['limit' => 200]);
        $this->set(compact('examsQuestion', 'exams', 'questions'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Exams Question id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $examsQuestion = $this->ExamsQuestions->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $examsQuestion = $this->ExamsQuestions->patchEntity($examsQuestion, $this->request->getData());
            if ($this->ExamsQuestions->save($examsQuestion)) {
                $this->Flash->success(__('The exams question has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The exams question could not be saved. Please, try again.'));
        }
        $exams = $this->ExamsQuestions->Exams->find('list', ['limit' => 200]);
        $questions = $this->ExamsQuestions->Questions->find('list', ['limit' => 200]);
        $this->set(compact('examsQuestion', 'exams', 'questions'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Exams Question id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $examsQuestion = $this->ExamsQuestions->get($id);
        if ($this->ExamsQuestions->delete($examsQuestion)) {
            $this->Flash->success(__('The exams question has been deleted.'));
        } else {
            $this->Flash->error(__('The exams question could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

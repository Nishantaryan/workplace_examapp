<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Examsquestions Controller
 *
 * @property \App\Model\Table\ExamsquestionsTable $Examsquestions
 *
 * @method \App\Model\Entity\Examsquestion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ExamsquestionsController extends AppController
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
        $examsquestions = $this->paginate($this->Examsquestions);

        $this->set(compact('examsquestions'));
    }

    /**
     * View method
     *
     * @param string|null $id Examsquestion id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $examsquestion = $this->Examsquestions->get($id, [
            'contain' => ['Exams', 'Questions']
        ]);

        $this->set('examsquestion', $examsquestion);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $examsquestion = $this->Examsquestions->newEntity();
        if ($this->request->is('post')) {
            $examsquestion = $this->Examsquestions->patchEntity($examsquestion, $this->request->getData());
            if ($this->Examsquestions->save($examsquestion)) {
                $this->Flash->success(__('The examsquestion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The examsquestion could not be saved. Please, try again.'));
        }
        $exams = $this->Examsquestions->Exams->find('list', ['limit' => 200]);
        $questions = $this->Examsquestions->Questions->find('list', ['limit' => 200]);
        $this->set(compact('examsquestion', 'exams', 'questions'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Examsquestion id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $examsquestion = $this->Examsquestions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $examsquestion = $this->Examsquestions->patchEntity($examsquestion, $this->request->getData());
            if ($this->Examsquestions->save($examsquestion)) {
                $this->Flash->success(__('The examsquestion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The examsquestion could not be saved. Please, try again.'));
        }
        $exams = $this->Examsquestions->Exams->find('list', ['limit' => 200]);
        $questions = $this->Examsquestions->Questions->find('list', ['limit' => 200]);
        $this->set(compact('examsquestion', 'exams', 'questions'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Examsquestion id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $examsquestion = $this->Examsquestions->get($id);
        if ($this->Examsquestions->delete($examsquestion)) {
            $this->Flash->success(__('The examsquestion has been deleted.'));
        } else {
            $this->Flash->error(__('The examsquestion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

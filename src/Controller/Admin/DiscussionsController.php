<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Discussions Controller
 *
 * @property \App\Model\Table\DiscussionsTable $Discussions
 *
 * @method \App\Model\Entity\Discussion[] paginate($object = null, array $settings = [])
 */
class DiscussionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $discussions = $this->paginate($this->Discussions);

        $this->set(compact('discussions'));
        $this->set('_serialize', ['discussions']);
    }

    /**
     * View method
     *
     * @param string|null $id Discussion id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $discussion = $this->Discussions->get($id, [
            'contain' => ['Timelines']
        ]);

        $this->set('discussion', $discussion);
        $this->set('_serialize', ['discussion']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $discussion = $this->Discussions->newEntity();
        if ($this->request->is('post')) {
            $discussion = $this->Discussions->patchEntity($discussion, $this->request->getData());
            if ($this->Discussions->save($discussion)) {
                $this->Flash->success(__('The discussion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The discussion could not be saved. Please, try again.'));
        }
        $this->set(compact('discussion'));
        $this->set('_serialize', ['discussion']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Discussion id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $discussion = $this->Discussions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $discussion = $this->Discussions->patchEntity($discussion, $this->request->getData());
            if ($this->Discussions->save($discussion)) {
                $this->Flash->success(__('The discussion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The discussion could not be saved. Please, try again.'));
        }
        $this->set(compact('discussion'));
        $this->set('_serialize', ['discussion']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Discussion id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $discussion = $this->Discussions->get($id);
        if ($this->Discussions->delete($discussion)) {
            $this->Flash->success(__('The discussion has been deleted.'));
        } else {
            $this->Flash->error(__('The discussion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

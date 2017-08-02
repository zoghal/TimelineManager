<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Timelines Controller
 *
 * @property \App\Model\Table\TimelinesTable $Timelines
 *
 * @method \App\Model\Entity\Timeline[] paginate($object = null, array $settings = [])
 */
class TimelinesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Discussions', 'Locations']
        ];
        $timelines = $this->paginate($this->Timelines);

        $this->set(compact('timelines'));
        $this->set('_serialize', ['timelines']);
    }

    /**
     * View method
     *
     * @param string|null $id Timeline id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $timeline = $this->Timelines->get($id, [
            'contain' => ['Discussions', 'Locations', 'Contacts', 'Tags']
        ]);

        $this->set('timeline', $timeline);
        $this->set('_serialize', ['timeline']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $timeline = $this->Timelines->newEntity();
        if ($this->request->is('post')) {
            $timeline = $this->Timelines->patchEntity($timeline, $this->request->getData());
            if ($this->Timelines->save($timeline)) {
                $this->Flash->success(__('The timeline has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The timeline could not be saved. Please, try again.'));
        }
        $discussions = $this->Timelines->Discussions->find('list', ['limit' => 200]);
        $locations = $this->Timelines->Locations->find('list', ['limit' => 200]);
        $contacts = $this->Timelines->Contacts->find('list', ['limit' => 200]);
        $tags = $this->Timelines->Tags->find('list', ['limit' => 200]);
        $this->set(compact('timeline', 'discussions', 'locations', 'contacts', 'tags'));
        $this->set('_serialize', ['timeline']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Timeline id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $timeline = $this->Timelines->get($id, [
            'contain' => ['Contacts', 'Tags']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $timeline = $this->Timelines->patchEntity($timeline, $this->request->getData());
            if ($this->Timelines->save($timeline)) {
                $this->Flash->success(__('The timeline has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The timeline could not be saved. Please, try again.'));
        }
        $discussions = $this->Timelines->Discussions->find('list', ['limit' => 200]);
        $locations = $this->Timelines->Locations->find('list', ['limit' => 200]);
        $contacts = $this->Timelines->Contacts->find('list', ['limit' => 200]);
        $tags = $this->Timelines->Tags->find('list', ['limit' => 200]);
        $this->set(compact('timeline', 'discussions', 'locations', 'contacts', 'tags'));
        $this->set('_serialize', ['timeline']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Timeline id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $timeline = $this->Timelines->get($id);
        if ($this->Timelines->delete($timeline)) {
            $this->Flash->success(__('The timeline has been deleted.'));
        } else {
            $this->Flash->error(__('The timeline could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

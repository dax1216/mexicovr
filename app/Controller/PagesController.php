<?php

App::uses('AppController', 'Controller');

/**
 * Pages Controller
 *
 * @property Page $Page
 */
class PagesController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function beforeFilter() {
        parent::beforeFilter();

        $this->Auth->allow(array('privacy','display','about'));
        $this->layout = "admin";
    }

    /**
     * Displays a view
     *
     * @param mixed What page to display
     * @return void
     * @throws NotFoundException When the view file could not be found
     * 	or MissingViewException in debug mode.
     */
    public function display() {
        $path = func_get_args();

        $count = count($path);
        if (!$count) {
            return $this->redirect('/');
        }
        $page = $subpage = $title_for_layout = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        if (!empty($path[$count - 1])) {
            $title_for_layout = Inflector::humanize($path[$count - 1]);
        }
        $this->set(compact('page', 'subpage', 'title_for_layout'));

//        try {
//            $this->render(implode('/', $path));
//        } catch (MissingViewException $e) {
//            if (Configure::read('debug')) {
//                throw $e;
//            }
//            throw new NotFoundException();
//        }
        $page = $this->Page->find('first', array('conditions'=>array('Page.slug'=>$path), 'fields'=>array('Page.content', 'Page.title')));
        $this->layout = "page";
        $this->set('page', $page);
        $this->render('display');
    }

    public function index() {
        $this->Page->recursive = 0;
        $this->set('pages', $this->paginate());
    }

    public function about() {
        $slug = 'about';
        $content = $this->Page->find('first', array('conditions' => array('Page.slug' => $slug)));
        $this->set('content', $content);
    }

    public function privacy() {
        $slug = 'privacy';
        $content = $this->Page->find('first', array('conditions' => array('Page.slug' => $slug)));
        $this->set('content', $content);
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        $this->layout = "admin";
        $this->Page->id = $id;
        if (!$this->Page->exists()) {
            throw new NotFoundException(__('Invalid page'));
        }
        $this->set('page', $this->Page->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Page->create();
            $this->request->data['Page']['slug'] = strtolower(str_replace(" ", "_", $this->request->data['Page']['title']));
            if ($this->Page->save($this->request->data)) {
                $this->Session->setFlash(__('The page has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The page could not be saved. Please, try again.'));
            }
        }
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_edit($id = null) {
        $this->layout = "admin";
        $this->Page->id = $id;
        if (!$this->Page->exists()) {
            throw new NotFoundException(__('Invalid page'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Page->save($this->request->data)) {
                $this->Session->setFlash(__('The page has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The page could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Page->read(null, $id);
        }
    }

    /**
     * delete method
     *
     * @throws MethodNotAllowedException
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Page->id = $id;
        if (!$this->Page->exists()) {
            throw new NotFoundException(__('Invalid page'));
        }
        if ($this->Page->delete()) {
            $this->Session->setFlash(__('Page deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Page was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    public function admin_index() {
        $this->layout = "admin";
        $this->Page->recursive = 0;
        $this->set('pages', $this->paginate());
    }

    public function generate_excerpt() {
        $dest = isset($this->request->data['dest'])?$this->request->data['dest']:'';
        $destData = $this->Page->find('first', array('conditions'=>array('Page.title'=>$dest), 'fields'=>array('Page.slug', 'Page.content')));
        if(sizeof($destData)){
            echo json_encode(array('slug'=>$destData['Page']['slug'], 'content'=>$this->getExcerpt($destData['Page']['content'])));
        }else{
            echo json_encode(array('slug'=>'#', 'content'=>''));
        }
        $this->layout = 'ajax';
        $this->autoRender = false;
    }
    
    private function getExcerpt($str, $startPos=0, $maxLength=230) {
            if(strlen($str) > $maxLength) {
                    $excerpt   = substr($str, $startPos, $maxLength-3);
                    $lastSpace = strrpos($excerpt, ' ');
                    $excerpt   = substr($excerpt, 0, $lastSpace);
                    $excerpt  .= '...';
            } else {
                    $excerpt = $str;
            }

            return $excerpt;
    }
    
//    public function add_city(){
////        if ($this->request->is('post')) {
//            $this->Page->create();
//            $this->request->data['Page']['slug'] = strtolower(str_replace(" ", "_", $this->request->data['city']));
//            $this->request->data['Page']['title'] = $this->request->data['city'];
//            $this->request->data['Page']['content'] = "For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.";
//            if ($this->Page->save($this->request->data)) {
//                echo json_encode(array('message'=>'success'));
////                $this->Session->setFlash(__('The page has been saved'));
////                $this->redirect(array('action' => 'index'));
//            } else {
//                echo json_encode(array('message'=>'error'));
////                $this->Session->setFlash(__('The page could not be saved. Please, try again.'));
//            }
//            $this->layout = 'ajax';
//        $this->autoRender = false;
////        }
//    }
}

<?php
class JogosController extends AppController{
	public $components = array('Session','Paginator');
	public $paginate = array(
        'limit' => 10,
        'order' => array(
            'Jogo.nome' => 'asc'
        )
    );
	
	/*
	 * Index
	 */
	public function index(){
		$this->Paginator->settings = $this->paginate;
		$data = $this->Paginator->paginate('Jogo');
		$this->set('jogos',$data);
		//$this->set('jogos', $this->Jogo->find('all'));
	}
	
	/*
	 * Tela de edição
	 * @param id
	 */
	public function view($id){
		if (!$id) {
			throw new NotFoundException(__('Jogo inválido'));
		}
		
		$jogo = $this->Jogo->findById($id);
		if (!$jogo) {
			throw new NotFoundException(__('Jogo inválido'));
		}
		$this->set('jogo', $jogo);
	}
	
	/*
	 * Adiciona Jogo
	 */
	public function add(){
		if($this->request->is('post')){
			$this->Jogo->create();
			if($this->Jogo->save($this->request->data)){
				$this->Session->setFlash(__('Jogo gravado com sucesso'));
				return $this->redirect(array('action'=>'index'));
			}
		}
	}
    
	/*
	 * Edição de jogo
	 * @param id
	 */
    public function edit($id = null){
        
        if($this->Auth->user('role')!='admin'){
            $this->Session->setFlash("Sem permissão de acesso!");
             return $this->redirect(array('action'=>'index'));
        }
        if(!$id){
            throw new NotFoundException(__('Jogo não encontrado'));
        }
        
        $jogo = $this->Jogo->id = $id;
        if(!$jogo){
        	throw new NotFoundException("Jogo não Encontrado.");
        }
        
        if($this->request->is(array('post','put'))){
        	$this->Jogo->id = $id;
        	if($this->Jogo->save($this->request->data)){
                    $this->Session->setFlash("Editado com sucesso!");
                    return $this->redirect(array('action'=>'index'));
        	}
        }else{
            if (!$id) {
                    throw new NotFoundException(__('Jogo inválido'));
            }
		
            $jogo = $this->Jogo->findById($id);
            if (!$jogo) {
                    throw new NotFoundException(__('Jogo inválido'));
            }
            $this->set('jogo', $jogo);
        }   
    }
    
    public function delete($id = null) {
        $this->request->onlyAllow('post');

        $this->Jogo->id = $id;
        if (!$this->Jogo->exists()) {
            throw new NotFoundException(__('Jogo inválido.'));
        }
        if ($this->Jogo->delete()) {
            $this->Session->setFlash(__('Jogo deletado.'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Jogo não foi deletado.'));
        return $this->redirect(array('action' => 'index'));
    }
}
?>
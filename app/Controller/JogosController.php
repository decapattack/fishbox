<?php
class JogosController extends AppController{
	public $components = array('Session');
	/*public $components = array('Paginator');
	public $paginate = array(
		'limit'=>2,
		'order'=>array(
			'Jogo.nome'=>'asc'			
		)
	);*/
	
	/*
	 * Index
	 */
	public function index(){
		/*$this->Paginator->settings = $this->paginate;
		$data = $this->Paginator->paginate('jogo');
		$this->set('jogo',$data);*/
		$this->set('jogos', $this->Jogo->find('all'));
	}
	
	/*
	 * Tela de edi��o
	 * @param id
	 */
	public function view($id){
		if (!$id) {
			throw new NotFoundException(__('Jogo inválido'));
		}
		
		$jogo = $this->Jogo->findById($id);
		if (!jogo) {
			throw new NotFoundException(__('Invalid post'));
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
	 * A��o de edi��o de jogo
	 * @param id
	 */
    public function edit($id = null){
        if(!$id){
            throw new NotFoundException(__('Jogo n�o encontrado'));
        }
        
        $post = $this->Jogo->id = $id;
        if(!jogo){
        	throw new NotFoundException("Jogo N�o Encontrado.");
        }
        
        if($this->request->is(array('post','put'))){
        	$this->Jogo->id = $id;
        	if($this->Jogo->save($this->request->data)){
        		$this->Session->setFlash("Editado com sucesso!");
        		return $this->redirect(array('action'=>'index'));
        	}
        }
        
        if($this->request->data){
        	$this->request->data = $jogo;
        }
    }
}
?>
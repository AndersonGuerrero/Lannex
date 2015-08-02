<?php
class AdminController extends AppController{
    
    
    public function index(){
        $this->redirect(array('controller'=>'admin','action' => 'Entrar'));
            }


    public function Entrar(){
        
        
        if($this->Session->read('admin')){ $this->redirect(array('controller'=>'notificacion','action' =>'lista'));}
        
         if ($this->request->is('post')){
             
             $ADMIN=$this->Admin->findByUsuario($this->request->data('Usuario'));
             
             if($ADMIN){
                  if($ADMIN['Admin']['Clave']==md5($this->request->data('Clave'))){
                      
                      $this->Session->write('admin',$ADMIN['Admin']);
              $this->Session->setFlash('Bienvenido(a) '.$ADMIN['Admin']['Nombre'].' '.$ADMIN['Admin']['Apellido'],'bueno');
                       $this->redirect(array('controller'=>'notificacion','action' =>'lista'));
                  }else{$this->Session->setFlash("Contraseña Incorecta",'malo');}
                 
             }else{$this->Session->setFlash("El Usuario No Existe",'malo');}
             
         }
		$this->set('title', 'Inicio de Sesion');
	}
    
    public function Registrar(){
	if(!$this->Session->read('admin')){
		$this->redirect(array('controller'=>'admin','action' => 'Entrar'));}

          if ($this->request->is('post')){
             
              $ADMIN=array('Nombre'=>$this->request->data('Nombre'),
                        'Apellido'=>$this->request->data('Apellido'),
                        'Cedula'=>$this->request->data('Cedula'),
                        'Telefono'=>$this->request->data('Telefono'),
                        'Usuario'=>$this->request->data('Usuario'),
                        'Clave'=>  md5($this->request->data('Clave')));
              
                 if ($this->Admin->save($ADMIN)){    
                $this->Session->setFlash('El Administrador Fue Registrado Exitosamente.','bueno');
                $this->redirect(array('controller'=>'admin','action' => 'Registrar'));
            }             
         }
 		$this->set('title', 'Registro de Administradores');
	}
         
         
         
         public function Salir(){
             $this->Session->destroy();
              $this->redirect(array('controller'=>'inicio','action' => 'index','home'));
         }
}
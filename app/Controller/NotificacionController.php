<?php
class NotificacionController extends AppController{
    
    function Pago()
    {
        if ($this->request->is('post'))
            {
            $noti=array('Nombre_Apellido'=>$this->request->data('Nombre_Apellido'),
                'Cedula_Rif'=>$this->request->data('Cedula_Rif'),
                'Comunidad'=>$this->request->data('Comunidad'),
                'Telefono'=>$this->request->data('Telefono'),
                'Monto'=>$this->request->data('Monto'),
                'Corresponde'=>$this->request->data('Corresponde'),
                'Tipo_pago'=>$this->request->data('Tipo_pago'),
                'Numero_pago'=>$this->request->data('Numero_pago'),
                'Mi_banco'=>$this->request->data('Mi_banco'),
                'Emp_banco'=>$this->request->data('Emp_banco'),
                'Fecha_Hora'=>$this->request->data('Fecha_Hora'),
                'Mensaje'=>$this->request->data('Mensaje'),
                'dia'=>date("d"),
                'mes'=>date("m"),
                'ano'=>date("Y"), 
            );
            
            if ($this->Notificacion->save($noti)){    
                $this->Session->setFlash('Tu Notificacion Fue Enviada Exitosamente.','bueno');
                $this->redirect(array('controller'=>'inicio','action' => 'index','home'));
            }
            }
		$this->set('title', 'Notificación de Pagos...');
    }
    
    
    
    function Lista(){
        if(!$this->Session->read('admin')){ $this->redirect(array('controller'=>'admin','action' =>'index'));}
	 if ($this->request->is('post')){
         $mes = $this->request->data('mes');
         $n=$this->Notificacion->find('all',array('conditions'=>array('mes'=>$mes,'ano'=>date('Y'))));        
         $this->set(array('mes'=>$mes, 'Notificaciones'=> $n, 'title'=>'Notificaciones del Mes'));
     }else{
    $mes = date("m");
    $n=$this->Notificacion->find('all',array('conditions'=>array('mes'=>$mes,'ano'=>date('Y'))));        
	$this->set(array('mes'=>$mes, 'Notificaciones'=> $n, 'title'=>'Notificaciones del Mes'));}
    
     }
        
function  eliminar($id=null){}


function  GenerarExcel($mes_año=null){
$aray=  explode('-', $mes_año);
$this->set('lista',$this->Notificacion->find('all',array('conditions'=>array('mes'=>$aray[0],'ano'=>$aray[1]))));

}

    
}

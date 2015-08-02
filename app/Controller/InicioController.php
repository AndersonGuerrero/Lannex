<?php
class InicioController extends AppController {

    function index() {
         $this->set('title', '**LANNEX**');
    }

    function DatosBancarios() {
        $this->set('title', 'Datos Bancarios');
    }

    function ZonasDeCobertura() {
        $this->set('title', 'Zonas de Cobertura');
    }

    function Contacto() {
        $this->set('title', 'Contacto');
    }
    
    function Ayuda() {
  	$this->set('title', 'Ayuda');
    }
    
    function Portafolio() {
        $this->set('title', 'Portafolio');
    }
    
    function Quienes_somos() {
        $this->set('title', 'Quienes Somos');
    }
    
    function Fecha_de_corte() {
  $this->set('title', 'Fecha de Corte');
    }
}
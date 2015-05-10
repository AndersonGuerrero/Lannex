<?php
?>
</div>
<div id="subheader">
	<div class="row">
		<div class="twelve columns">
			<p class="left">
				Notificaciones del mes
			</p>
			<p class="right">
<?php echo $this->Session->read('admin')['Nombre'].' '.$this->Session->read('admin')['Apellido'].' ------------->'.$this->Html->link('Salir',array('controller'=>'admin','action'=>'Salir')); ?>
			</p>
		</div>
	</div>
</div>





    <br>
    <center>
    <table>
        <thead>
            <tr>
                <th>Nombre Y Apellido</th>
                 <th>Cedula o Rif</th>
                  <th>Comunidad</th>
                  <th>Telefono</th>
                    <th>Monto</th>
                     <th>Corresponde a</th>
                      <th>Pago</th>
                      
                        <th>Fecha Y Hora</th>
                         <th>Mensaje</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
            $mes_año='';
            foreach ($Notificaciones as $notifi):
            ?>
            <tr>
                <td><?php echo $notifi['Notificacion']['Nombre_Apellido']; ?></td>
                <td><?php echo $notifi['Notificacion']['Cedula_Rif']; ?></td>
                <td><?php echo $notifi['Notificacion']['Comunidad']; ?></td>
                <td><?php echo $notifi['Notificacion']['Telefono']; ?></td>
                <td><?php echo $notifi['Notificacion']['Monto'].' Bsf'; ?></td>
                <td><?php echo $notifi['Notificacion']['Corresponde']; ?></td>
                
                
                <td>
 <?php 
 $de=' DE ';
 $con=' Con #';
 if($notifi['Notificacion']['Mi_banco']===''){$de=' ';}
 if($notifi['Notificacion']['Tipo_pago']==='Efectivo'){$con=' ';}
 
 
 echo $notifi['Notificacion']['Tipo_pago'].$de.$notifi['Notificacion']['Mi_banco'].' A '.$notifi['Notificacion']['Emp_banco'].$con.$notifi['Notificacion']['Numero_pago']; ?>
                </td>
                
               
                <td><?php echo $notifi['Notificacion']['Fecha_Hora']; ?></td>
                <td><?php
                for($i=0;$i<strlen($notifi['Notificacion']['Mensaje']);$i++){
                    echo $notifi['Notificacion']['Mensaje'][$i]; if($i>=15){break;}
                }
                $mes_año=$notifi['Notificacion']['mes'].'-'.$notifi['Notificacion']['ano'];
                ?></td>
            </tr>
            
            <?php endforeach;?>
        </tbody>
    </table>
        <a href="<?php echo $this->Html->url(array('controller'=>'notificacion','action'=>'GenerarExcel',$mes_año))?>">
        <?php 
                echo $this->Html->image('excel.jpg',array('alt'=>'Generar Excel'));
            
     ?>
            </a>
    </center>
    
    <div class="row">
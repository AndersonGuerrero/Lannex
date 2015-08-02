<?php
?>
</div>
<div id="subheader">
	<div class="row">
		<div class="twelve columns">
			<p class="left">
				Notificaciones del Mes en Curso...
			</p>
			<p class="right">
<?php echo $this->Session->read('admin')['Nombre'].' '.$this->Session->read('admin')['Apellido'].' ------------->'.$this->Html->link('Salir',array('controller'=>'admin','action'=>'Salir')); ?>

			</p>
		</div>
	</div>
</div>
    <br>
    <center>
    <form action="" method="POST">
        <div class="columns" style="max-width:125px;display:-webkit-box">
        <label>Filtro por mes:</label>
        <select name="mes" onchange="this.form.submit()">
            <option <?php  if ($mes=='01'){echo 'selected';} ?>   value="01">Enero</option>
            <option <?php  if ($mes=='02'){echo 'selected';} ?> value="02">Febrero</option>
            <option <?php  if ($mes=='03'){echo 'selected';} ?> value="03">Marzo</option>
            <option <?php  if ($mes=='04'){echo 'selected';} ?> value="04">Abril</option>
            <option <?php  if ($mes=='05'){echo 'selected';} ?> value="05">Mayo</option>
            <option <?php  if ($mes=='06'){echo 'selected';} ?> value="06">Junio</option>
            <option <?php  if ($mes=='07'){echo 'selected';} ?> value="07">Julio</option>
            <option <?php  if ($mes=='08'){echo 'selected';} ?> value="08">Agosto</option>
            <option <?php  if ($mes=='09'){echo 'selected';} ?> value="09">Septiembre</option>
            <option <?php  if ($mes=='10'){echo 'selected';} ?> value="10">Octubre</option>
            <option <?php  if ($mes=='11'){echo 'selected';} ?> value="11">Noviembre</option>
            <option <?php  if ($mes=='12'){echo 'selected';} ?> value="12">Diciembre</option>
        </select>
        </div>
        <br>
    </form>
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
                    echo $notifi['Notificacion']['Mensaje'][$i]; if($i>=35){break;}
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
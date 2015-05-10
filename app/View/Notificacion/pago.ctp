<?php
 echo $this->Html->script('validar.js');
?>
</div>
<div id="subheader">
	<div class="row">
		<div class="twelve columns">
			<p class="left">
				 Notificacion de Pagos
			</p>
			<p class="right">
				 Ingresa los Datos Cuidadosamente.!!!
			</p>
		</div>
	</div>
</div>
<div class="row">
    
    <h2>¡Lea con atención, Y DISFRUTE EL MEJOR SERVICIO!</h2>
    <P style="text-align: justify;">Recordamos a nuestros estimados usuarios que la fecha de corte 
        general es el día 03 de cada mes, sugerimos realizar sus pagos antes de las 
        12 del medio día para evitar cortes, si pagas con transferencia desde otros bancos 
        recuerda realizar tu cancelación con un día hábil de anticipación ya que tu transferencia
        será tomada como válida por el sistema al hacerse efectiva en nuestros bancos.
    </p>
    
    
    <style>
        
    </style>
    <div class="twelve columns">
		<ul class="ca-menu">
			<li>
                            <a >  
                            <span class="ca-icon"><?php echo $this->Html->image('bancaribe.png');?></span> 
			<div class="ca-content " >
                            <h2 class="ca-main">Bancaribe</h2>
                            <p class="ca-sub" style="line-height: 20px;" >
                                CUENTA CORRIENTE<br>
                                0114-0207-12-2070050474<br>
                                A NOMBRE DE: Michael Ostos<br>
                                CI: 17275025<br>
                                CORREO: lannexca@hotmail.com
                            </p>
			</div>
			</a>      
			</li>
                        
                        <li>
                            <a >  
                            <span class="ca-icon"><?php echo $this->Html->image('BNC.png',array('height'=>'80','width'=>'80'));?></span> 
			<div class="ca-content " >
                            <h2 class="ca-main">BNC</h2>
                            <p class="ca-sub" style="line-height: 20px;" >
                                0191-0199-10-2100001101 <br>
                                A NOMBRE DE: Michael Ostos <br>
                                CI: 17275025<br>
                                CORREO: lannexca@hotmail.com  
                            </p>
			</div>
			</a>      
			</li>
                        
                        
                            <li>
                            <a >  
                            <span class="ca-icon"><?php echo $this->Html->image('BFC.jpg',array('height'=>'80','width'=>'80'));?></span> 
			<div class="ca-content " >
                            <h2 class="ca-main">BFC</h2>
                            <p class="ca-sub" style="line-height: 20px;" >
                                1000269248<br>
                                A NOMBRE DE: Michael Ostos <br>
                                CI: 17275025<br>
                                CORREO: lannexca@hotmail.com
                            </p>
			</div>
			</a>      
			</li>
                        
                        
                        
                </ul>
    </div>
    
   <div class="twelve columns">
		<div class="wrapcontact">
			<h5>Tus Datos</h5>
			<div class="done">
				<div class="alert-box success">
				 Message has been sent! <a href="" class="close">x</a>
				</div>
			</div>			
				<form method="post" action="" id="contactform">
				<div class="form">
				         <div class="six columns noleftmargin">
					<label>Nombre</label>
                                        <input type="text" name="Nombre_Apellido" class="smoothborder" required placeholder="Nombre y Apellido ó Nombre de la Empresa"/>
					</div>
					<div class="six columns noleftmargin" >
					<label>Cedula ó Rif</label>
                                        <input type="text" name="Cedula_Rif" class="smoothborder" required placeholder="Cedula ó Rif"/>
					</div>
                                    
                                        <div class="six columns noleftmargin">
					<label>Comunidad</label>
                                        <input type="text" name="Comunidad" class="smoothborder" required placeholder="Comunidad"/>
					</div>
				
                                        <div class="six columns noleftmargin">
					<label>Telefono de Contacto</label>
                                        <input type="text" name="Telefono" class="smoothborder" required placeholder="Telefono"/>
					</div>
                                    
					
                                    <h5>Datos Bancarios</h5>
                                    
                                     <div class="six columns noleftmargin">
					<label>Monto Pagado</label>
                                        <select name="Monto" required>
                                            <option></option>
                                            <option value="100">100 Bsf</option>
                                            <option value="200">200 Bsf</option>
                                            <option value="300">300 Bsf</option>
                                            <option value="400">400 Bsf</option>
                                        </select>
                                     </div>
                                    
                                     <div class="six columns noleftmargin">
					<label>El Pago Corresponde a?</label>
                                        <div id="idSelectpago">
                                            <select name="Corresponde"  required onclick="corresponde(this)">
                                            <option></option>
                                            <option value="Mensualidad">Mensualidad</option>
                                            <option value="Instalacion">Instalación</option>
                                            <option value="Reparacion">Reparación</option>
                                            <option    value="Otros">Otros</option>
                                        </select>
                                        </div>
                                     </div>
                                    
                                    
                                    
                                      <div class="six columns noleftmargin">
					<label>Tipo de Pago</label>
                                        <div id="idSelectTipoPago">
                                            <select name="Tipo_pago" id="select_Tipo_Pago"  required onclick="tipo_pago(this)" >
                                            <option></option>
                                            <option value="Deposito">Deposito</option>
                                            <option value="Transferencia">Transferencia</option>
                                            <option value="Efectivo">Efectivo</option>
                                        </select>
                                        </div>
                                        <input type="hidden" class="smoothborder" value="" id="num_depo" name="Numero_pago" required placeholder="Numero de deposito o Transferencia">
                                        <input type="hidden" class="smoothborder" value="" id="Mi_banco" name="Mi_banco" required="false" placeholder="Nombre de su Banco">
                                        
                                        <div id="IdEmp_banco">
                                            
                                        </div>
                                        
                                     </div>
                                    
                                    <div class="six columns noleftmargin">
					<label>Fecha y Hora del Pago</label>
                                        <input type="datetime-local" name="Fecha_Hora" class="smoothborder" required placeholder="Fecha Y hora"/>
					</div>
                                    
                                      
                                    
                                    
					<label>Mensaje Libre</label>
                                        <textarea class="smoothborder ctextarea" placeholder="Mensaje...." name="Mensaje"></textarea>
                                        
					
                                    
                                    <input type="submit" id="submit" class="readmore" value="Enviar Notificacion">
                                    
                                </div>
                                    
                                    
				</form>			
		</div>
	</div>
    
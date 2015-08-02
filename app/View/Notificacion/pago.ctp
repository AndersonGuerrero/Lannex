<?php
 echo $this->Html->script('validar.js');
?>
</div>
<div id="subheader">
	<div class="row">
		<div class="twelve columns">
			<p class="left">
				 Notificación de Pagos...
			</p>
			<p class="right">
				 Ingresa los Datos Cuidadosamente.!!!
			</p>
		</div>
	</div>
</div>
<div class="row">
    <br>
    <h2>¡Lea con atención, Y DISFRUTE EL MEJOR SERVICIO!</h2>
    <h4><a><P style="text-align: justify;">Recordamos a nuestra distinguida clientela que la fecha de corte 
        general del servicio de internet es el día 03 de cada mes, sugerimos realizar sus pagos antes
        de la fecha de corte para evitar suspensión, si pagas con transferencia desde otros bancos 
        recuerda realizar tu cancelación con un día hábil de anticipación ya que tu transferencia
        será tomada como válida por el sistema al hacerse efectiva en nuestros bancos.
    </p></a></h4>

    
    
    <style>
        
    </style>
    <center>
    <div class="twelve columns">
        <ul class="ca-menu">
            <li>
                            <a >  
                            <span class="ca-icon"><?php echo $this->Html->image('provincial.png');?></span> 
            <div class="ca-content " >
                            <h2 class="ca-main">Provincial</h2>
                            <p class="ca-sub" style="line-height: 15px;" >
                                CUENTA CORRIENTE<br>
                                0108-0124-93-0100299431<br>
                                A NOMBRE DE: Lannex C.A.<br>
                                RIF:  J-40386924-3<br>
                                CORREO: empresa@lannex.com.ve
                            </p>
            </div>
            </a>      
            </li>
            <li>
                            <a >  
                            <span class="ca-icon"><?php echo $this->Html->image('bancaribe.png');?></span> 
            <div class="ca-content " >
                            <h2 class="ca-main">Bancaribe</h2>
                            <p class="ca-sub" style="line-height: 15px;" >
                                CUENTA CORRIENTE<br>
                                0114-0207-12-2070050474<br>
                                A NOMBRE DE: Michael Ostos<br>
                                CI: 17.275.025<br>
                                CORREO: empresa@lannex.com.ve
                            </p>
            </div>
            </a>      
            </li>
                        
                        <li>
                            <a >  
                            <span class="ca-icon"><?php echo $this->Html->image('BNC.png',array('height'=>'80','width'=>'80'));?></span> 
            <div class="ca-content " >
                            <h2 class="ca-main">BNC</h2>
                            <p class="ca-sub" style="line-height: 15px;" >
                                CUENTA CORRIENTE<br>
                                0191-0199-10-2100001101 <br>
                                A NOMBRE DE: Michael Ostos <br>
                                CI: 17.275.025<br>
                                CORREO: empresa@lannex.com.ve
                            </p>
            </div>
            </a>      
            </li>
                        
                        
                            <li>
                            <a >  
                            <span class="ca-icon"><?php echo $this->Html->image('BFC.jpg',array('height'=>'80','width'=>'80'));?></span> 
            <div class="ca-content " >
                            <h2 class="ca-main">BFC</h2>
                            <p class="ca-sub" style="line-height: 15px;" >
                                CUENTA CORRIENTE<br>
                                1000269248<br>
                                A NOMBRE DE: Michael Ostos <br>
                                CI: 17.275.025<br>
                                CORREO: empresa@lannex.com.ve
                            </p>
            </div>
            </a>      
            </li>
                        
                        
                        
                </ul>
    </div>
        </center>
    <h4><a><P style="text-align: justify;">Campos Obligatorios en (*)
    </p></a></h4>
   <div class="twelve columns">
		<div class="wrapcontact">
			<h5>Tus Datos...</h5>
			<div class="done">
				<div class="alert-box success">
				 Message has been sent! <a href="" class="close">x</a>
				</div>
			</div>			
				<form method="post" action="" id="contactform">
				<div class="form">
				         <div class="six columns noleftmargin">
					<label>Nombre <a>*</a></label>
                                        <input type="text" name="Nombre_Apellido" class="smoothborder" required placeholder="Nombre y Apellido ó Nombre de la Empresa"/>
					</div>
					<div class="six columns noleftmargin" >
					<label>Cedula ó Rif <a>*</a></label>
                                        <input type="text" name="Cedula_Rif" class="smoothborder" required placeholder="Cedula ó Rif"/>
					</div>
                                    
                                        <div class="six columns noleftmargin">
					<label>Comunidad/Lugar <a>*</a></label>
                                        <input type="text" name="Comunidad" class="smoothborder" required placeholder="Comunidad ó Lugar"/>
					</div>
				
                                        <div class="six columns noleftmargin">
					<label>Telefono de Contacto <a>*</a></label>
                                        <input type="text" name="Telefono" class="smoothborder" required placeholder="Teléfono"/>
					</div>
                                    
					
                                    <h5>Datos Bancarios...</h5>
                                    
                                     <div class="six columns noleftmargin">
					<label>Monto Pagado <a>*</a></label>
                                        <select name="Monto" required>
                                            <option></option>
                                            <option value="410,00">410,00 Bsf</option>
                                            <option value="545,00">545,00 Bsf</option>
                                            <option value="725,00">725,00 Bsf</option>
                                            <option value="1.090,00">1.090,00 Bsf</option>
                                            <option value="1.913,00">1.913,00 Bsf</option>
                                            <option value="2.630,00">2.630,00 Bsf</option>
                                            <option value="1.201,20">1.201,20 Bsf</option>
                                            <option value="1.441,44">1.441,44 Bsf</option>
                                            <option value="2.038,40">2.038,40 Bsf</option>
                                            <option value="2.475,20">2.475,20 Bsf</option>
                                            <option value="4.076,80">4.076,80 Bsf</option>
                                            <option >Otro Monto</option>
                                            
                                        </select>
                                        <input type="text" name="Monto" class="smoothborder" placeholder="En caso de Otro Monto, Ingreselo Aqui..."/>
                                     
                                     </div>
                                    
                                     <div class="six columns noleftmargin">
					<label>El Pago Corresponde a? <a>*</a></label>
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
					<label>Tipo de Pago <a>*</a></label>
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
					<label>Fecha del Pago <a>*</a></label>
                                        <input type="datetime-local" name="Fecha_Hora" class="smoothborder" required placeholder="01/01/2001"/><br><br>
					
					<label>Mensaje Libre <a>*</a></label>
					</div>
                                                            
                                        <textarea class="smoothborder ctextarea" placeholder="Descripción del pago...." name="Mensaje"></textarea>
                                        					                                  
                                    <input type="submit" id="submit" class="readmore" value="Enviar Notificacion">
                                    
                                </div>
                                    
                                    
				</form>			
		</div>
	</div>
    
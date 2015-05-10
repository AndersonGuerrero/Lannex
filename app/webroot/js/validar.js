function corresponde(select)
{
    if(select.selectedIndex===4){
             var texto='<input type="text" name="Corresponde" class="smoothborder" required placeholder="Ingrese.."/>';
        document.getElementById('idSelectpago').innerHTML=(texto);
    }
}



   function tipo_pago(select)
{
    if(select.selectedIndex===1 || select.selectedIndex===2 || select.selectedIndex===3){
       
        if(select.selectedIndex===2)
        {
            document.getElementById('Mi_banco').type="text";
             document.getElementById('Mi_banco').required="true";
        }else
        {
             document.getElementById('Mi_banco').type="hidden";
             document.getElementById('Mi_banco').required="false";
        }
           
           if(select.selectedIndex===1 || select.selectedIndex===2){
               document.getElementById('IdEmp_banco').innerHTML='<label>Banco de la Empresa</label><select name="Emp_banco" required="true"><option></option><option value="BNC">(BNC) Banco Nacional de Credito</option><option value="BACARIBE">Bancaribe</option><option value="BFC">(BFC) Banco Fondo Comun</option></select>';
           }else{
               document.getElementById('IdEmp_banco').innerHTML='';
           }
           
           
           document.getElementById('num_depo').type="text";
        
     if(select.selectedIndex===2){ document.getElementById('num_depo').placeholder="Numero de Transferencia";}
         
     if(select.selectedIndex===1){ document.getElementById('num_depo').placeholder="Numero de Deposito";}
     
     if(select.selectedIndex===3){ document.getElementById('num_depo').placeholder=" Indique la taquilla o persona a la cuál usted entrega su pago";}
     
     
    
        document.getElementById('num_depo').focus();
             
       
    }
}
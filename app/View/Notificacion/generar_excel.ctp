<?php

App::import('vendor','PHPExcel/PHPExcel');
$objPHPExcel = new PHPExcel(); //nueva instancia 
$objPHPExcel->getProperties()->setCreator("Lannex"); //autor
$objPHPExcel->getProperties()->setTitle("Listado del"); //titulo
 
 
//inicio estilos
$titulo = new PHPExcel_Style(); //nuevo estilo
$titulo->applyFromArray(
  array('alignment' => array( //alineacion
      'wrap' => false,
      'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER
    ),
    'font' => array( //fuente
      'bold' => true,
      'size' => 15
    )
));
 
$subtitulo = new PHPExcel_Style(); //nuevo estilo
 
$subtitulo->applyFromArray(
  array('fill' => array( //relleno de color
      'type' => PHPExcel_Style_Fill::FILL_SOLID,
      'color' => array('argb' => 'FFCCFFCC')
    ),
    'borders' => array( //bordes
      'top' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
      'right' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
      'bottom' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
      'left' => array('style' => PHPExcel_Style_Border::BORDER_THIN)
    )
));
 
$bordes = new PHPExcel_Style(); //nuevo estilo
 
$bordes->applyFromArray(
  array('borders' => array(
      'top' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
      'right' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
      'bottom' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
      'left' => array('style' => PHPExcel_Style_Border::BORDER_THIN)
    )
));
//fin estilos
 
$objPHPExcel->createSheet(0); //crear hoja
$objPHPExcel->setActiveSheetIndex(0); //seleccionar hora
$objPHPExcel->getActiveSheet()->setTitle("Listado "); //establecer titulo de hoja
 
//orientacion hoja
$objPHPExcel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
 
//tipo papel
$objPHPExcel->getActiveSheet()->getPageSetup()->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_LETTER);
 
//establecer impresion a pagina completa
$objPHPExcel->getActiveSheet()->getPageSetup()->setFitToPage(true);
$objPHPExcel->getActiveSheet()->getPageSetup()->setFitToWidth(1);
$objPHPExcel->getActiveSheet()->getPageSetup()->setFitToHeight(0);
//fin: establecer impresion a pagina completa
 
//establecer margenes
$margin = 0.5 / 2.54; // 0.5 centimetros
$marginBottom = 1.2 / 2.54; //1.2 centimetros
$objPHPExcel->getActiveSheet()->getPageMargins()->setTop($margin);
$objPHPExcel->getActiveSheet()->getPageMargins()->setBottom($marginBottom);
$objPHPExcel->getActiveSheet()->getPageMargins()->setLeft($margin);
$objPHPExcel->getActiveSheet()->getPageMargins()->setRight($margin);
//fin: establecer margenes
 
//incluir una imagen
/*$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setPath('img/logo.jpg'); //ruta
$objDrawing->setHeight(75); //altura
$objDrawing->setCoordinates('A1');
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet()); //incluir la imagen
//fin: incluir una imagen
 */
//establecer titulos de impresion en cada hoja
$objPHPExcel->getActiveSheet()->getPageSetup()->setRowsToRepeatAtTopByStartAndEnd(1, 6);
 
 
$fila=1;
$objPHPExcel->getActiveSheet()->SetCellValue("A$fila", "LANNEX");
$objPHPExcel->getActiveSheet()->mergeCells("A$fila:I$fila"); //unir celdas
$objPHPExcel->getActiveSheet()->setSharedStyle($titulo, "A$fila:G$fila"); //establecer estilo
 
//titulos de columnas
$fila+=1;
$objPHPExcel->getActiveSheet()->SetCellValue("A$fila", 'Nombre y Apellido');
$objPHPExcel->getActiveSheet()->SetCellValue("B$fila", 'Cedula o Rif');
$objPHPExcel->getActiveSheet()->SetCellValue("C$fila", 'Comunidad');
$objPHPExcel->getActiveSheet()->SetCellValue("D$fila", 'Telefono');
$objPHPExcel->getActiveSheet()->SetCellValue("E$fila", 'Monto');
$objPHPExcel->getActiveSheet()->SetCellValue("F$fila", 'Corresponde a');
$objPHPExcel->getActiveSheet()->SetCellValue("G$fila", 'Pago');
$objPHPExcel->getActiveSheet()->SetCellValue("H$fila", 'Fecha Y Hora');
$objPHPExcel->getActiveSheet()->SetCellValue("I$fila", 'Mensaje');
//establecer estilo
$objPHPExcel->getActiveSheet()->setSharedStyle($subtitulo, "A$fila:B$fila");
$objPHPExcel->getActiveSheet()->setSharedStyle($subtitulo, "C$fila:D$fila");
$objPHPExcel->getActiveSheet()->setSharedStyle($subtitulo, "E$fila:F$fila");
$objPHPExcel->getActiveSheet()->setSharedStyle($subtitulo, "G$fila:H$fila");
$objPHPExcel->getActiveSheet()->setSharedStyle($subtitulo, "I$fila");
//negrita
$objPHPExcel->getActiveSheet()->getStyle("A$fila:B$fila")->getFont()->setBold(true); 
$objPHPExcel->getActiveSheet()->getStyle("C$fila:D$fila")->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle("E$fila:F$fila")->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle("G$fila:H$fila")->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle("I$fila")->getFont()->setBold(true);
 
//rellenar con contenido


$mes_ano='';
        foreach ($lista as $notif){
  $fila+=1;
  
   $de=' DE ';
 $con=' Con #';
 if($notif['Notificacion']['Mi_banco']===''){$de=' ';}
 if($notif['Notificacion']['Tipo_pago']==='Efectivo'){$con=' ';}
  
  $objPHPExcel->getActiveSheet()->SetCellValue("A$fila", $notif['Notificacion']['Nombre_Apellido']);
  $objPHPExcel->getActiveSheet()->SetCellValue("B$fila", $notif['Notificacion']['Cedula_Rif']);
  $objPHPExcel->getActiveSheet()->SetCellValue("C$fila", $notif['Notificacion']['Comunidad']);
  $objPHPExcel->getActiveSheet()->SetCellValue("D$fila", $notif['Notificacion']['Telefono']);
  $objPHPExcel->getActiveSheet()->SetCellValue("E$fila", $notif['Notificacion']['Monto']);
  $objPHPExcel->getActiveSheet()->SetCellValue("F$fila", $notif['Notificacion']['Corresponde']);
  $objPHPExcel->getActiveSheet()->SetCellValue("G$fila",$notif['Notificacion']['Tipo_pago'].$de.$notif['Notificacion']['Mi_banco'].' A '.$notif['Notificacion']['Emp_banco'].$con.$notif['Notificacion']['Numero_pago']);
  $objPHPExcel->getActiveSheet()->SetCellValue("H$fila", $notif['Notificacion']['Fecha_Hora']);
  $objPHPExcel->getActiveSheet()->SetCellValue("I$fila", $notif['Notificacion']['Mensaje']);
  //Establecer estilo
  $objPHPExcel->getActiveSheet()->setSharedStyle($bordes, "A$fila:B$fila");
  $objPHPExcel->getActiveSheet()->setSharedStyle($bordes, "C$fila:D$fila");
  $objPHPExcel->getActiveSheet()->setSharedStyle($bordes, "E$fila:F$fila");
  $objPHPExcel->getActiveSheet()->setSharedStyle($bordes, "G$fila:H$fila");
  $objPHPExcel->getActiveSheet()->setSharedStyle($bordes, "I$fila");
  
  $mes_ano=$notif['Notificacion']['mes'].'-'.$notif['Notificacion']['ano'];
  
}
 

 
//recorrer las columnas
foreach (range('A', 'J') as $columnID) {
  //autodimensionar las columnas
  $objPHPExcel->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(true);  
}
 
//establecer pie de impresion en cada hoja
$objPHPExcel->getActiveSheet()->getHeaderFooter()->setOddFooter('&R&F página &P / &N');
// Guardar como excel 2007
$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel); //Escribir archivo
// Establecer formado de Excel 2007
header('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'); 
// nombre del archivo
header('Content-Disposition: attachment; filename="Lista-'.$mes_ano.'.xlsx"');
//forzar a descarga por el navegador
$objWriter->save('php://output');
exit;?>

<?php
//define('FPDF_FONTPATH','font/');
include_once('pdf/fpdf.php');
include_once('model/cn.php');
$cod=base64_decode($_GET['cod']);

				include_once ("model/ConsultasDAO.php");
				$obj= new ConsultasDAO();
				$rs=$obj->datos_certificado($cod);
        $datos=$rs->fetch(PDO::FETCH_OBJ);

               if($datos->nota >=14){

				class PDF extends FPDF
				{

				}
				$pdf=new PDF('L','mm','A4');
				$pdf->AddFont('chopinScript', '', 'chopinscript.php');
				$pdf->AddPage();
    		$pdf->Image('images/certificado final.jpg',0,1,-300,'JPG');

				$pdf->SetFont('Arial','',17);
				$pdf->Cell(0, 13, '                                                                             Registro: '.$datos->cod_certificado, 0, 1);
				$pdf->Ln();

        $pdf->SetFont('chopinScript','',68);
				$pdf->Cell(0, 14,'     Certificado  ', 0, 1);
        $pdf->Ln();

        $pdf->SetFont('Arial', '', 14);
				$pdf->Cell(20,3,     '                                                Otorgado a: ', 0, 3);
        $pdf->Ln();

				$textoape=utf8_decode($datos->apellidosp);
				$textonom=utf8_decode($datos->nombresp);

				$pdf->SetFont('chopinScript','', 30);
        $pdf->MultiCell(175, 8,'    '.$textoape.','.$textonom, 0, 'C', false);
        $pdf->Ln();

        $pdf->SetFont('Arial', '', 14);
				$pdf->Cell(175,5,              '                          por haber concluido satisfactoriamente el curso de', 0, 1);
        $pdf->Ln();

				$texto =utf8_decode($datos->nombrecur);
		    $size_nombrec =32;
				if(strlen($texto)<=22){ //cantidad de caractereses strlen es menor a
				$size_nombrec =44; //tamaño del curso es

			 }else{
          if (strlen($texto)>60) {
          $size_nombrec =25;
          }
		    }
				$pdf->SetFont('chopinScript','',$size_nombrec);
        $pdf->MultiCell(170,9, $texto, 0, 'C',false); //nombre del curso
        $pdf->Ln();

				$textoc =utf8_decode($datos->nombrec);
        $size_nombrecli =14;
				if(strlen($textoc)>=72){
					$size_nombrecli =14;
				}

        $pdf->SetFont('Arial','',$size_nombrecli);
				$pdf->MultiCell(170,3,' Dictado en la empresa: '.$textoc.', '.'en el departamento de '.$datos->departamentoc, 0, 'C',false);
        $pdf->Ln();

				$pdf->SetFont('Arial','',14);
				$pdf->Cell(0,9,        '        	Curso dictado el '.$datos->fecha_emisionc, 0, 1);
				$pdf->Ln();

        $pdf->SetFont('Arial','',14);
        $pdf->Cell(+14,-13,        '            con una duraci'.utf8_decode('ó').'n total de 0'.$datos->horasc.' horas', 0, 1);
        $pdf->Ln();

        $pdf->SetFont('Arial','',14);
        $pdf->Cell(+20,56,            '                                                                                Lima, ' .$datos->fecha_emisionc, 0, 1);
				$pdf->Ln();
				$pdf->Output();

	             }else{
		           header("Location:certificados.php");
			   }
// fin clase


?>

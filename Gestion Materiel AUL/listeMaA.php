<?php
require"fpdf.php";
session_start();
$con=mysqli_connect("localhost",'root','','gestion_parkinfo');
/*include("connexionProPhar.php");
session_start();
*
 * 
 */
class myPDF extends FPDF{
	
	function header(){
		$this->Image('téléchargement (1).jpg',-1,-1);
		$this->SetFont('Arial','B',20);
		$this->Cell(400,30,'Liste des Materiels',0,0,'C');
		$this->Ln();
		$this->SetFont('Times','',12);
		$this->Cell(400,10,date("Y-m-d"),0,0,'C');
		$this->Ln(30);
	}

	function footer(){
		$this->SetY(-15);
		$this->SetFont('Arial','',8);
		$this->Cell(400,10,'Page'.$this->PageNo().'/{nb}',0,0,'C');
	}
	function headerTable(){
		$this->SetFont('Arial','B',12);
		
		
		$this->Cell(50,10,'Serie',1,0,'C');
		$this->Cell(60,10,'type',1,0,'C');
		
		$this->Cell(30,10,'reference',1,0,'C');
		$this->Cell(20,10,'etat',1,0,'C');
		$this->Cell(60,10,'Designation',1,0,'C');
		$this->Cell(40,10,'debut affectation',1,0,'C');
        $this->Cell(40,10,'fin affectation',1,0,'C');
        
       
        $this->Cell(50,10,'Detail',1,0,'C');
        $this->Cell(50,10,'Date_installation',1,0,'C');




		$this->Ln();
	}
	function viewTable($con){
		$this->SetFont('Times','',12);

 
  $r2="select * from materiel join composante where Username='".$_SESSION['login']."' and materiel.Serie=composante.Serie ";
  $req2=mysqli_query($con,$r2);
		
        while($tab=mysqli_fetch_array($req2)){
            $this->Cell(50,10,$tab['Serie'],1,0,'C');
			$this->Cell(60,10,$tab['type'],1,0,'C');
			
			$this->Cell(30,10,$tab['reference'],1,0,'C');
			$this->Cell(20,10,$tab['etat'] ,1,0,'C');
			$this->Cell(60,10,$tab['Designation'],1,0,'C');
			$this->Cell(40,10,$tab['debut_date_affectation'],1,0,'C');
			$this->Cell(40,10,$tab['fin_date_affectation'],1,0,'C');
			
			$this->Cell(50,10,$tab['Detail'],1,0,'C');
			$this->Cell(50,10,$tab['Date_installer'],1,0,'C');
			$this->Ln();

		}
	}
}
$pdf=new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A3',0);
$pdf->headerTable();
$pdf->viewTable($con);
$pdf->Output();
?>
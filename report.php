<?php
require 'fpdf17/fpdf.php';
require_once './connection.php';
ob_start();
$id2 = $_GET['id2'];
$query = "SELECT driver_name,driver_phone,bus_number FROM bus where bus_number = $id2";
$result = mysqli_query($db_con, $query);
$row = mysqli_fetch_assoc($result);
//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

$pdf = new FPDF('P', 'mm', 'A4');

$pdf->AddPage();

//set font to arial, bold, 14pt
$pdf->SetFont('Arial', 'B', 14);

//Cell(width , height , text , border , end line , [align] )

$pdf->Cell(130, 5, 'TrackingBus.CO', 0, 0);
$pdf->Cell(59, 5, 'Driver Report', 0, 1); //end of line

//set font to arial, regular, 12pt
$pdf->SetFont('Arial', '', 12);

$pdf->Cell(130, 5, 'Raouche', 0, 0);
$pdf->Cell(59, 5, '', 0, 1); //end of line

$pdf->Cell(130, 5, 'Beirut, Lebanon', 0, 0);
$pdf->Cell(25, 5, 'Date', 0, 0);
$pdf->Cell(34, 5, date("d/m/Y"), 0, 1); //end of line

$pdf->Cell(130, 5, 'Phone +961 1 115522', 0, 0);
$pdf->Cell(25, 5, 'Report #', 0, 0);
$pdf->Cell(34, 5, '[1234567]', 0, 1); //end of line

$pdf->Cell(130, 5, 'Fax +961 1 115522 ext 103', 0, 0);

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189, 10, '', 0, 1); //end of line

$pdf->Cell(100, 5, 'Report About', 0, 1); //end of line

//add dummy cell at beginning of each line for indentation
$pdf->Cell(10, 5, '', 0, 0);
$pdf->Cell(90, 5, 'Driver Name: '.$row['driver_name'], 0, 1);

$pdf->Cell(10, 5, '', 0, 0);
$pdf->Cell(90, 5, 'Driver Phone: '.$row['driver_phone'], 0, 1);

$pdf->Cell(10, 5, '', 0, 0);
$pdf->Cell(90, 5, 'Bus Number: '.$row['bus_number'], 0, 1);

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189, 10, '', 0, 1); //end of line

$pdf->SetFont('Arial', 'B', 12);
// android locations
$pdf->Cell(30, 5, 'Start time', 1, 0);
$pdf->Cell(30, 5, 'End Time', 1, 0);
$pdf->Cell(42, 5, 'Date', 1, 0);
$pdf->Cell(85, 5, 'Complaints', 1, 1); //end of line

$query2 = "SELECT bus.bus_number,bus.driver_name,bus.driver_phone,android_dlocation.starttime,android_dlocation.endtime,android_dlocation.complaints,android_dlocation.date
FROM bus INNER JOIN android_dlocation WHERE bus.bus_number = android_dlocation.bus_number and bus.bus_number = $id2";
$result2 = mysqli_query($db_con, $query2);
$nbrows2 = mysqli_num_rows($result2);

for ($i = 0; $i < $nbrows2; $i++) {
    $row = mysqli_fetch_assoc($result2);
    $pdf->Cell(30, 5, $row['starttime'], 1, 0);
    $pdf->Cell(30, 5, $row['endtime'], 1, 0);
    $pdf->Cell(42, 5, $row['date'], 1, 0);
    $pdf->Cell(85, 5, $row['complaints'], 1, 1); //end of line
}
$pdf->SetFont('Arial', '', 12);
$pdf->Output();

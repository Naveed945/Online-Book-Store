<?php

function fetch_data(){
$output='';
$connect=mysqli_connect("localhost","root","","onlineshopping");
$query="SELECT * FROM orders ORDER BY id DESC";
$result= mysqli_query($connect, $query);
while($row= mysqli_fetch_array($result)){

$output .='
<tr>
<td>'.$row["firstname"].'</td>
<td>'.$row["country"].'</td>
<td>'.$row["street"].'</td>
<td>'.$row["city"].'</td>
<td>'.$row["county"].'</td>
<td>'.$row["zip"].'</td>
<td>'.$row["email"].'</td>
<td>'.$row["mobile"].'</td>
<td>'.$row["products"].'</td>
<td>'.$row["grand_total"].'</td>
                               
</tr>
';

}

return $output;


}



require_once('tcpdf/tcpdf.php');
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}
$pdf->SetFont('helvetica', '', 9);
$pdf->AddPage();
$content = '
<html>
<head></head>
<body><table border="1">
   ';
$content .=fetch_data();

$content .= '</table>
</body>
</html>';

$pdf->writeHTML($content, true, 0, true, 0);
$pdf->lastPage();
$pdf->Output('htmlout.pdf', 'I');
?>
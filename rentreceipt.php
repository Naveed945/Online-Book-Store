<?php

function fetch_data(){
$output='';
$connect=mysqli_connect("localhost","root","","onlineshopping");
$email=$_GET['id'];	
$query="SELECT * FROM orders WHERE email='$email'";
$result= mysqli_query($connect, $query);


	
while($row= mysqli_fetch_array($result)){

$output .='
<tr>
<td>'.$row["firstname"].$row["lastname"].'</td>
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

<tr>
<td><h1><strong><em>REF NO: '.$row["zip"].'1200</em></strong></h1></td>
</tr>
';

}

return $output;


}


if(isset($_POST["create_pdf"])){
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
<body>
<h1><strong><em>This is your Book Rent List Receipt</em></strong></h1>
<table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                          <th>Fullnames</th>
                                          <th>Country</th>
                                          <th>Street</th>
                                          <th>city</th>
                                          <th>County</th>
                                          <th>Zip</th>
                                          <th>Email</th>
                                          <th>Mobile</th>
                                          <th>Books</th>
                                          <th>Amount</th>
    
                                        </tr>
                                    </thead>
									<tbody>



   ';
$content .=fetch_data();

$content .= ' </tbody>
                                </table>
</body>
</html>';

$pdf->writeHTML($content, true, 0, true, 0);
$pdf->lastPage();
$pdf->Output('OrderReceipt.pdf', 'I');

}

?>


        <main style="height:80vh;">
			<div style="margin:80px;">
			<a href="index.php" style="background:#1ea237;color:white;padding:10px;outline:none;border:none">Back to Home</a>
			</div>

		<form method="post">
			
			<input style="background:#1e5ba2;color:white;padding:1em;margin:80px;outline:none;border:none" value="Get & Print Receipt" type="submit" name="create_pdf">
			
		
			
			</form>	
			
			
        </main>





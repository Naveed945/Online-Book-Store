<?php
<!--your payment has some errors-->
function fetch_data(){
$output='';
$connect=mysqli_connect("localhost","root","","book");
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
<h1><strong><em>This is your Shopping Book List Receipt</em></strong></h1>
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

<?php
session_start();

require_once 'server/controller.php';

$controller=new controller();

if(!isset($_SESSION['user'])){
  header('location:login.php');
}

$current_user_email = $_SESSION['user'];

$data = $controller->current_user($current_user_email);

$current_id = $data['id'];
$current_firstname = $data['firstname'];
$current_lastname = $data['lastname'];
$current_email = $data['email'];
$current_location = $data['location'];
$current_mobile = $data['mobile'];

$selectorders=$controller->select_orders();


?>

<main style="height:80vh;">
	<div style="margin:80px;">
		<a href="index.php" style="background:#1ea237;color:white;padding:10px;outline:none;border:none">Back to Home</a>
	</div>

	<h1 style="color:green">Order Sent Successfuly</h1>
	<h2 style="color:#161916">Your Orders History Table</h2>


	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>Name</th>
					<th></th>
					<th>Orders</th>
					<th>Status</th>
					<th>Total</th>

				</tr>
			</thead>
			<tbody>
				<?php foreach ($selectorders as $row) { ?>
				<tr>
					<td><?= $row['firstname']; ?></td>
					<th></th>
					<td><?= $row['products']; ?></td>
					<?php if($row['status']==0){ ?>
					<td>
						<p class="alert alert-warning">Pending</p>
					</td>
					<?php }else{ ?>
					<td>
						<p class="alert alert-success">Verified</p>
					</td>
					<?php } ?>
					<td><?= $row['grand_total']; ?></td>


				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</main>

<?php  

$con = mysqli_connect("localhost","root","","book");

if(!$con){
	echo "connection Failed" . mysqli_connect_error();
}

if(isset($_POST['input'])){
	$input=$_POST['input'];
	$query="SELECT * FROM books WHERE name LIKE '{$input}%'";
	$result=mysqli_query($con,$query);
	
	if(mysqli_num_rows($result) > 0){ 
     while($row= mysqli_fetch_assoc($result)){

?>


<div class="col-md-4 col-sm-6 col-6">
	<div class="ltn__product-item ltn__product-item-2 text-left">
		<div class="product-img">
			<a href="productdetails.php?bookid=<?= $row['id']; ?>"><img src="server/<?= $row['image']; ?>" alt="book-img"></a>


		</div>
		<div class="product-info">
			<h1 style="font-size: 1.2rem;">Category: <strong><?= $row['category']; ?></strong></h1>
			<h2 class="product-title"><a href="productdetails.php?bookid=<?= $row['id']; ?>"><?= $row['name']; ?></a></h2>
			<div class="product-price">
				<strong>$ <?= $row['amount']; ?></strong>
			</div>
		</div>
	</div>
</div>



<?php
		 }
	} else {
		echo "<h1>No Book with Name Found</h1>";
	}
}

?>

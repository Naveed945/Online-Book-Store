<?php
require_once 'dbh.php';

class controller extends database{  
	//register user to the database
    public function register($firstname, $lastname, $email, $location, $mobile, $password){
        $sql="INSERT INTO users(firstname, lastname, email, location, mobile, password) VALUES(:firstname,:lastname,:email,:location, :mobile,:password);";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute(['firstname'=>$firstname,'lastname'=>$lastname, 'email'=>$email, 'location'=>$location, 'mobile'=>$mobile, 'password'=>$password]);

        return true;
    }
	    //check if user is already registered
    public function user_exist($email){
        $sql="SELECT email FROM users WHERE email=:email;";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute(['email'=>$email]);
        $row=$stmt->fetch(PDO::FETCH_ASSOC);

        return $row;
    }

       //check if user has unregistered phone number
    public function user_existp($mobile){
        $sql="SELECT mobile FROM users WHERE mobile=:mobile;";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute(['mobile'=>$mobile]);
        $row=$stmt->fetch(PDO::FETCH_ASSOC);

        return $row;
    }




    //login user
    public function login($email){
      $sql="SELECT email, password FROM users WHERE email=:email;";
      $stmt=$this->dbconn->prepare($sql);
      $stmt->execute(['email'=>$email]);
      $row=$stmt->fetch(PDO::FETCH_ASSOC);

      return $row;
    }
    //current user
    public function current_user($email){
      $sql="SELECT * FROM users WHERE email=:email;";
      $stmt=$this->dbconn->prepare($sql);
      $stmt->execute(['email'=>$email]);
      $row=$stmt->fetch(PDO::FETCH_ASSOC);
      return $row;
    }
	  //checking the profile of the user
    public function user_profile($id){
        $sql="SELECT profile FROM users WHERE id=:id;";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute(['id'=>$id]);
        $row=$stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
	   //update user
    public function update_user($name, $email, $password, $image, $location, $telephone, $id){
        $sql="UPDATE users SET name=:name, email=:email, password=:password, image=:image,   location=:location, telephone=:telephone WHERE id=:id;";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute([ 'name'=>$name, 'email'=>$email, 'password'=>$password,'image'=>$image, 'location'=>$location, 'telephone'=>$telephone, 'id'=>$id]);
        return true;
    }
	
	 //check if admin is already registered
    public function admin_exist($email){
        $sql="SELECT email FROM admin WHERE email=:email;";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute(['email'=>$email]);
        $row=$stmt->fetch(PDO::FETCH_ASSOC);

        return $row;
    }
    //login admin
    public function admin_login($username){
      $sql="SELECT username, password FROM admin WHERE username=:username;";
      $stmt=$this->dbconn->prepare($sql);
      $stmt->execute(['username'=>$username]);
      $row=$stmt->fetch(PDO::FETCH_ASSOC);

      return $row;
    }
    //current admin
    public function current_admin($username){
      $sql="SELECT * FROM admin WHERE username=:username;";
      $stmt=$this->dbconn->prepare($sql);
      $stmt->execute(['username'=>$username]);
      $row=$stmt->fetch(PDO::FETCH_ASSOC);

      return $row;
    }

    //update admin
    public function update_admin($email, $password, $profile, $id){
        $sql="UPDATE admin SET email=:email, password=:password, profile=:profile WHERE id=:id;";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute(['email'=>$email, 'password'=>$password, 'profile'=>$profile, 'id'=>$id]);

        return true;
    }
	
    //checking the profile of the staff
    public function staff_profile($id){
        $sql="SELECT profile FROM admin WHERE id=:id;";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute(['id'=>$id]);
        $row=$stmt->fetch(PDO::FETCH_ASSOC);

        return $row;
    }	
	
	
	
	
	
//	books
	
	    //Create books
    public function create_books($name, $amount, $category, $author, $description, $sellername, $image){
        $sql="INSERT INTO books(name, amount, category, author, description, sellername, image ) VALUES(:name, :amount, :category, :author,  :description, :sellername, :image);";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute(['name'=>$name, 'amount'=>$amount, 'category'=>$category, 'author'=>$author, 'description'=>$description, 'sellername'=>$sellername, 'image'=>$image ]);

        return true;
    }	
	
	
	    //Select books
    public function select_books(){
        $sql="SELECT * FROM books ORDER BY id DESC;";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute();
        $row=$stmt->fetchAll();
        return $row;
    }
	    //Select Recent books
    public function select_recentbooks(){
        $sql="SELECT * FROM books ORDER BY id DESC LIMIT 4;";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute();
        $row=$stmt->fetchAll();
        return $row;
    }
	
		 //select books details
    public function select_bookbyid($id){
        $sql="SELECT * FROM books WHERE id=:id;";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute(['id'=>$id]);
        $row=$stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
	

	
	    //update books
    public function update_books($name, $amount, $category, $author, $description, $sellername, $image, $id){
        $sql="UPDATE books SET name=:name, amount=:amount, category=:category, author=:author, description=:description, sellername=:sellername, image=:image  WHERE id=:id;";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute(['name'=>$name, 'amount'=>$amount, 'category'=>$category, 'author'=>$author, 'description'=>$description, 'sellername'=>$sellername, 'image'=>$image, 'id'=>$id]);

        return true;
    }
	

	
	
	  //Deleting books
    public function delete_books($id){
        $sql="DELETE FROM books WHERE id=:id;";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute(['id'=>$id]);
        $row=$stmt->fetch(PDO::FETCH_ASSOC);

        return $row;
    }
	

	
	
	
//	books
	
//	CART
	//Adding to cart
    public function insert_cart($userid, $image, $name, $qty, $amount, $total, $type){
        $sql="INSERT INTO cart(user_id, image, name, quantity, amount, total, type) VALUES(:userid, :image, :name, :qty, :amount, :total, :type);";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute(['userid'=>$userid, 'image'=>$image, 'name'=>$name, 'qty'=>$qty, 'amount'=>$amount, 'total'=>$total, 'type'=>$type]);

        return true;
    }
	
	    //update books
    public function update_cart($qty, $id){
        $sql="UPDATE books SET name=:name, amount=:amount, category=:category, author=:author, description=:description, sellername=:sellername, image=:image  WHERE id=:id;";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute(['name'=>$name, 'amount'=>$amount, 'category'=>$category, 'author'=>$author, 'description'=>$description, 'sellername'=>$sellername, 'image'=>$image, 'id'=>$id]);

        return true;
    }
	
	
	
	
	
	 //select cart by userid
    public function select_cart($id){
        $sql="SELECT * FROM cart WHERE user_id=:id AND type='cart';";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute(['id'=>$id]);
        $row=$stmt->fetchAll();

        return $row;
    }
	 //Count user cart in the database
    public function count_cart($id){
        $sql="SELECT * FROM cart WHERE user_id=:id AND type='cart';";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute(['id'=>$id]);
        $row=$stmt->rowcount();

        return $row;
    }
	  //Deleting item from cart
    public function delete_cart($id){
        $sql="DELETE FROM cart WHERE id=:id AND type='cart';";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute(['id'=>$id]);
        $row=$stmt->fetch(PDO::FETCH_ASSOC);

        return $row;
    }
    //empty cart
    public function empty($id){
        $sql="DELETE FROM cart WHERE user_id=:id AND type='cart';";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute(['id'=>$id]);
        $row=$stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
        


//	CART

//	ORDERS
	   //Adding orders
    public function insert_order($userid,$country, $firstname, $lastname, $street, $city, $county, $zip, $email, $mobile, $cardno, $expiry, $cardcode, $products, $grand_total){
        $sql="INSERT INTO orders(userid,country, firstname, lastname, street, city, county, zip, email, mobile, cardno, expiry, cardcode, products, grand_total) VALUES(:userid, :country, :firstname, :lastname, :street, :city, :county, :zip, :email, :mobile, :cardno, :expiry, :cardcode, :products, :grand_total);";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute(['userid'=>$userid, 'country'=>$country, 'firstname'=>$firstname, 'lastname'=>$lastname, 'street'=>$street, 'city'=>$city, 'county'=>$county, 'zip'=>$zip, 'email'=>$email, 'mobile'=>$mobile, 'cardno'=>$cardno, 'expiry'=>$expiry, 'cardcode'=>$cardcode, 'products'=>$products, 'grand_total'=>$grand_total]);

        return true;
    }
	 //Select all orders in the database
    public function select_orders(){
        $sql="SELECT * FROM orders ORDER BY id DESC;";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute();
        $row=$stmt->fetchAll();

        return $row;
    }
	
	 //Select  orders by id in the database

    public function select_ordersbyid($id){
        $sql="SELECT * FROM orders WHERE orders.userid=:id;";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute(['id'=>$id]);
        $row=$stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
	 //Verify item from order
    public function verify_order($id){
        $sql="UPDATE orders SET status=1 WHERE id=:id;";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute(['id'=>$id]);
        $row=$stmt->fetch(PDO::FETCH_ASSOC);

        return $row;
    }
	
  
	//Deleting item from orders
    public function delete_order($id){
        $sql="DELETE FROM orders WHERE id=:id;";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute(['id'=>$id]);
        $row=$stmt->fetch(PDO::FETCH_ASSOC);

        return $row;
    }
	//Count all orders in the database
    public function count_orders(){
        $sql="SELECT * FROM orders;";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute();
        $row=$stmt->rowcount();

        return $row;
    }
//	ORDERS
//	USERS
	  //Select all users in the database
    public function select_users(){
        $sql="SELECT * FROM users ORDER BY id DESC;";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute();
        $row=$stmt->fetchAll();

        return $row;
    }
	 //Deleting user
    public function delete_user($id){
        $sql="DELETE FROM users WHERE id=:id;";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute(['id'=>$id]);
        $row=$stmt->fetch(PDO::FETCH_ASSOC);

        return $row;
    }
	
//	USERS
	
	

	  }
?>

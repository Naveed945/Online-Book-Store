<?php
require_once 'dbh.php';

class controller extends database{
    //register user to the database
    public function register($firstname, $secondname, $email, $location, $mobile, $password){
        $sql="INSERT INTO users(firstname, secondname, email, location, mobile, password) VALUES(:firstname, :secondname, :email, :location, :mobile, :password);";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute(['firstname'=>$firstname, 'secondname'=>$secondname, 'email'=>$email, 'location'=>$location, 'mobile'=>$mobile, 'password'=>$password]);

        return true;
    }
    //upload products
    public function upload_product($productname, $productimage, $sellername, $price, $location, $description){
        $sql="INSERT INTO products(productname, productimage, sellername, price, location, description) VALUES(:productname, :productimage, :sellername, :price, :location, :description);";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute(['productname'=>$productname, 'productimage'=>$productimage, 'sellername'=>$sellername, 'price'=>$price, 'location'=>$location, 'description'=>$description]);

        return true;
    }
    //update products
    public function update_product($productname, $productimage, $sellername, $price, $description, $productid){
        $sql="UPDATE products SET productname=:productname, productimage=:productimage, sellername=:sellername, price=:price, description=:description WHERE id=:productid;";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute(['productname'=>$productname, 'productimage'=>$productimage, 'sellername'=>$sellername, 'price'=>$price, 'description'=>$description,  'productid'=>$productid]);

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
    //check if admin is already registered
    public function admin_exist($email){
        $sql="SELECT email FROM admin WHERE email=:email;";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute(['email'=>$email]);
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
    //login admin
    public function admin_login($email){
      $sql="SELECT email, password FROM admin WHERE email=:email;";
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
    //current admin
    public function current_admin($email){
      $sql="SELECT * FROM admin WHERE email=:email;";
      $stmt=$this->dbconn->prepare($sql);
      $stmt->execute(['email'=>$email]);
      $row=$stmt->fetch(PDO::FETCH_ASSOC);

      return $row;
    }
    //select products
    public function select_product(){
        $sql="SELECT * FROM products ORDER BY id DESC;";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute();
        $row=$stmt->fetchAll();

        return $row;
    }
    //select product details
    public function select_productbyid($id){
        $sql="SELECT * FROM products WHERE id=:id;";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute(['id'=>$id]);
        $row=$stmt->fetch(PDO::FETCH_ASSOC);

        return $row;
    }
    //Adding comments to the database
    public function insert_comment($productid, $firstname, $secondname, $comments){
        $sql="INSERT INTO comments(productid, firstname, secondname, comment) VALUES(:productid, :firstname, :secondname, :comments);";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute(['productid'=>$productid, 'firstname'=>$firstname, 'secondname'=>$secondname, 'comments'=>$comments]);

        return true;
    }
    //Count the number of comments in the database
    public function count_comment($id){
        $sql="SELECT * FROM comments WHERE productid=:id;";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute(['id'=>$id]);
        $row=$stmt->rowcount();

        return $row;
    }
    //select comments by productid
    public function select_commentbyid($id){
        $sql="SELECT * FROM comments WHERE productid=:id;";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute(['id'=>$id]);
        $row=$stmt->fetch(PDO::FETCH_ASSOC);

        return $row;
    }
    //Adding to cart
    public function insert_cart($userid, $productimage, $productname, $qty, $price, $total, $type){
        $sql="INSERT INTO wishcart(user_id, productimage, productname, quantity, price, total, type) VALUES(:userid, :productimage, :productname, :qty, :price, :total, :type);";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute(['userid'=>$userid, 'productimage'=>$productimage, 'productname'=>$productname, 'qty'=>$qty, 'price'=>$price, 'total'=>$total, 'type'=>$type]);

        return true;
    }
    //Adding to wishlist
    public function insert_wishlist($userid, $productimage, $productname, $price, $total, $type){
        $sql="INSERT INTO wishcart(user_id, productimage, productname, price, total, type) VALUES(:userid, :productimage, :productname, :price, :total, :type);";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute(['userid'=>$userid, 'productimage'=>$productimage, 'productname'=>$productname, 'price'=>$price, 'total'=>$total, 'type'=>$type]);

        return true;
    }
    //select cart by userid
    public function select_cart($id){
        $sql="SELECT * FROM wishcart WHERE user_id=:id AND type='cart';";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute(['id'=>$id]);
        $row=$stmt->fetchAll();

        return $row;
    }
    //select wishlist by userid
    public function select_wishlist($id){
        $sql="SELECT * FROM wishcart WHERE user_id=:id AND type='wishlist';";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute(['id'=>$id]);
        $row=$stmt->fetchAll();

        return $row;
    }
    //Count user cart in the database
    public function count_cart($id){
        $sql="SELECT * FROM wishcart WHERE user_id=:id AND type='cart';";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute(['id'=>$id]);
        $row=$stmt->rowcount();

        return $row;
    }
    //Count user wishlist in the database
    public function count_wishlist($id){
        $sql="SELECT * FROM wishcart WHERE user_id=:id AND type='wishlist';";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute(['id'=>$id]);
        $row=$stmt->rowcount();

        return $row;
    }
    //Deleting item from cart
    public function delete_cart($id){
        $sql="DELETE FROM wishcart WHERE id=:id AND type='cart';";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute(['id'=>$id]);
        $row=$stmt->fetch(PDO::FETCH_ASSOC);

        return $row;
    }
    //Deleting item from wishlist
    public function delete_wishlist($id){
        $sql="DELETE FROM wishcart WHERE id=:id AND type='wishlist';";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute(['id'=>$id]);
        $row=$stmt->fetch(PDO::FETCH_ASSOC);

        return $row;
    }
    //Adding orders
    public function insert_order($country, $firstname, $lastname, $street, $city, $county, $zip, $email, $mobile, $products, $grand_total){
        $sql="INSERT INTO orders(country, firstname, lastname, street, city, county, zip, email, mobile, products, grand_total) VALUES(:country, :firstname, :lastname, :street, :city, :county, :zip, :email, :mobile, :products, :grand_total);";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute(['country'=>$country, 'firstname'=>$firstname, 'lastname'=>$lastname, 'street'=>$street, 'city'=>$city, 'county'=>$county, 'zip'=>$zip, 'email'=>$email, 'mobile'=>$mobile, 'products'=>$products, 'grand_total'=>$grand_total]);

        return true;
    }
    //Count all orders in the database
    public function count_orders(){
        $sql="SELECT * FROM orders;";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute();
        $row=$stmt->rowcount();

        return $row;
    }
    //Count all products in the database
    public function count_products(){
        $sql="SELECT * FROM products;";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute();
        $row=$stmt->rowcount();

        return $row;
    }
    //Count all users in the database
    public function count_users(){
        $sql="SELECT * FROM users;";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute();
        $row=$stmt->rowcount();

        return $row;
    }
    //Select all orders in the database
    public function select_orders(){
        $sql="SELECT * FROM orders ORDER BY id DESC;";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute();
        $row=$stmt->fetchAll();

        return $row;
    }
    //Select all products in the database
    public function select_products(){
        $sql="SELECT * FROM products ORDER BY id DESC;";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute();
        $row=$stmt->fetchAll();

        return $row;
    }
    //Select all users in the database
    public function select_users(){
        $sql="SELECT * FROM users ORDER BY id DESC;";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute();
        $row=$stmt->fetchAll();

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
    //Deleting item from products
    public function delete_product($id){
        $sql="DELETE FROM products WHERE id=:id;";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute(['id'=>$id]);
        $row=$stmt->fetch(PDO::FETCH_ASSOC);

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
    //update admin
    public function update_admin($firstname, $secondname, $email, $location, $mobile, $password, $id){
        $sql="UPDATE admin SET firstname=:firstname, secondname=:secondname, email=:email, location=:location, mobile=:mobile, password=:password WHERE id=:id;";
        $stmt=$this->dbconn->prepare($sql);
        $stmt->execute(['firstname'=>$firstname, 'secondname'=>$secondname, 'email'=>$email, 'location'=>$location, 'mobile'=>$mobile, 'password'=>$password, 'id'=>$id]);

        return true;
    }
  }
?>

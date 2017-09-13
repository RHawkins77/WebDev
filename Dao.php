<?php

require_once('password_compat/lib/password.php');

class Dao
{
	private $host = "us-cdbr-iron-east-04.cleardb.net";
	private $db = "heroku_941aeb476fe88e0";
	private $user = "baffcfe242cc7e";
	private $pass = "92200d6d59a8ace";
	
	public function getConnection ()
	{
		return new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user, $this->pass);
	}

	
	public function getUsers ()
	{
		$conn = $this->getConnection();
		return $conn->query("SELECT * FROM customer");
	}
	
	
	//checking if email exists then checking if password is the same
	public function doesUserAndPasswordMatch($email, $password)
	{
		$conn = $this->getConnection();
		$query = 'SELECT * FROM customer WHERE email = :email';
		$stmt = $conn->prepare($query);
		$stmt->bindParam(":email", $email);
		$stmt->execute();
		
		$row = $stmt->fetch();
		//does our user exist?
		if(!$row){
			echo"we have no row";
			return false;
		}
		$digest = $row['customer_password'];
		
		
		//did they provide the correct password?
		if(password_verify($password, $digest)){
			return true;
		}
		else{
			return false;
		}
	}
	

	public function addUser($email, $password, $firstName, $lastName)
	{	
		//hash our password here
		$digest = password_hash($password, PASSWORD_DEFAULT);
		//must chech if hash was successful
		if(!$digest){
			throw new Exception("PASSWORD COULD NOT BE HASHED!");
		}
		$conn = $this->getConnection();
		
	
		$query = "INSERT INTO customer(first_name, last_name, email, customer_password)
				  VALUES (:firstName, :lastName, :email, :password)";
				  
		$stmt = $conn->prepare($query);
		$stmt->bindParam(":firstName", $firstName);
		$stmt->bindParam(":lastName", $lastName);
		$stmt->bindParam(":email", $email);
		$stmt->bindParam(":password", $digest);
		$stmt->execute();
		$row = $stmt->fetchAll();
		
		//did we create our user?
		if(!$row){
			return false;
		}else{
			return true;
		}
	}
	
	public function emailUsed($email)
	{
		$conn = $this->getConnection();
		$query = "SELECT * FROM customer WHERE email = :email";
		$stmt = $conn->prepare($query);
		$stmt->bindParam(':email', $email);
		$stmt->execute();
		$row = $stmt->fetch();
	
		if(!$row)
		{
			return false;
		}
		if($row['email'] == $email){
			return true;
		}else{
			return false;
		}
		
	}
	
	/**
	public function addUserAddress($house_number, $street, $town, $)
	{
		$conn = $this->getConnection();
		$query = "INSERT INTO customer(email, customer_password)
				  VALUES (:email, :password)";
				  
		$stmt = $conn->prepare($query);
		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':password', $password);
		
		try{
		$stmt->execute();
		return true;
		}catch(PDOException $e){
			return false;
		}
	}
	**/
	
}
?>
 
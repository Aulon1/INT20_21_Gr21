<?php

	class Customers
	{
		private $servername = "localhost";
		private $username   = "root";
		private $password   = "";
		private $dbname     = "news";
		public  $con;


		// Database Connection 
		public function __construct()
		{
		    try {
			$this->con = new mysqli($this->servername, $this->username, $this->password, $this->dbname);	
		    } catch (Exception $e) {
			echo $e->getMessage();
		    }
		}

		// Insert customer data into customer table
		public function insertData($titulli, $permbajtja, $file)
		{	
			$allow = array('jpg', 'jpeg', 'png');
		   	$exntension = explode('.', $file['name']);
		   	$fileActExt = strtolower(end($exntension));
		   	$fileNew = rand() . "." . $fileActExt;  // rand function create the rand number 
		   	$filePath = 'image/'.$fileNew; 
			
			if (in_array($fileActExt, $allow)) {
    		          if ($file['size'] > 0 && $file['error'] == 0) {
		            if (move_uploaded_file($file['tmp_name'], $filePath)) {
		   		$query = "INSERT INTO lajmet(titulli, permbajtja, image) VALUES ('$titulli','$permbajtja','$fileNew')";
				$sql = $this->con->query($query);
				if ($sql==true) {
				   return true;
				}else{
				  return false;
			    }   		    
		        }
		      }
		   }
		   echo "User added successfully. <a href='indexx.php'>View Users</a>";
		}

		// Fetch customer records for show listing

		public function displayData()
		{
		    $sql = "SELECT * FROM lajmet";
		    $query = $this->con->query($sql);
		    $data = array();
		    if ($query->num_rows > 0) {
			while ($row = $query->fetch_assoc()) {
			    $data[] = $row;
			}
			return $data;
		    }else{
			return false;
		    }
		}
		public function displyaRecordById($id)
		{
		    $query = "SELECT * FROM lajmet WHERE id = '$id'";
		    $result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		    }else{
			echo "Record not found";
		    }
		}

		// Update customer data into customer table
		public function updateRecord($postData)
		{
		    $titulli = $this->con->real_escape_string($_POST['titulli']);
		    $permbajtja = $this->con->real_escape_string($_POST['permbajtja']);
		    $id = $this->con->real_escape_string($_POST['id']);
		if (!empty($id) && !empty($postData)) {
			$query = "UPDATE lajmet SET titulli = '$titulli', permbajtja = '$permbajtja' WHERE id = '$id'";
			$sql = $this->con->query($query);
			if ($sql==true) {
			    header("Location:indexx.php?msg2=update");
			}else{
			    echo "Registration updated failed try again!";
			}
		    }
			
		}


		// Delete customer data from customer table
		public function deleteRecord($id)
		{
		    $query = "DELETE FROM lajmet WHERE id = '$id'";
		    $sql = $this->con->query($query);
		if ($sql==true) {
			header("Location:indexx.php?msg3=delete");
		}else{
			echo "Record does not delete try again";
		    }
		}

	}

?>

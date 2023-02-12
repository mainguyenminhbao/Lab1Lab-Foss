<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['save'])){
		try{
			$HoTen = $_POST['HoTen'];
			$Email = $_POST['Email'];
			$NoiDung = $_POST['NoiDung'];
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO `user` (`HoTen`, `Email`, `NoiDung`) VALUES ('$HoTen', '$Email', '$NoiDung')";
			$conn->exec($sql);
		}catch(PDOException $e){
			echo $e->getMessage();
		}
		
		$conn = null;
		header('location:index.php');
	}
?>
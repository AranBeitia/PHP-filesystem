<?php
	function updateImage () {
		if(isset($_FILES["file"])) {
			$extension = explode('.', $_FILES["file"]['name']);
			$new_name = rand() . '.' . $extension[1];
			$location = '../resources/img/' . $new_name;
			move_uploaded_file($_FILES["file"]['tmp_name'], $location);
			return $new_name;
		}
	}

	function getName ($id_file) {
		include('./dbConection.php');
		$stmt = $connection -> prepare("SELECT file FROM files WHERE id = '$id_file'");
		$stmt-> execute();
		$result = $stmt -> fetchAll();
		foreach($result as $row) {
			return $row["file"];
		}
	}

	function getAllFiles () {
		include ('./dbConection.php');
		$stmt = $connection -> prepare("SELECT * FROM files");
		$stmt -> execute();
		$result = $stmt -> fetchAll();
		return $stmt-> rowCount();
	}
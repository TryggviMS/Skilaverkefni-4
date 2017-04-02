<?php 
if (isset($_POST['submitform'])) {
	$notandi = $_POST['nafn'];
	$kennitala = $_POST['kt'];
	$netfang = $_POST['netfang'];
	$simi = $_POST['simi'];
	$vidburdur = $_POST['vidburdur'];
	require_once('serverside1.php');
	echo "test for echo";
	//switch þar sem hvert case er fyrir skráningu frá mismunandi síðu
	switch ($vidburdur) {
		case 'skalmold':
			$sql = "INSERT INTO notandi (nafn, kennitala, netfang, simi) VALUES ('$notandi', '$kennitala', '$netfang', '$simi')";
			$sql2 = "INSERT INTO millitafla (notandi_id,vidburdur_id) VALUES ('$kennitala', '1')";
			if ($conn->query($sql) === TRUE && $conn->query($sql2) === TRUE) {
				echo "Skráning tókst á tónleika með Skálmöld " . $notandi;
				echo "<a href='../adalsida.php'>Baka á forsíðu</a>";
			}	
			else {
				echo "Villa í skráningu";
			}	
			break;
		case 'solstafi':
			$sql = "INSERT INTO notandi (nafn, kennitala, netfang, simi) VALUES ('$notandi', '$kennitala', '$netfang', '$simi')";
			$sql2 = "INSERT INTO millitafla (notandi_id,vidburdur_id) VALUES ('$kennitala', '2')";
			if ($conn->query($sql) === TRUE && $conn->query($sql2) === TRUE) {
				echo "Skráning tókst á tónleika með Sólstöfum " . $notandi;
				echo "<a href='../adalsida.php'>Baka á forsíðu</a>";
			}	
			else {
				echo "Villa í skráningu";
			}	
			break;
		case 'solstafi':
			$sql = "INSERT INTO notandi (nafn, kennitala, netfang, simi) VALUES ('$notandi', '$kennitala', '$netfang', '$simi')";
			$sql2 = "INSERT INTO millitafla (notandi_id,vidburdur_id) VALUES ('$kennitala', '3')";
			if ($conn->query($sql) === TRUE && $conn->query($sql2) === TRUE) {
				echo "Skráning tókst á tónleika með Rammstein " . $notandi;
				echo "<a href='../adalsida.php'>Baka á forsíðu</a>";
			}
			else {
				echo "Villa í skráningu";
			}		
			break;
		default:
			# code...
			break;
	}
	$conn->close();
}



 ?>
<?php
//koneksi database
$koneksi = new mysqli("localhost", "julius", "admin", "ta");
?>
<!DOCTYPE html>
<html>

<head>
	<title>Monitoring Daya</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<!-- menghubungkan dengan file jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.6.5/firebase-app.js"> </script>
	<script src="https://www.gstatic.com/firebasejs/8.6.5/firebase-database.js"></script>
	<script src="getdata.js"></script>

</head>

<body>

	<div class="content">
		<header>
			<h1 class="judul"> MONITORING </h1>
			<h3 class="deskripsi"> Daya Pada Photovoltaic dan Baterai pada Laboratorium Perikanan UMM</h3>
		</header>

		<div class="menu" >
			<ul>
				<li><a href="index.php?page=plts1">Hasil </a></li>
				<li><a href="index.php?page=grafik">Grafik PV</a></li>
				<li><a href="index.php?page=grafik1">Grafik Battery</a></li>
				<li><a href="grafikstatis.php">Try Grafik</a></li>

			</ul>
		</div>

		<div class="badan">


			<?php
			if (isset($_GET['page'])) {
				$page = $_GET['page'];

				switch ($page) {
					case 'plts1':
						include "halaman/tabel1.php";
						break;
					case 'hapusnilai':
						include "halaman/hapusnilai.php";
						break;
					case 'grafik':
						include "halaman/grafik.php";
						break;
					case 'grafik1':
						include "halaman/grafik1.php";
						break;
					default:
						echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
						break;
				}
			} else {
				include "halaman/home.php";
			}




			?>

		</div>
	</div>
	<div class="content">
			<div>Bus Voltage</div><span id="voltage"></span>
			<div>Current</div><span id="current"></span>
			<div>Power</div><span id="power"></span>
		</div>

	<!-- The core Firebase JS SDK is always required and must be listed first -->
	<script src="https://www.gstatic.com/firebasejs/8.6.5/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.6.5/firebase-database.js"></script>
	<script>
		// Your web app's Firebase configuration
		// For Firebase JS SDK v7.20.0 and later, measurementId is optional
		var firebaseConfig = {
			apiKey: "AIzaSyBylhD3Ke8qlZqvbEsRTwUs5jqyNGgBaQk",
			authDomain: "tugasakhir-11.firebaseapp.com",
			databaseURL: "https://tugasakhir-11-default-rtdb.firebaseio.com",
			projectId: "tugasakhir-11",
			storageBucket: "tugasakhir-11.appspot.com",
			messagingSenderId: "391978971508",
			appId: "1:391978971508:web:ced63eed313885a38dfc21",
			measurementId: "G-CF70LWS2ER"
		}

		// Initialize Firebase
		firebase.initializeApp(firebaseConfig);

		const db = firebase.database()
		const blogRef = db.ref('ina219').on('value', handleSuccess, handleError)

		function handleSuccess(items) {
			console.log(items.val())
			document.getElementById('voltage').innerText = items.val()['1-set'].bus_voltagevoltage;
			document.getElementById('current').innerText = items.val()['1-set'].current;
			document.getElementById('power').innerText = items.val()['1-set'].power;
		

		}

		function handleError(error) {
			console.log(error)
		}
	</script>



</body>

</html

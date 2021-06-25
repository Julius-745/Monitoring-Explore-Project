<html>
<head>
    <!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="Chart.js/dist/Chart.min.css">
	<!-- menghubungkan dengan file jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.6.5/firebase-app.js"> </script>
	<script src="https://www.gstatic.com/firebasejs/8.6.5/firebase-database.js"></script>
    <!-- menghungkan chart.js-->
    <script type="text/javascript" src="Chart.js/dist/Chart.min.js"></script>
	<!-- firebase -->
	<script src="https://www.gstatic.com/firebasejs/8.6.5/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.6.5/firebase-database.js"></script>
</head>
<body>
<div>
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

        <div style="width: 600px;" >
            <canvas id="myChart"></canvas>
        </div>
<script>
//deklarasi chartjs untuk membuat grafik 2d di id mychart 
var ctx = document.getElementById('myChart').getContext('2d');
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
			const v = parseFloat(document.getElementById('voltage').innerText = items.val()['1-set'].bus_voltagevoltage);
			alert(v);
			const c = parseFloat(document.getElementById('current').innerText = items.val()['1-set'].current);
			alert(c);
			const p = parseFloat(document.getElementById('power').innerText = items.val()['1-set'].power);
			alert(p)
		

		}

		function handleError(error) {
			console.log(error)
		}

		funtion addData(myChart, labels, data){
			myChart.data.datasets[0].push([0,0,0])
			myChart.data.datasets.array.forEach(element => {
				
			});
		}

var myChart = new Chart(ctx, {

	
	
 //chart akan ditampilkan sebagai bar chart
    type: 'bar',
    data: {
     //membuat label chart
        labels: ['Voltage', 'Current', 'Power'],
        datasets: [{
            label: '# of Votes',
            //isi chart
            data: [8, 16, 9],
            //membuat warna pada bar chart
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
	</script>
</div>
<div class="content">
			<div>Bus Voltage</div><span id="voltage"></span>
			<div>Current</div><span id="current"></span>
			<div>Power</div><span id="power"></span>
		</div>
</body>
</html>
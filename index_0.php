<?php include('component/head.php'); ?>

<body style="background-color: #B0E0E6;">
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

    <?php include('component/navbar.php'); ?>

    <section class="banner">

        <div class="partner-section">
            <div id="carouselExampleIndicators" >
                <div class="carousel-inner">
                </div>
            </div>
        </div>

        <div class="service-section">
            <div class="container">
                <h2 class="text-center">Title</h2>
                <br>
                <div class="row">
                    <div class="col-4">
                        <a href="user/index.php">
                            <div class="card text-center">
                                <div class="card-body">
                                    <img src="visual/high-voltage.png" width="100" alt="">
                                    <h5 class="card-title">Voltage</h5>
                                    <div class="content">
                                        <span id="voltage"></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="http://Wa.me/628525766866">
                            <div class="card text-center">
                                <div class="card-body">
                                    <img src="visual/layer.png" width="100" alt="">
                                    <h5 class="card-title">Current</h5>
                                    <div class="content">
                                        <span id="current"></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="user/perawatan.php">
                            <div class="card text-center">
                                <div class="card-body">
                                    <img src="visual/power.png" width="100" alt="">
                                    <h5 class="card-title">Power</h5>
                                    <div class="content">
                                        <span id="power"></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <?php include('component/footer.php'); ?>

</body>

<?php include('component/script.php') ?>

</html>
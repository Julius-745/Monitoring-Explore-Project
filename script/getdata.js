function getdata(){
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

}
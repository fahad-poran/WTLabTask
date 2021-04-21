<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
<h1>Using Ajax to fetch data from Database!</h1>
<h2>Lets get started Alhamdulillah</h2>
<form method="">
<label>Doctor Specialization  :</label>
<select id='DocCat'><option value="">Select Doctor Category</option></select>
<br> <br>

<label>Doctor Name : </label>
<select id="DocName"><option>
	
</option></select>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		function loadData(){
			//ajax call
			$.ajax({
				url: "load-cs.php",
				type : "POST",
				success : function(data){
					$("#DocCat").append(data);
				} 
			});
		}
		loadData();
	});
</script>

</form>
</body>
</html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
			min-height: 2000px;
            background: url('poto.jpg');
            
		}
        .container{
             color:black;
             font-family: arial;
	         width:400px;
             border:2px solid #777;
	         height:340px;
	         padding:20px;
	         background-color: #FFA07A;
			 line-height: 25px;
	         position: fixed;
	         top: 30%;
	         left: 50%;
	         margin-top: -120px;
	         margin-left: -220px;
             border-radius: 5px;
}
    </style>
<body>
<div class="container">
		<div class="wrapper">
			<div class="title">
				<h1>Form Belanja</h1>
			</div>
			<div class="content">
				<form method="POST" action="form_belanja.php">
                        <div class = "form group">
						    <label for="customer">Nama Customer</label>
						    <input type="text" name="customer" id="customer" required="">
                        </div>
						<label for="">Pilih Produk</label><br>
						<div class = "form-check-inline px-5" >
							<input type="radio" name="produk" value="Mesin Cuci" required="">Mesin cuci</li>
							<input type="radio" name="produk" value="Kulkas" required="">Kulkas</li>
							<input type="radio" name="produk" value="TV" required="">TV</li>
                        </div>
						<label for="jumlah">Jumlah</label>
						<input type="number" id="jumlah" name="jumlah" required="">
						<input type="submit" name="proses">
				</form>
			</div>
			<div class="result">
			<?php 
			if (isset($_POST['proses']) || isset($_POST['customer']) || isset($_POST['produk']) || isset($_POST['jumlah'])) :
			echo "Nama : " .$_POST['customer'];
			echo "<br/> Produk : " .$_POST['produk'];
			echo "<br/> Jumlah : " .$_POST['jumlah'];
				if ($_POST['produk'] == 'Mesin Cuci') {
					echo "<br/> Total : " .$_POST['jumlah'] * 3800000;
				} elseif ($_POST['produk'] == 'Kulkas') {
					echo "<br/> Total : " .$_POST['jumlah'] * 3100000;
				} else {
					echo "<br/> Total : " .$_POST['jumlah'] * 4200000;
				}
			endif
			?>	
		</div>
		</div>
	</div>
    
</body>
</html>
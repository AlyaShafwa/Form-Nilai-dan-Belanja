<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<style>
		body {
			min-height: 2000px;
            background: url('foto.jpg');
            
		}
        .container{
             color:black;
             font-family: arial;
	         width:400px;
             border:2px solid #777;
	         height:600px;
	         padding:20px;
	         background-color: #87CEFA;
			 line-height: 25px;
	         position: fixed;
	         top: 30%;
	         left: 50%;
	         margin-top: -120px;
	         margin-left: -220px;
             border-radius: 5px;
}
	</style>
</head>
<body>
<div class="container">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<div class="container">
	<h3> Form Nilai Siswa </h3>
	<hr>
	<form method="GET" action="form_nilai.php">
		<div class="row">
            <div class="col-md-8">
            	<div class="form-group">
                    <label style="font-weight: bolder;" for="nama">Nama :</label>
                    <input type="text" name="nama" placeholder="Nama" value="" size="30"/><br/>
                </div>
            <div>
			<label style="font-weight: bolder; padding-right: 20px;" for="nama">Mata Kuliah :</label>
				<select name="matkul">
					<option value="DDP">Dasar-Dasar Pemrograman</option>
					<option value="BDI">Basis Data I</option>
					<option value="WEB1">Pemrograman Web</option>
				</select><br/>
			</div>
			<div class="form-group mt-2">
				<label style="font-weight: bolder; padding-right: 20px;" for="nama">Nilai UTS :</label>
				<input type="text" name="nilai_uts" value=""size="6"/><br/>
			</div>
			<div class="form-group mt-2">
				<label style="font-weight: bolder; padding-right: 20px;" for="nama">Nilai UAS :</label>
				<input type="text" name="nilai_uas" value=""size="6"/><br/>
			</div>
			<div class="form-group mt-2">
				<label style="font-weight: bolder; padding-right: 20px;" for="nama">Nilai Tugas Praktikum :</label>
				<input type="text" name="nilai_tugas" value=""size="6"/><br/>
			</div>
			<div class="form-group mt-4">
				<input type="submit" value="Simpan" name="proses"/>
			</div>
			</div>
		</div>
	</form>

<?php
$proses= $_GET['proses'];
$nama_siswa = $_GET['nama'];
$mata_kuliah = $_GET['matkul'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas = $_GET['nilai_tugas'];
echo 'Proses : '.$proses;
echo '<br/>Nama : '.$nama_siswa;
echo '<br/>Mata Kuliah : '.$mata_kuliah;
echo '<br/>Nilai UTS : '.$nilai_uts;
echo '<br/>Nilai UAS : '.$nilai_uas;
echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
?>

</body>
</html>
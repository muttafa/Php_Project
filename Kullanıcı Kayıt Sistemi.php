<?php 

	$baglanti = mysqli_connect("localhost","root","","yorumlar");

	if (!$baglanti) {
		die("Baglanti Hatasi".mysqli_connect_error());
	}else{
		echo " VeriTabanı Baglantisi Kuruldu"<br>;
		echo "------------------------------------";
	}


?>

<form method="POST" action="">
	<p>Adınız </p><br>
	<input type="text" name="İsim">
	<p>Soyadınz </p><br>
	<input type="text" name="Soyisim">
	<p>mail </p><br>
	<input type="mail" name="mail">
	<p>yorumunuz </p><br>
	<input type="text" name="yorum">

	<input type="submit" name="Ekle">
</form>

<?php

	if (isset($_POST["Ekle"])) 
	{

		$isim = $_POST['İsim'];
		$soyisim = $_POST['Soyisim'];
		$mail = $_POST['mail'];
		$yorum = $_POST['yorum'];



		$sql = "insert into tablo_1(isim,soyisim,mail,yorum)values('$isim','$soyisim','$mail','$yorum')";
		$sonuc = mysqli_query($baglanti,$sql);
		if (!$sonuc) {
			echo "Veriler Kaydedildi";
		}
	}
	else
	{
		echo "Hata";
	}

?>

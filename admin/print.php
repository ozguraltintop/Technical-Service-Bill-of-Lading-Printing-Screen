<?php 


$adi=$_POST['adi'];
$tel=$_POST['tel'];
$adr=$_POST['adres'];
$ariza=$_POST['ariza'];
$gorunum=$_POST['gorunum'];
$musteri=$_POST['musteri'];
$mobil=$_POST['mobil'];
$pc=$_POST['bilgisayar'];
$tablet=$_POST['tablet'];
$serino=$_POST['serino'];
$marka=$_POST['marka'];
$aksesuar=$_POST['aksesuar'];

$garanti=$_POST['garanti'];
$date=$_POST['date'];
 

if(isset($mobil))
{
	$mb="Mobil";
}
else{$kamar=1;}


if(isset($pc))
{
	$pc1="Pc";
}

else{$kamar=1  ;}

if(isset($tablet))
{
	$tb1="Tablet";
}
else{$kamar=1 ;}



	
?>

<html>
<head>

	<style>
		
    .header{
    	display: none;
    }
	

	@media print {
   /*.example-screen {
       display: none;
    }*/
    .header {
       display: block;
    }
    #printer{
    	display: none;
    }
}
	</style>
   
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>


<body style="background-color: #f9f9f9;">
	
<div id="printer">

	<div class="row">
		<div class="container">     <div class="row">         <div class="col-md-12 mx-auto">   <img src="images/mirsat.gif">                   </div>     </div> </div>


 
</div>
 <form style="padding-left: 48%;padding-right: 48%;">

	<img src="images/printer.png" onclick="window.print(this.src)" style="width:100px">

</form>
</div>


<header style="padding-top: 10%" class="header">

<div class="rowg" style="padding-left: 20%">
<b>TELEFONCU MİRSAT</b>
<p>Tel : 0552 219 40 69</p>
<p>https:telefoncumirsatt.com</p>

</div>
<div class="rowg" style="padding-left: 20%">
<b>TEKNİK SERVİS FORMU  -> Geliş Tarihi</b>


</div>
<hr>

<div class="row">
  <div class="col"></div>
  <div class="col">Geldiği yer :<b>Musteri</b></div> 
  <div class="col">Müşteri Adı:<b><?php echo $adi;?></b></div>
  <div class="col"></div>
</div>


<div class="row">
  <div class="col"></div>
  <div class="col">Telefonları: <b><?php echo $tel;?></b></div> 
  <div class="col">Adres Bilgisi: <b><?php echo $adr;?></b></div>
  <div class="col"></div>
</div>
<hr>
<div class="row">
  <div class="col"></div>
  <div class="col">Cihaz Türü:<b><?php echo $mb;?>/<b><?php echo $pc1;?></b>/<b><?php echo $tb1;?></b></b></div> 
  <div class="col">Fatura Tarihi: <b><?php echo $date;?></b></div>
  <div class="col"></div>
</div>
<div class="row">
  <div class="col"></div>
  <div class="col">Cihaz Seri No : <b><?php echo $serino;?></b></div> 
  <div class="col">Garanti Durumu: <b><?php echo $garanti;?></b></div>
  <div class="col"></div>
</div>
<div class="row">
  <div class="col"></div>
  <div class="col">Marka - Model :<b><?php echo $marka;?></b></div> 
  <div class="col">Takip No:</div>
  <div class="col"></div>
</div>
<hr>
<div class="row">
  <div class="col"></div>
  <div class="col">Aksesuar : <b><?php echo $aksesuar;?></b></div> 
  <div class="col"></div>
  <div class="col"></div>
</div>
<div class="row">
  <div class="col"></div>
  <div class="col">Dış Görünüm : <?php echo $gorunum;?></div> 
  <div class="col"></div>
  <div class="col"></div>
</div>
<div class="row">
  <div class="col"></div>
  <div class="col">Arıza Blgisi : <b><?php echo $ariza;?></b></div> 
  <div class="col"></div>
  <div class="col"></div>
</div>
<hr>
<div class="row">
  <div class="col"></div>
  <div class="col">Yapılan İşlem :</div> 
  <div class="col"></div>
  <div class="col"></div>
</div>
<hr>
<br><br><br><br><br>

<div class="rowc" style="padding-left: 10%;padding-right: 10%;">
<b>SERVİS  SÖZLEŞMESİ</b>
<br>
1 - Servisimize teslim tarihinden itibaren 3 ay içerisinde teslim alınmayan cihazlar için firmamız her hangibir sorumluluk kabul etmez.<br>
2 - Garanti harici durumlarda ve onarımın kabul edilmediği durumlarda harcanan işçilik bedeli olarak standart servis ücreti alınır.<br>
3 - 30 iş günü içerisinde geri alınmayan cihazlardan kur farkından doğan fiyat farkı talep edilir.<br>
4 - Garanti harici cihazlar servis ücretinin ödenmesini takiben teslim edilecektir.<br>
5 - Cihaz bu belge karşılığında geri verilecektir, üçüncü şahısların eline geçmesi sonucu oluşabilecek durumlardan firmamız sorumlu değildir.<br>
6 - Müşterilerin servisimize getirdiği cihazlardaki kişisel ayar ve bilgileri yedeklemeleri gerekmektedir.<br>
Cihazların onarım ve parça değişimi sırasında kişisel ayarların ve bilgilerin tekrar yüklenemeyecek şekilde silinmesi mümkündür.<br>
Bu gibi durumlarda oluşabilecek kayıplardan firmamız sorumlu değildir.<br>
7 - Kullanıcı hatalarından kaynaklanan arızalar garanti kapsamı dışındadır.<br>
8 - Servisimizin garanti kapsamında olarak kabul ettiği cihazlarda yapılan inceleler sonucunda cihaza yetkisiz kişilerin müdahalesi tespit<br>
edilirse cihazınız garanti dışı olarak değerlendirilecektir.<br>
9 - Sıvı teması, cihazlarda önceden tespit edilemeyecek zincir arızalar meydana getirebilir. Bu sebeple servisimizde sıvı temasına maruz kalmış<br>
cihazlarda onarım garantisi verilmez.<br>
10 - Fiyatlarımız dövize endeksli olup tahsilatta Merkez Bankası döviz efektif alış kurları geçerlidir.<br>
11 - Bu sözleşmenin kapsamadığı durum ve şartlar için ilgili yasa hükümleri uygulanır.<br>
12 - Garanti dışı cihaz tamirlerinde ücretlendirme bilgisi tarafınıza bildirilecektir. Ücret onayı ile ilgili 3 gün içinde dönüş yapılmayan cihazlar
tamir edilmeksizin tarafınıza iade edilecektir.<br>
13-Cihaz kontrol edilerek teslim edildikten sonra yaşanılacak fiziksel sorunlardan firmamız sorumlu değildir<br>





</div>

<div class="row">
  <div class="col"></div>
  <div class="col"></div> 
  <div class="col"></div>
  <div class="col"><b>AD SOYAD İMZA</b></div>
</div>

</header>
</body>

</html>
<script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        w=window.open();
        w.document.write(printContents);
        w.print();
        w.close();
    }
</script>
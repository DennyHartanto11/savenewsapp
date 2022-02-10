<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="slidy.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet">
</head>
<body>
<div id="menu">
<nav>

<input type="checkbox" id="show-menu" role="button">
<label for="show-menu" class="open"><span class="fa fa-bars"></span></label>
<label for="show-menu" class="close"><span class="fa fa-times"></span></label>
<ul id="topnav">  
<li><a href="index.php"><img src="/logo.jpg" class="image" alt=""></a></li>
<li><a href="check.php">Check Fact</a></li>
<li><a href="submit.php">Submit Topic</a></li>
<li><a href="hoax.php">HOAX News</a></li>
<li><a href="crime.php">CyberCrime List</a></li>
<li><a href="fact.php">Fun Fact</a></li>
<li>
	<ul>
	<li><a href="#"><i class="fa fa-facebook"></i></a></li>
	<li><a href="#"><i class="fa fa-instagram"></i></a></li>
	<li><a href="#"><i class="fa fa-twitter"></i></a></li>
	</ul>
</li>

</ul>
</nav>
</div>
<div id="container">
<div id="pageheader">

</div>

<div class="section">
<div class="pageitem">
<div id="slider">

</div>
</div>
</div>
<div class="section">
    <div class="pageitem">
    <div class="col">
    <h1>Kirimkan Informasi / Topic Yang Ingin Kami Publish!</h1>
    <br>
    <label for="formFileMultiple" class="form-label">Masukan Foto Data Pendukung!</label>
    <br>
    <input class="form-control" type="file" id="formFileMultiple" multiple />
    <br>
    <h2>Masukan Data Diri dan Informasi Anda!</h2>
    
        <label class="form-label" for="typeText">Nama:</label>
        <input type="text" id="typeText" class="form-control" />
        <label class="form-label" for="typeEmail">Email:</label>
        <input type="email" id="typeEmail" class="form-control" />
        <label class="form-label" for="typeNumber">Nomor Hp: </label>   
        <input type="number" id="typeNumber" class="form-control" />
        <label class="form-label" for="typeURL">Link Informasi:</label>
        <input type="url" id="typeURL" class="form-control" />
        <label class="form-label" for="textAreaExample">Informasi Tambahan:</label>
        <textarea class="form-control" id="textAreaExample" rows="4"></textarea>
        <br>
        <a href="notif.php"><button type="button" class="btn btn-outline-primary btn-rounded" data-mdb-ripple-color="dark">Kirim!</button></a>
        

    </div>
</div>
</div>


</html>
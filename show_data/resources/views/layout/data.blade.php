<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Data</title>
    <link href='https://fonts.googleapis.com/css?family=Itim' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- plugin css -->
    <link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <!-- swiper css -->
    <link rel="stylesheet" href="assets/libs/swiper/swiper-bundle.min.css">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    <style>
        body {
    font-family: 'Itim';font-size: 22px;
}
        table {
	border-collapse: collapse;
    font-family: Tahoma, Geneva, sans-serif;
}
table td {
	padding: 15px;
}
table thead td {
	background-color: #54585d;
	color: #ffffff;
	font-weight: bold;
	font-size: 13px;
	border: 1px solid #54585d;
}
table tbody td {
	color: #636363;
	border: 1px solid #dddfe1;
}
table tbody tr {
	background-color: #f9fafb;
}
table tbody tr:nth-child(odd) {
	background-color: #ffffff;
}

.header-basic {
	background-color: #292c2f;
	box-shadow: 1px 2px 2px rgba(0, 0, 0, 0.15);
	padding: 20px 40px;
	height: 80px;
	box-sizing: border-box;
}

.header-basic .header-limiter {
	max-width: 1200px;
	text-align: center;
	margin: 0 auto;
}

/* Logo */

.header-basic .header-limiter h1 {
	float: left;
	font: normal 28px Cookie, Arial, Helvetica, sans-serif;
	line-height: 40px;
	margin: 0;
}

.header-basic .header-limiter h1 span {
	color: #5383d3;
}

/* The header links */

.header-basic .header-limiter a {
	color: #ffffff;
	text-decoration: none;
}

.header-basic .header-limiter nav{
	font:16px Arial, Helvetica, sans-serif;
	line-height: 40px;
	float: right;
}

.header-basic .header-limiter nav a{
	display: inline-block;
	padding: 0 5px;
	text-decoration:none;
	color: #ffffff;
	font-size: 16px;
	opacity: 0.9;
}

.header-basic .header-limiter nav a:hover{
	opacity: 1;
}

.header-basic .header-limiter nav a.selected {
	color: #608bd2;
	pointer-events: none;
	opacity: 1;
}

/* Making the header responsive */

@media all and (max-width: 600px) {

	.header-basic {
		padding: 20px 0;
		height: 75px;
	}

	.header-basic .header-limiter h1 {
		float: none;
		margin: -8px 0 10px;
		text-align: center;
		font-size: 24px;
		line-height: 1;
	}

	.header-basic .header-limiter nav {
		line-height: 1;
		float:none;
	}

	.header-basic .header-limiter nav a {
		font-size: 13px;
	}

}
</style>
      
</head>
<body>
    <header class="header-basic">

        <div class="header-limiter">

            <h1><a href="#">DATA<span>KU</span></a></h1>

            <nav>
                <a href="#" class="selected">Data</a>
                <a href="https://smkn2semarang.sch.id/">Blog</a>
                <a href="https://smkn2semarang.sch.id/read/2/profil">About</a>
            </nav>
            
        </div>

    </header>
    <h2>Detail</h2>

    <table>
        <thead>
          <tr>
            <td>Nama</td>
            <td>: {{ $siswa [$presensi] ['nama'] }}</td>
        </tr>
    
        <tr>
            <td>Kelas</td>
            <td>: {{ $siswa [$presensi] ['kelas'] }}</td>
        </tr>
    
        <tr>
            <td>Presensi</td>
            <td>: {{ $siswa [$presensi] ['presensi'] }}</td>
        </tr>    

        </thead>
    </table>
  
    
</body>
</html> 

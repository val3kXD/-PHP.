<!DOCTYPE html>
<html>
<body>
<head>
<link href="static/img/photo.ico" rel="icon" type="image/x-icon">
<title>Блог Школьник Good</title>
<link rel="stylesheet" type="text/css" href="style-themes.css">
<style type="text/css">
.site-footer {
  	display: inline-flex;
  	justify-content: space-between;
  	color: #999999;
	}
body {
  	padding: 0;
  	font-size: 14px;
  	line-height: 18px;
  	color: #000000;
  	font-family: "Source Sans Pro", "Arial", sans-serif;
 	}
.header-h1 {
    	position: relative;
    	margin-bottom: .5rem;
    	text-align: center; }
</style>
</head>
<center>
      <header>
      	<div class="header-h1">
      	<p><img src="static/img/u_ajax.png" width="150" height="150"></p>
      </header> 
<hr>
<div>
<table width="90%">
<tr>
	<td align="right" width="20%" >
		<h3 id='titl'>Категории</h3>
		<a class='a_href' href= "index.php">Главная страница</a>
		<a class='a_href' href='?page=lx&page_id=1'>Как стать отличником?</a>
		<a class='a_href' href='?page=python_calc'>Калькутор на Python</a>
		<a class='a_href' href="?page=prog">HTML codding</a>	
		</td>
		<td valign="top" style = "padding: 30px">
 		</div>

	<!-- PHP -->
	 <?php
		$page = "";
		if (empty($_GET['page']))
		{
			$page = 'index';
		
			
		}
		else
		{
			$page = $_GET['page'];
		}
		include('pages/'.$page.".php");
	?>
</td>
</tr>
</table>
<!-- Цитата -->
<blockquote>
  	<p>Единственное счастье в жизни — это постоянное стремление вперед.</p>
  	<footer>— <cite>Эмиль Золя</cite></footer>
</blockquote>
 <footer class="site-footer">
        <p>© Виктор, 2022</p>
      </footer>
</center> 
</body>
</html>


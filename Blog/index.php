
<!DOCTYPE html>
<html>
<head>
	<link href="sb.svg" rel="shortcut icon" type="image/x-icon">
	<title>Советы школьника</title>
	<style type="text/css">
		body {
			background-color: white;
		}
		.menu
		{
			border-radius: 15px;
		}
		.table {
			background-color: #FFF;
			color: black;
		}
		.a_href {
			color:green;
		}
	</style>
</head>
<body id = 'z'>
<center>
<table align="center" width="90%" >
	<tr>
		<td class="table">
			<img src="/static/img/rebenok.gif" width="10%">
		</td>
		<td class="table">
			<center>
				<font color="#990" size="5%">Советы Школьника</font>
			</center>
		</td>
	</tr>
</table>
<hr>
<table class="table" border="0" width="90%">
	<tr>
		<td align="right" width="20%" >
			<a class='a_href' href= "index.php">Главная страница</a>
			
			<a class='a_href' href='?page=lx&page_id=1'>Лайфхаки для школы</a>

			<a class='a_href' href='?page=python_calc'>Калькутор на Python</a>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
		</td>
		<td valign="top" style = "padding: 30px">


<!-- ######################################## -->
<!-- СЮДА СОДЕРЖИМОЕ СТРАНИЦЫ -->
<!-- ######################################## -->

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

<!-- ######################################## -->
<!-- КОНЕЦ СОДЕРЖИМОГО СТРАНИЦЫ -->
<!-- ######################################## -->

</td>
</tr>
</table>

<table width="90%" class ="table" >
	<tr>
		<td style = "padding: 10px; border-radius: 15px" align="center" >
			Developer by <a href = 'https://vk.com/val3kxd' class="a_href" target="_blank">Виктор Гагарин</a>
		</td>
	</tr>
</table>

</center>
</body>
</html>

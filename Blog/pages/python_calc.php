<style type="text/css">
	.code 
		{
			background-color: #000;
			color: #30FD27;

		}
		.menu
		{
			border-radius: 15px;
		}
		
		

</style>

Всем привет! 
		Сегодня мы сделаем <em>калькулятор</em>на Python<br>
Что нам нужно:

<em> <br> 1. Установленный Python. <br> PS: Установить можно <a href="https://python.org/downloads" target="_blank" translate="ru" class="req">здесь.</a> <br> 2. Немного знаний. <br> Чего же мы ждём? Let's go! </em> <br>

<h3>1. Условные операторы + вопрос.</h3>
<div class="code"> 
a = float(input('Введите число a: ')) <br>
b = float(input('Введите число b: ')) <br>
what = input('Что будем делать?') #+, -, *, /. <br>
if what == "+": <br> #ставим условие, если вопрос равен +, то будем плюсовать <br>
	print('Resultat: ', a + b) <br>
if what == "-": <br> #ставим условие, если вопрос равен -, то будем вычитать <br>
	print('Resultat: ', a - b) <br>
if what == "/": <br> #ставим условие, если вопрос равен /, то будем делить <br>
	print('Resultat: ', a / b) <br>
if what == "*": <br> #ставим условие, если вопрос равен *, то будем умножать <br>
	print('Resultat: ', a * b) <br>
print('Thank you, very much!')
</div>
Так и работает наш код! Спасибо за прочтения старницы! <br>
PS: поставь лайк если понравилось)
<br>


<form action="" method="POST">

	<br>
	<input type="submit" name="like" value="Like">
	<input type="submit" name="dislike" value="Dislike">
</form>
<?php
if (!empty($_POST['like']))
{
	$db = new SQLite3("sqlite.db");
	$db->exec("UPDATE pages SET like=like+1 WHERE `id`=".$page_id);
	$db->close();
}

if (!empty($_POST['dislike']))
{
	$db = new SQLite3("sqlite.db");
	$db->exec("UPDATE pages SET dislike=dislike+1 WHERE `id`=".$page_id);
	$db->close();
}
?>

<?php
$db = new SQLite3("sqlite.db");

$results = $db->query('SELECT like, dislike FROM pages WHERE `id`='.$page_id);
while ($row = $results->fetchArray()) 
{
    echo "Likes: ".$row['like'];
    echo "<br>";
    echo "Disikes: ".$row['dislike'];
}

$db->close();
?>

<!-- добавление дб -->
<?php
		$page_id = $_GET['page_id'];
		$title = "";
		$author = "";
		$about_pages = "";
?>

<?php
$db = new SQLite3("sqlite.db");
$results = $db->query('SELECT id, title, authour, about_pages, text_pages FROM pages WHERE `id`='.$page_id);
while ($row = $results->fetchArray()) {
	$title = $row['title'];
	 $author = $row['authour'];
    $about_pages = $row['about_pages'];
    $text_pages = $row['text_pages'];
}

$db->close();
?>


<div style="background-color: white">


<!-- информация о странице-->
<?php echo $text_pages;
?>
 




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
} echo "<br>";
$db->close();
?>
<br>
<!-- автор и о странице -->
<h5>Автор: <?php echo $author; ?></h5>
<h5><?php echo $about_pages; ?></h5>

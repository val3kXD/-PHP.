
	<?php
		$page_id = $_GET['page_id'];
		$title = "";
		$author = "";
		$text = "";
	?>

<?php
$db = new SQLite3("sqlite.db");

$results = $db->query('SELECT id, title, authour, text FROM pages WHERE `id`='.$page_id);
while ($row = $results->fetchArray()) 
{
    $title = $row['title'];
    $author = $row['authour'];
    $text = $row['text'];
}

$db->close();
?>

<div style="background-color: #D9D">
	<br>
	<h2><?php echo $title; ?></h2>
	<h6>Автор: <?php echo $author; ?></h6>
	<?php echo $text; ?>
	<br>
</div>


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

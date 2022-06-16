
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


<? php echo $text_pages;
?>

<?php
 require("lib/admin.class.php");
 $etinadmin = new etinadmin();
 include("partials/header.php");

// SUPPRESSION

if (isset($_GET['delete'])){
	$etinadmin->delete_news($_GET['delete']);
}
?>

<section>

	<div id="body_content">
		<div class="container">
			<div class="row">

<?php echo $etinadmin->flash(); ?>

<h1>VOICI LES NEWS !!</h1>
<br>

<table class="table table-striped" id="table_news">
	<thead>
		<tr>
			<th>ID</th>
			<th>Title</th>
			<th>Content</th>
			<th>Date</th>
			<th>Image</th>
			<th width=150>Action</th>

		</tr>

	</thead>
	<tbody>
	<?php $news = $etinadmin->show_news(); ?>

	<?php	foreach ($news as $news_found): ?>
			<tr>
				<td><?= $news_found['id']; ?></td>
				<td><?= $news_found['title']; ?></td>
				<td height=50><?php echo substr($news_found['content'],0,100); ?> ...</td>
				<td><?= $news_found['date']; ?></td>
				<td><img src="../picture/news/<?= $news_found['name_picture']?>" style="height:50px; width:70px;"></td>
				<td>
					<a class="btn btn-default" style="margin:5px auto;width:130px;" href="news_edit.php?id=<?=$news_found['id'];?>&<?= $etinadmin->csrf();?>">Editer</a>
					<a class="btn btn-default" style="margin:5px auto;width:130px;" href="?delete=<?= $news_found['id']; ?>&<?= $etinadmin->csrf();?>" onclick="return confirm('Tu est sur de vouloir supprimer la news');">Supprimer</a>
				</td>


			</tr>

	<?php endforeach; ?>
	</tbody>

		</table>
	<div class="pagination_admin_new">
		<?php $etinadmin->show_pagination(); ?>
	</div>

		<div id="link_news_new"><a class="btn btn-primary" href="news_edit.php">Créer une nouvelle news</a></div>
			</div>
		</div>

	</div>
</section>

<?php include("partials/footer.php");?>

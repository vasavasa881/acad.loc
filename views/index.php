<?php include_once ROOT.'/views/layot/header.php'; ?>

	<!-- end #header -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<?php foreach ($categoryList as $categoryItem):?>
					<div>
						<h2 class="title"><a href='categoryview/<?php echo $categoryItem['id'] ;?>'><?php echo $categoryItem['title'].' # '.$categoryItem['id'];?></a></h2>
						<div class="div_h4">
							<?php foreach ($newsList as $newsItem):?>
								<div>
									<h4><a href='../news/<?php echo $newsItem['id'] ;?>'><?php echo $newsItem['title'].' # '.$newsItem['id'];?></a></h4>
								</div>
							<?php endforeach;?>
						</div>
					</div>
				<?php endforeach;?>


				</div>
				<!-- end #content -->
                <div id="sidebar"><?php include_once ROOT.'/views/layot/sidebar.php'; ?></div>
			</div>
		</div>
	</div>
	<!-- end #page -->
</div>
<?php include_once ROOT.'/views/layot/footer.php'; ?>
<!-- end #footer -->
</body>
</html>

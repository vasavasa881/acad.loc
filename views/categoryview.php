<?php include_once ROOT.'/views/layot/header.php'; ?>
    <!-- end #header -->
    <div id="page">
        <div id="page-bgtop">
            <div id="page-bgbtm">
                <div id="content">
                    <div class="post">
                        <h2 class="title"><a href='/categoryview/<?php echo $categoryItem['id'] ;?>'><?php echo $categoryItem['title'].' # '.$categoryItem['id'];?></a></h2>
                    </div>
                    <div>
                        <?php foreach ($newsList as $newsItem):?>
                            <div class="permalink">
                                <p class="title"><a href='../news/<?php echo $newsItem['id'] ;?>'><?php echo $newsItem['title'].' # '.$newsItem['id'];?></a></p>
                            </div>
                        <?php endforeach;?>
                    </div>
                    <p><a href='../' class="permalink"> Back to HomePage</a></p>
                    <div style="clear: both;">&nbsp;</div>
                </div>
                <!-- end #content -->
                <?php include_once ROOT.'/views/layot/sidebar.php'; ?>
                <!-- end #sidebar -->
                <div style="clear: both;">&nbsp;</div>
            </div>
        </div>
    </div>
    <!-- end #page -->
</div>
<?php include_once ROOT.'/views/layot/footer.php'; ?>
<!-- end #footer -->
</body>
</html>

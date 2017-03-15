<div id="sidebar">
    <ul>
        <li>
            <h2>Категории</h2>
            <ul>
                <li><a href="#">
                        <?php foreach ($categoryList as $categoryItem):?>
                        <div>
                            <h2 class="title"><a href='/categoryview/<?php echo $categoryItem['id'] ;?>'><?php echo $categoryItem['title'];?></a></h2>
                            <div class="div_h4">
                                <?php endforeach;?>
                    </a></li>

            </ul>
        </li>
 <!--       <li>
            <h2>Aliquam tempus</h2>
            <p>Mauris vitae nisl nec metus placerat perdiet est. Phasellus dapibus semper consectetuer hendrerit.</p>
        </li>
        <li>
            <h2>Categories</h2>
            <ul>
                <li></li>
            </ul>
        </li>

        <li>
            <h2>Archives</h2>
            <ul>
                <li><a href="#">Aliquam libero</a></li>
                <li><a href="#">Consectetuer adipiscing elit</a></li>
                <li><a href="#">Metus aliquam pellentesque</a></li>
                <li><a href="#">Suspendisse iaculis mauris</a></li>
                <li><a href="#">Urnanet non molestie semper</a></li>
                <li><a href="#">Proin gravida orci porttitor</a></li>
            </ul>
        </li>
    </ul>-->
</div>
<!-- The Main section include the container of the cds collection and with the foreach php method stamp cover,title,artist and year of every single album  -->
<main>
                <div class="cds_box">
                    <?php foreach ($dataBase as $value) { ?>
                        <div class="cds_container">
                            <img src="<?php echo $value['poster']; ?>" alt="">
                            <h3> <?php echo $value['title']; ?></h3>
                            <p class="author"><?php echo $value['author']; ?></p>
                            <p class="year"><?php echo $value['year']; ?></p>   
                        </div>
                    <?php } ?>
                </div>
            </main>
        </div>
    </body>
</html>
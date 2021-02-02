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
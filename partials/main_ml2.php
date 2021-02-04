<!-- The Main section include the container of the cds collection and with the VueJs V-for directive stamp cover,title,artist and year of every single album  -->
<main>
                <div class="cds_box">
                        <div class="cds_container" v-for="lp in filterMusic">
                            <img :src="lp.poster" alt="">
                            <h3>{{lp.title}}</h3>
                            <p>{{lp.author}}</p>
                            <p>{{lp.year}}</p>   
                        </div>
                </div>
            </main>
        </div>
        <!-- link to javascript file -->
        <script src="../dist/js/app.js"></script>
    </body>
</html>
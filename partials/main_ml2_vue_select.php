<!-- The Main section include the container of the cds collection and with the VueJs V-for directive stamp cover,title,artist and year of every single album  -->
<main>
                <div class="cds_box">
                        <div class="cds_container" v-for="lp in music" v-if="selected == lp.genre">
                            <img :src="lp.poster">
                            <h3>{{lp.title}}</h3>
                            <p>{{lp.author}}</p>
                            <p>{{lp.year}}</p>   
                        </div>
                        <div class="cds_container" v-for="lp in music" v-if="selected == 0">
                            <img :src="lp.poster">
                            <h3>{{lp.title}}</h3>
                            <p>{{lp.author}}</p>
                            <p>{{lp.year}}</p> 
                        </div>
                </div>
            </main>
        </div>
        <!-- link to javascript file -->
        <script src="../dist/js/app_vue_select.js"></script>
    </body>
</html>
// open a new istance vuejs to call the api db_api.php

let app = new Vue ({
    el:"#app",
    data:{
        music: []
    },
    methods:{
        genFunc:function(){
            axios.get("http://localhost:8888/php-ajax-dischi/partials/db_api.php")
            .then(response => {
                console.log(response.data);
                this.music.push(response.data);
                console.log(this.music);
                
            })
        }
    },
    mounted(){
        this.genFunc();
    }
})
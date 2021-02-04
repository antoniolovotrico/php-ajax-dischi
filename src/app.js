// open a new istance vuejs to call the api db_api.php
import Vue from "vue";
import axios from "axios";

let app = new Vue ({
    el:"#app",
    data:{
        music: [],
        genre: [],
        selected: "",

    },
    mounted(){
        this.genFunc();
    },
    methods:{
        // function to generate the cover of every single album from the api in the database file
        genFunc:function(){
            axios.get("http://localhost:8888/php-ajax-dischi/partials/db_api.php")
            .then(response => {
                this.music = response.data;
                this.music.forEach(element => {
                    if (!this.genre.includes(element.genre)) {
                        this.genre.splice(0,0,element.genre);; 
                    }      
                });
                console.log(this.genre); 
            });
        }
        
    },
    computed: {
    //this function will search and show only albums with relation with the options choosed in the select
    filterMusic: function () {
        let filterGenre = this.selected;
        return this.music.filter(function(element){
          let filtered = true;
          if(filterGenre && filterGenre.length > 0){
            filtered = element.genre == filterGenre;
          }
          return filtered;
        })
      }
    }
         
})

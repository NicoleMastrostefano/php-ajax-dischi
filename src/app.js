import Vue from 'vue';
const axios = require("axios");
var app = new Vue (
  {
    el: "#app",
    data: {
      albums:[],
      genre:'',
      genres:[]
  },

  mounted: function() {
    var self = this;
    axios
      .get("server.php")
      .then((response) => {
        this.albums = response.data;
      });
    },

  methods: {
    filtra:function(){
      axios
      .get("server.php",
        {
          params:{
            genre:this.genre
          },
        }
      )
      .then((response) => {
        this.albums = response.data;
      });
    }
  }
});

import Vue from 'vue';
const axios = require("axios");
var app = new Vue (
  {
    el: "#app",
    data: {
      albums:[],
  },

  mounted: function() {
  axios
    .get("server.php")
    .then((response) => {
      this.albums = response.data;
   });
  }
});

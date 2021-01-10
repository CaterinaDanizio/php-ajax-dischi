// function getData() {
//     axios.get('data.php')
//     .then(response => console.log(response.data));
// }

// getData();

var app = new Vue({
  el: '#app',
  data: {
    database: [],
  },
  
   mounted: function() {
    axios.get('data.php')
    .then(response => {this.database = response.data});
    console.log(this.database);
  }
})
var app = new Vue({
  el: '#app',
  data: {
    arrayMusica: [],

  },
  mounted() {
    axios.get('http://localhost/php-ajax-dischi/api')
      .then((resp) => {
        this.arrayMusica = resp.data
        
      })
  },
  beforeUpdate() {

  },
  methods: {

  }
})
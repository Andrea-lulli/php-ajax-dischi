var app = new Vue({
  el: '#app',
  data: {
    arrayMusica: [],
    arrayGenere: [],
    scelta: '',

  },
  mounted() {
    axios.get('http://localhost/php-ajax-dischi/api')
      .then((resp) => {
        this.arrayMusica = resp.data

        this.arrayMusica.forEach((elem) => {
          console.log(elem);
          if (!this.arrayGenere.includes(elem.genre)) {
            this.arrayGenere.push(elem.genre);
          }

        })

      })
  },
  beforeUpdate() {

  },
  methods: {
    sceltaGenere() {
      axios.get(`http://localhost/php-ajax-dischi/api/?genre=${this.scelta}`)
        .then((resp) => {
          this.arrayMusica = resp.data
        })


    }
  }
})
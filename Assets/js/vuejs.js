
let app = new Vue({
  el: '#app',
  data: {
    message: 'Hello Vue!',
    link: '?page=vuejs',
    success: true,
    persons: ['joe', 'will', 'sam']
  },
  methods: {
    addPerson: function(){
      this.persons.push('jimmy')
    }
  }
})

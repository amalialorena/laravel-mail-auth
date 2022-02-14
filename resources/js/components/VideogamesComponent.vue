<template>
  <div id="videogames">
    <h1>Videogames</h1>
    <table>
      <tr>
        <th>Videogame Title</th>
        <th>Subtitle</th>
        <th>Rating</th>
      </tr>

      <tr v-for="videogame,i in videogames" :key="i">
        <td>{{videogame.title}}</td>
        <td>{{videogame.subtitle}}</td>
        <td>{{videogame.rating}}</td>
      </tr>
    </table>
  </div>
</template>

<script>
export default {
    data(){
        return{
           videogames: []
        };
    },
  mounted() {
    axios.get('/api/videogame/list')
      .then(r => this.videogames= r.data)
      .catch(e => console.error(e));
  }
}
</script>

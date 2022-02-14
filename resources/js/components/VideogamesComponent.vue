<template>
  <div id="videogames">
    <h1>Videogames</h1>
    <table>
      <tr>
        <th>Videogame Title</th>
        <th>Subtitle</th>
        <th>Rating</th>
        <th v-if="user">Action</th>
      </tr>

      <tr v-for="videogame in videogames" :key="videogame.id">
        <td>{{ videogame.title }}</td>
        <td>{{ videogame.subtitle }}</td>
        <td>{{ videogame.rating }}</td>
        <td v-if="user">
            <a :href="`/api/delete/${videogame.id}`">DELETE</a>
        </td>
        
      </tr>
    </table>
  </div>
</template>

<script>
export default {
  data() {
    return {
      videogames: [],
    };
  },

  props: {
    user: String,
  },

  mounted() {
      console.log(this.user);
    axios
      .get("/api/videogame/list")
      .then((r) => (this.videogames = r.data))
      .catch((e) => console.error(e));

      
  },
};
</script>

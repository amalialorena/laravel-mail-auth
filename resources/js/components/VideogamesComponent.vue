<template>
  <div id="videogames">
    <h1>Videogames</h1>
    <table>
      <tr>
        <th>Videogame Title</th>
        <th>Subtitle</th>
        <th>Rating</th>
      </tr>

      <tr>
        <td>Videogame Title</td>
        <td>Subtitle</td>
        <td>Rating</td>
      </tr>
    </table>
  </div>
</template>

<script>
export default {
  mounted() {
    axios.get('/api/videogame/list')
      .then(r => console.log(r))
      .catch(e => console.error(e));
  }
}
</script>

<template>
  <div id="app">

    <div class="author">
      <img src="./assets/images/avatar.jpg" alt="author">
      <div class="details">
        <div>Jemshit Shukurov</div>
        <div>Feb 13 2min to read</div>
      </div>
    </div>

    <main>
      <blog-post/>

      <comments-all/>
    </main>

  </div>
</template>

<script>
import BlogPost from './components/BlogPost.vue'
import CommentsAll from './components/CommentsAll.vue'

export default {
  name: 'App',
  components: {
    BlogPost,
    CommentsAll
  }
}
</script>

<style>

  #app{
    margin: 0 15%;
    background: #e6e6e6;
    padding: 1rem;

  }
  main {
    font-family: Avenir, Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
    margin-top: 60px;
  }
  .author {
    display: flex;
    align-items: center;
  }
  .author > img {
      left: 1rem;
      border-radius: 50%;
      border: 1px solid red;
      width: 5rem;
      height: auto;
  }
  .details > div {
    margin: 1rem;
  }

</style>

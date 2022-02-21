<template>
  <div class="add-comment">

        <input v-model="comment.author" type="text" name="name" id="name"  placeholder="Albert Douglos">
        <main>
          <textarea v-model="comment.content" name="comment" id="comment"  rows="5" placeholder="Add comment here ..."></textarea>
          <button @click="addComment">Send Comment</button>
        </main>
        
    </div>
</template>

<script>
import axios from 'axios'
export default {
    data() {
        return{
            comment: {
            author:'',
            content: ''
            },
        }
    },
    methods: {
    addComment(){
      axios.post('http://127.0.0.1:8000/api/comments', this.comment ).then(response => {
        if (response.status > 200) this.$emit('refresh');
      });
    }
  }
}
</script>

<style scoped>
  .add-comment {
    margin: 1rem;
  }
  main {
    display: flex;
    margin-top: 1rem;
    margin-block-start: 1rem;  }
  .add-comment > input {
    display: block;
    width: 30rem;
  }
  main > textarea {
    width: 30rem;
    margin-right: 1rem;
  }

  button {
    align-self: flex-end;
  }
</style>
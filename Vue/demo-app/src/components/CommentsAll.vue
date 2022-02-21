<template>
  <div>
    <div class="header">
        <span class="title">
          {{comments.length}} Comments 
        </span>
        
    </div>

    <hr>
      <AddComment @refresh="refreshComments"/>
    <hr>
    <div class="comments" v-for=" comment in comments" :key="comment.id">
          <img src="../assets/images/avatarsample.png" alt="guest">
          <div>
            <div class="details">
              <span class="author">{{comment.author}}</span>   {{comment.created_at}}
            </div>
            <div class="content">
              {{ comment.content}}
            </div>
            <div class="actions"> 
              <span>Like</span> <span @click="addReply(comment)">Reply</span>
            </div>
            <div v-if="comment.reply" class="comment-reply">
              <AddComment  @refresh="refreshComments"/>
            </div>
          </div>
    </div>
  </div>
</template>


// ============== JS here ======================

<script>
import axios from 'axios';
import AddComment from './AddComment.vue'
export default {
  components:{
    AddComment
  },
  data() {
    return {
      comments:[],
      reply: false,
    }
  },
  created(){
    axios.get('http://127.0.0.1:8000/api/comments').then(response => 
      (this.comments = response.data.data));
  },
  methods:{
    refreshComments(){
      axios.get('http://127.0.0.1:8000/api/comments').then(response => 
        (this.comments = response.data.data));
    },
    addReply(comment){
      comment.reply = !comment.reply;
      // console.log(id);
    }
  }
 
}
</script>


// ==================== CSS here ================

<style scoped>
  .header {
    display: flex;
  }
  .title {
    left: 1rem;
  }
  img {
    border-radius: 50%;
    width: 5rem;
    align-self: flex-start;
  }
  .comments {
    display: flex;
    align-items: center;
    margin-bottom: 3rem;
  }

  .comments > div {
    margin-left: 1rem;
  }
  .details{
    display: flex;
    margin-top: 1rem;
    margin-bottom: 1rem;
  }
  .author {
    font-weight: 600;
    margin-right: 1rem;
  }

  .actions {
    position: absolute;
    margin-top:1rem;
    font-weight: 550;
  }
  .actions > span:hover{
    text-decoration: underline;
    cursor: pointer;
  }
  .comment-reply {
    z-index: 9;
    margin-top: 3rem
  }
</style>
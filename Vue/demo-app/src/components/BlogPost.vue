<template>
    <div>
        <div class="image">
            <img src="../assets/images/funny.jpg" alt="test" />
            <div class="blog">
                <div class="title">
                    <h1> Best Blog Post ever</h1>
                </div>
                <div class="blogText">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Aperiam, cumque ipsa? Quod doloremque, aperiam placeat harum,
                    quaerat veritatis nesciunt recusandae sit est laborum odio officia quis fugit cumque nemo voluptatum.
                </div>
            </div>
            
        </div>
    </div>
</template>

<script lang="ts">
    import Vue from 'vue'

    export default Vue.extend({
        
    })
</script>

<style scoped>

.image > img {
    border: 5px solid red;
    width: 30rem;
    height: auto;
}




.blog {
    margin: auto;
    width: 20rem;
}

.blogText {
    font-size: 2vmin;
}

</style>
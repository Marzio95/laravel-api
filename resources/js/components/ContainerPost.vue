<template>
<div class="container">
    <div class="row g-4">
        <div class="col" v-for="post in posts" :key="post.id">
            <div class="card" style="width: 18rem;">
            <!-- <img class="card-img-top" src=".../100px180/" alt="Card image cap"> -->
                <div class="card-body">
                    <h5 class="card-title">{{ post.title }}</h5>
                    <p class="card-text">{{ post.postText }}</p>
                    <a href="#" class="btn btn-primary">Go to Post</a>
                </div>
            </div>
        </div>
    </div>
</div>

</template>

<script>
import Axios from 'axios';
export default {
name: 'ContainerPost',
data() {
    return{
        posts:[],

    }
},
created () {
    Axios.get('http://localhost:8000/api/posts')
            .then(res => {
                this.posts = res.data.response.data;
            })
}
}
</script>

<style>

</style>
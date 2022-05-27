<template>
<div class="container">
    <div class="row g-4">
        <div class="col d-flex" v-for="post in posts" :key="post.id">
            <div class="card" style="width: 18rem;">
            <!-- <img class="card-img-top" src=".../100px180/" alt="Card image cap"> -->
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-uppercase">{{ post.title }}</h5>
                    <p class="card-text">{{ post.postText }}</p>
                     <router-link :to="{name: 'PostShow', params: {slug: post.slug}}" class="btn btn-primary mt-auto">Read more</router-link>
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
    Axios.get('http://localhost:8000/api/posts?home')
            .then(res => {
                this.posts = res.data.response.data;
            })
}
}
</script>

<style>

</style>
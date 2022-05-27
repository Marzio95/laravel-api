<template>

    <div class="container">
        <div class="card p-3">
            <h1 class="text-uppercase text-center">{{ post.title }}</h1>
            <h2 class="text-capitalize">From {{ post.user.name }}<span v-if="post.category"> in category {{ post.category.name }}</span></h2>
            <div class="tags">
                <span v-for="tag in post.tags" :key="tag.id" class="tag">{{ tag.name }}</span>
            </div>
            <p>{{ post.postText }}</p>
        </div>
    </div>
</template>

<script>
export default {
    name: 'PostShow',
    props: ['slug'],
    data() {
        return {
            post: null,
            baseApiUrl: 'http://localhost:8000/api/posts',
        }
    },
    created() {
        this.getData(this.baseApiUrl + '/' + this.slug);
    },
    methods: {
        getData(url) {
            if (url) {
                Axios.get(url)
                .then(res => {
                    if (res.data.success) {
                        this.post =  res.data.response.data;
                    } 
                })
            }
        }
    }
}
</script>

<style>
.tags {
    margin: 1rem 0;
}
.tag {
    background-color: darksalmon;
    margin: 1rem;
    border-radius: 25px;
    padding: 0.5rem;
    color: white;
}

</style>
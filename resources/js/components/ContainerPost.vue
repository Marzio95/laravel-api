<template>

<div class="row">
    <div class="col-4 ">
        <div class="card" style="width: 18rem;">
        <!-- <img class="card-img-top" src=".../100px180/" alt="Card image cap"> -->
            <div class="card-body">
                <h5 class="card-title">{{ }}</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
</div>

</template>

<script>
export default {
name: 'ContainerPost',
data() {
    return{
        posts:[],

    }
},
created () {
    Axios.get('http://localhost:8080/api/post')
            .then(res => {
                console.log(res.data)
                this.posts = res.data.response.data;
            })
}
}
</script>

<style>

</style>
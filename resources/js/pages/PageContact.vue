<template>
<div class="body_form">
    <div class="alert alert-success mt-3" role="alert" v-show="statusMessage">{{ statusMessage }}</div>
  <form @submit.prevent="sendMessage" action="/api/mail" class="row g-3" method="post">
        <div class="form-group col-md-6">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Name" name="name" v-model="name">
        </div>
        <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Email" name="email" v-model="email">
        </div>
        <div class="form-group col-md-12">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" rows="3" name="message" v-model="message"></textarea>
        </div>
        <div class="form-group col-md-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
</template>

<script>
export default {
    name: 'PageContact',
     data() {
        return {
            apiUrl: "/api/mail",
            name: '',
            email: '',
            message: '',
            statusMessage: ''
        }
    },
    methods: {
        sendMessage() {
            Axios.post(this.apiUrl, {
                name: this.name,
                email: this.email,
                message: this.message,
            })
                .then(res => this.statusMessage = res.data.success,
                   this.name = '',
                   this.email = '',
                   this.message = '',
                );
        }
    }

}
</script>

<style>
.body_form {
    width: 80%;
    margin: 0 auto;
}

</style>
<template>
    <form @submit.prevent="submit">
        <div class="card-body">
            <textarea v-model="body" name="body" class="form-control border-0 bg-light" placeholder="Whats app Jorge?"></textarea>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary" id="create-status">Publish</button>
        </div>
    </form>
</template>

<script>
export default {
    name: "StatusForm",
    data() {
        return {
            body: ""
        }
    },
    methods: {
        submit() {
            axios.post("/statuses", { body: this.body })
                .then(response => {
                    console.log(response.data)
                    this.body = ""
                }).catch(error => {
                    console.log(error.response.data)
                })
            }
        }
    }
</script>

<style scoped>

</style>

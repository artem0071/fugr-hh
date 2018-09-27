<template>
    <div class="row pt-1">
        <div class="col-md-6">
            <h3 class="mb-3">Оставить комментарий</h3>

            <form @submit.prevent="sendComment">
                <div class="form-group">
                    <label for="inputName">Ваше имя</label>
                    <input v-model="form.name" class="form-control" id="inputName" placeholder="Введите имя">
                </div>

                <div class="form-group">
                    <label for="inputText">Ваш комментарий</label>
                    <textarea v-model="form.text" class="form-control" id="inputText" rows="5"></textarea>
                </div>

                <div class="text-right">
                    <button class="btn btn-outline-dark">Отправить</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        name: "add-comment-component",

        data: () => ({
            form: {
                name: '',
                text: ''
            }
        }),

        methods: {
            sendComment () {
                this.$axios.post('/api/comments', this.form)
                    .then(response => {
                        this.$emit('storeComment', response.data.data)
                        this.clearForm()
                    })
                    .catch((error) => {
                        alert(error.response.data.message)
                    })
            },

            clearForm () {
                this.form = {
                    name: '',
                    text: ''
                }
            }
        }
    }
</script>

<style scoped>

</style>
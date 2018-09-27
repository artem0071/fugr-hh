<template>
    <div>

        <div>
            <comment-component v-for="(comment) in reversedComments"
                               :key="comment.id"
                               :comment="comment" />
        </div>

        <hr/>

        <add-comment-component @storeComment="storeComment" />

    </div>
</template>

<script>
    import commentComponent from './CommentComponent'
    import addCommentComponent from './AddCommentComponent'

    export default {
        name: "comments-component",

        data: () => ({
            comments: []
        }),

        components: {
            commentComponent,
            addCommentComponent
        },

        methods: {
            storeComment (comment) {
                this.comments.push(comment)
            }
        },

        mounted () {
            this.$axios.get('/api/comments')
                .then(response => {
                    this.comments = response.data.data
                })
                .catch(error => {
                    alert(error.response.data.message)
                })
        },

        computed: {
            reversedComments () {
                return this.comments.slice().reverse()
            }
        }
    }
</script>

<style scoped>

</style>
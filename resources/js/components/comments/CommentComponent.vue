<template>
    <div class="mb-4">
        <div class="row">
            <div class="col-1 h5">
                <b>{{ comment.name }}</b>
            </div>
            <div class="col">
                <small class="ml-4 text-muted">
                    <!--UTC00:00-->
                    {{ moment(comment.dates.created).format('HH:mm DD.MM.YYYY') }}
                </small>
            </div>
        </div>
        <div>
            {{ comment.text }}
        </div>
    </div>
</template>

<script>
    import moment from 'moment'

    export default {
        name: "comment-component",

        props: {
            comment: {
                type: Object,
                required: true
            }
        },

        methods: {
            moment
        }
    }
</script>

<style scoped>

</style>
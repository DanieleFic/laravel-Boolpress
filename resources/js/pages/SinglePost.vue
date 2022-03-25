<template>
    <div class="container">
        <h1>{{post.title}}</h1>
        <div v-html="post.content"></div>
        <p v-if="post.category"><strong>Categoria</strong></p>
        <div v-if="post.tags.length > 0 ">
            <strong>Tags</strong>
            <ul>
                <li v-for="tag in post.tags" :key="tag.id">
                    {{tag.name}}
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    name:"SinglePost",
    data(){
        return{
            post: {}
        }
    },
    created(){
        axios
        .get(`/api/posts/${this.$route.params.slug}`)
        .then((data_api)=>{
            this.post = data_api.data
            console.log(this.post);
        }).catch((error)=>{
            //handle error
            this.$router.push({name: "page-404"})
        })
    }
}
</script>

<style>

</style>
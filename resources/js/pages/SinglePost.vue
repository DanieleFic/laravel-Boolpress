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
            <!-- <div v-for="(comment,index) in post.comment" :key="index">{{comment.name}}</div> -->
        </div>
        <div>
            <h3>Lascia un commento</h3>
            <form @submit.prevent="addComment()">
                <input type="text" id="name" placeholder="Inserisci il Nome"
                        v-model="formData.name">
                <textarea  id="content" cols="30" rows="10" placeholder="Inserisci commento" 
                v-model="formData.content">
                </textarea>

               <!--  <div v-if="formErrors.content" style="background:red; color:white;">
                    <ul>
                        <li v-for="(error,index) in formErrors.content" :key="index">
                            {{error}}
                        </li>
                    </ul>
                </div> -->
                
                <button type="submit">Aggiungi Commento</button>
            </form>
            <div v-show="commentSent" style="background:green; color:white;">
                Commento in fase di approvazione!

            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:"SinglePost",
    data(){
        return{
            post: {},
            formData:{
                name:"",
                content:"",
                post_id:null
            },
            commentSent: false,
            formErrors: {}
        }
    },
    created(){
        axios
        .get(`/api/posts/${this.$route.params.slug}`)
        .then((data_api)=>{
            this.post = data_api.data
            this.formData.post_id = this.post_id
            /* console.log(this.post); */
        }).catch((error)=>{
            //handle error
            this.$router.push({name: "page-404"})
        })
    },

    methods:{
        addComment(){
            axios
            //per avere i dati con chiave valore mettiamo this.formData
            .post(`api/comments/`, this.formData)
            .then( (response)=>{
                console.log(response)
                this.formData.name = "";
                this.formData.content = "";
                console.log('sei nell response')
            }).catch((error) =>{
                console.log(error)
                console.log('sei nell error')
                this.formErrors = error.response.data.errors;
            })
        }
    }
}
</script>

<style>

</style>
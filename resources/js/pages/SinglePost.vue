<template>
<div class="ms_containerflex">
    <div class="ms_container">
        <div class="ms_title">
            <h1>{{post.title}}</h1>
        </div>
        <div class="ms_image">
            <img :src="post.image" alt="">
        </div>
        <div class="ms_content">
            <div>{{post.content}}</div>
        </div>
        

        <div class="ms_categorybox" v-if="post.category">
            <h3 >Categoria</h3>
            <p>{{post.category.name}}</p>
        </div>
        
        <div class="ms_commentbox" v-if="post.comments ">
            <h3 >Commenti</h3>
            <div v-for="comment in post.comments" :key="comment.id">
            {{comment.name}}
            {{comment.content}}
            </div>
        </div>
        
        
        <div class="ms_tagbox" v-if="post.tags">
            <h3>Tags</h3>
            <ul>
                <li v-for="tag in post.tags" :key="tag.id">
                    {{tag.name}}
                </li>
            </ul>
            
        </div>
        <div>
            <h3>Lascia un commento</h3>
            <form @submit.prevent="addComment()">
                <input type="text" id="name" placeholder="Inserisci il Nome"
                    v-model="formData.name">

                <textarea  id="content" cols="30" rows="10" placeholder="Inserisci commento" 
                v-model="formData.content">
                </textarea>

                <div v-if="formErrors.content" style="background:red; color:white;">
                    <ul>
                        <li v-for="(error,index) in formErrors.content" :key="index">
                            {{error}}
                        </li>
                    </ul>
                </div>
                
                <button type="submit">Aggiungi Commento</button>
            </form>
            <div v-show="commentSent" style="background:green; color:white;">
                Commento in fase di approvazione!

            </div>
            
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
            this.formData.post_id = this.post.id
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
            .post(`/api/comments/`, this.formData)
            .then( (response)=>{
                console.log(response)
                // pulisco i campi
                this.formData.name = "";
                this.formData.content = "";
                // mostro l'avviso che il commento è stato inserito
                this.commentSent = true;
            }).catch((error) =>{
                console.log(error)
                console.log('sei nell error')
                /* this.formErrors = error.response.data.errors; */
            })
        }
    }
}
</script>

<style lang="scss" scoped>
    .ms_containerflex{
        width: 100%;
        
        .ms_container{
            margin: 0 auto;
            max-width: 1300px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            
            .ms_title{
                width: 100%;
                background-color: antiquewhite;
                h1{
                    text-align: center;
                }
            }
            .ms_image{
                width: 100%;
                img{
                    width: 100%;
                }
            }
        }
    }
</style>
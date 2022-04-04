<template>
<div class="ms_containerflex">
    <div class="ms_container">
        <div class="ms_postbox">

            <div class="ms_title">
                <h1>{{post.title}}</h1>
            </div>

        <div class="ms_image">
            <img :src="post.image" alt="">
            <div class="ms_categorybox" v-if="post.category">
                <p>{{post.category.name}}</p>
            </div>
        </div>

        <div class="ms_content">
            <div>{{post.content}}</div>
        </div>

        <div class="ms_tagbox" v-if="post.tags">
            <div v-for="tag in post.tags" :key="tag.id">
                <span>
                {{tag.name}}
                </span>
            </div>
        </div>
        
        <div class="ms_commentcontainer" v-if="post.comments ">
            <h3 >Commenti</h3>
            <div v-show="comment.approved == 1"  class="ms_commentbox" v-for="comment in post.comments" :key="comment.id">
                <h3>{{comment.name}}</h3>
                <p>{{comment.content}} </p>
            </div>
            
        </div>
        
        
        

        
        <div class="ms_inputcomment">
            <h3>Lascia un commento</h3>
            <form @submit.prevent="addComment()">
                <input class="ms_input-name" type="text" id="name" placeholder="Inserisci il Nome"
                    v-model="formData.name">

                <textarea  class="ms_input-text"  id="content" cols="30" rows="10" placeholder="Inserisci commento..." 
                v-model="formData.content">
                </textarea>

                <div v-if="formErrors.content" style="background:red; color:white;">
                    <ul>
                        <li v-for="(error,index) in formErrors.content" :key="index">
                            {{error}}
                        </li>
                    </ul>
                </div>
                
                <button class="ms_btn" type="submit">Aggiungi Commento!</button>
            </form>
            <div v-show="commentSent"  class="ms_approved">
                Commento in fase di approvazione!

            </div>
            
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
            justify-content: center;
            font-family: 'Red Hat Mono', monospace;
            
            .ms_postbox{
                margin: 25px 0px;
                width:50%
            }
            .ms_title{
                width: 100%;
                color:#CD4631 ;

                h1{
                    font-family: 'Lato', sans-serif;
                    margin: 20px 0px;
                    text-align: center;
                }
            }
            .ms_image{
                position: relative;
                width: 100%;
                display: flex;
                align-items:center;
                justify-content: center;
                img{
                    margin: 20px 0px;
                    width: 100%;
                }
            }
            .ms_categorybox{
                p{
                    font-family: 'Lato', sans-serif;
                    position: absolute;
                    top: 30px;
                    right: 5px;
                    border-radius: 3px;
                    padding: 0px 7px;
                    background-color: #CD4631;
                    color: white;
                }
            }
            .ms_content{
                padding: 10px 10px;
                line-height: 1.2rem;
            }
            .ms_tagbox{
                padding: 10px 10px;
                span{
                    border: 1px solid #81ADC8;
                    background-color:#DEA47E;
                    padding: 2px;
                    border-radius: 5px;
                }
            }
            .ms_commentbox{
                display: flex;
                flex-direction: column;
                margin: 5px 0px;
                padding: 10px 10px;
                min-height: 100px;
                border-radius: 5px;
                border: 0.5px solid #81ADC8;
                background-color:#DEA47E;
            }
            .ms_inputcomment{
                width: 100%;
                display: flex;
                flex-direction: column;
                .ms_input-name{
                    background-color:#DEA47E;
                    border: 1px solid #81ADC8;
                    border-radius: 3px;
                    width: 100%;
                    height:25px;
                    margin: 10px 0px;
                }
                .ms_input-text{
                    margin: 10px 0px;
                    background-color:#DEA47E;
                    border: 1px solid #81ADC8;
                    border-radius: 3px;
                    width: 100%;
                }
                .ms_btn{
                    font-family: 'Lato', sans-serif;
                    font-weight: 900;
                    color: #F8F2DC;
                    padding: 6px 25px;
                    margin-top: 10px;
                    font-size: 20px;
                    width: 100%;
                    border: 0;
                    background-color:#81ADC8;
                    box-shadow: 0 2px 4px rgba(0, 0, 0, .1), 0 8px 16px rgba(0, 0, 0, .1);
                    background-image: linear-gradient(#9E6240, #9E6240);
                    background-position: 50% 50%;
                    background-repeat: no-repeat;
                    background-size: 0% 100%;
                    transition: background-size .5s, color .5s;
                    cursor: pointer;

                    &:hover{
                        background-size: 100% 100%;
                        color: #F8F2DC;
                    }
                }
            }
            .ms_approved{
                margin: 10px 0px;
                background-color: #DEA47E;
            }
            
        }
    }
</style>
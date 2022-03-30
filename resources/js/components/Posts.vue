<template>
    <div class="ms_containerflex">
        <div class="ms_container">
            <!-- ciclo for per stampare tutti i post sulla vista  -->
            <div class="ms_post" v-for="(post, index) in posts" :key="index" >
                <!-- Immagine del post -->
                <div class="ms_image">
                    <img :src="post.image" alt="">
                </div>
                <!-- Categoria del post -->
                <div class="ms_category">
                        <p>{{post.category ? post.category.name : "nessuna categoria" }}</p>
                    </div>
            <!--  <div class="ms_taxbox">
                    <span class="ms_tag" v-for="(tag, index) in post.tags" :key="index"  >
                    {{ tag.name }}
                    </span>
                </div> -->
                <!-- Titolo e contenuto del  post -->
                <div class="ms_postbody">
                    <div class="ms_title_content">
                        <div class="ms_title">
                            <h2>{{post.title}}</h2>
                        </div>
                        <div class="ms_content">
                            <p class="text-concat">
                                {{post.content}} 
                            </p>
                        </div>
                    </div>
                    <!-- bottone per passare alla vista del singolo post -->
                    <router-link :to="{name: 'single-post', params:{ slug: post.slug } }"><button class="ms_btn"><span>Leggi Post</span> </button></router-link>
                </div>
                
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:"Posts",
    data(){
        return{
            posts: []
        }
    },
    created(){
        axios
        .get("/api/posts")
        .then((data_api)=>{
            this.posts = data_api.data
            console.log(this.posts);
        })
    }
}
</script>

<style lang="scss" scoped>

    .ms_containerflex{
        width: 100%;
        background-color: white;
        .ms_container{
            margin: 0 auto;
            max-width: 1300px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            
        }
    }
    .ms_post{
        width: 370px;
        height: 600px;
        position: relative;
        margin: 20px 30px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, .1), 0 8px 16px rgba(0, 0, 0, .1);

        span{
            text-decoration: none;
            color: #F8F2DC;
        }

        .ms_image{
            width: 100%;
            height: 300px;
            
            img{
                width: 100%;
                height: 100%;
                border-top-left-radius: 5px;
                border-top-right-radius: 5px;
            }
        }

        .ms_category{

                p{
                    font-family: 'Lato', sans-serif;
                    position: absolute;
                    top: 5px;
                    right: 5px;
                    border-radius: 3px;
                    padding: 0px 7px;
                    background-color: #CD4631;
                    color: white;
                }
            }

        .ms_title{
            margin-bottom: 0.5rem;
            font-family: 'Lato', sans-serif;
            color:#CD4631 ;
        }
        .ms_category_author_box{
            width: 100%;
            display: flex;
            justify-content: space-between;
            margin: 5px 0;
            
            .ms_author{
                font-weight: bold;
            }
            
        }

        .ms_content{
            font-family: 'Red Hat Mono', monospace;
            position: relative;
            width: 100%;
            height: 50px;
            padding: 5px 5px;
            color: #81ADC8;

            .text-concat{
                position: relative;
                display: inline-block;
                /* word-wrap: break-word; */
                overflow: hidden;
                max-height: 6em; /* (Number of lines you want visible) * (line-height) */
                line-height: 1.2em;
                text-align:justify;
                text-overflow: ellipsis
            }
        }
        .ms_taxbox{
            position: absolute;
            display: flex;
            width: 100%;
            top: 265px;
            left: 5px;
            .ms_tag{
            position: absolute;
            padding: 1px 7px;
            margin: 0px 3px;
            border-radius: 3px;
            background-color: red;
            color: white;
        }
        }
        
    }

    .ms_postbody{
        padding: 1rem 1rem;
        height: 50%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .ms_btn{
        font-family: 'Lato', sans-serif;
        font-weight: 900;
        color: #5C6EDA;
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
            color: #5C6EDA;
        }
    }

    
</style>
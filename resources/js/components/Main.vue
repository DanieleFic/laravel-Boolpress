<template>
    <div class="ms_containerflex">
        <div class="ms_container">
            <div v-for="(post, index) in posts" :key="index" class="ms_post">
                
                <div class="ms_title">
                    <h3>{{post.title}}</h3>
                </div>

                <div class="ms_category_author_box">
                    <div class="ms_author">
                        <span>{{post.author}}</span>
                    </div>
                    <div class="ms_category">
                        <p>{{post.category ? post.category.name : "nessuna categoria" }}</p>
                    </div>
                </div>
                
                <div class="ms_content">
                    {{post.content}} 
                </div>

                <h4>Categoria:</h4>
                <p>{{post.category ? post.category.name : "nessuna categoria" }}</p>
                <h4>Tag:</h4>
                <div >
                    <p v-for="(tag, index) in post.tags" :key="index"  >
                    {{ tag.name }}
                </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:"Main",
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
        background-color: beige;
        .ms_container{
            margin: 0 auto;
            max-width: 1300px;
            display: flex;
            flex-wrap: wrap;
            
        }
    }
    .ms_post{
        width: 100%;
        .ms_title{
        height: 50px;
        background-color: rgb(31, 59, 153);
        text-align: center;
        }
        .ms_category_author_box{
            width: 100%;
            display: flex;
            justify-content: space-between;
        }
    }
    
</style>
<template>
    <div>
        <h1 class="ms_title">Lista dei Post</h1>
        <Posts />
    </div>
    
</template>

<script>
import Posts from "../components/Posts.vue"
export default {
    name:"Home",
    components:{    
            Posts,
        }
}
</script>

<style lang="scss" scoped>
    .ms_title{
        color: #CD4631;
        margin: 20px 0px;
        text-align: center;
        font-family: 'Lato', sans-serif;
    }
</style>
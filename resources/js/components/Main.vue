<template>
<router-view :key="$route.path"></router-view>
</template>

<script>
export default {
    name:"Main",
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
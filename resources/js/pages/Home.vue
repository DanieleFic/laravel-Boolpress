<template>
<div>
    <div class="ms_container-flex">
        <div class="ms_container">
            <h1 class="animate__animated animate__bounceIn ms_title">Benvenuto Nella Mia Versione del CMS più famoso al mondo!</h1>
            <h3 class="ms_text">Progettato con Vue e Laravel</h3>
            <button class="ms_btn"><router-link :to="{name: 'post-home' }"><span>Leggi Post</span></router-link></button>
        </div>
        <div class="ms_flex-start">
            <div class="ms_Vue-box">
                <h1>Vue</h1>
            </div>
        </div>
        <div class="ms_flex-end">
            <div class="ms_Laravel-box">
                <h1>Laravel</h1>
            </div>
        </div>

    </div>
</div>
    
    
</template>

<script>
import Posts from "../components/Posts.vue"
import  'animate.css';
export default {
    name:"Home",
    components:{    
            Posts,
        }
}
</script>

<style lang="scss" scoped>
    .ms_container-flex{
        width: 100%;
        .ms_container{
            margin: 0 auto;
            text-align: center;
            max-width: 1300px;
        }
    }
    .ms_title{
        color: #CD4631;
        margin: 20px 0px;
        font-family: 'Lato', sans-serif;
    }
    .ms_text{
        color: #CD4631;
        margin: 20px 0px;
        font-family: 'Lato', sans-serif;
    }

    .ms_btn{
        font-family: 'Lato', sans-serif;
        font-weight: 900;
        color: #5C6EDA;
        padding: 6px 25px;
        margin-top: 10px;
        font-size: 20px;
        width: 200px;
        border: 0;
        background-color:#81ADC8;
        box-shadow: 0 2px 4px rgba(0, 0, 0, .1), 0 8px 16px rgba(0, 0, 0, .1);
        background-image: linear-gradient(#9E6240, #9E6240);
        background-position: 50% 50%;
        background-repeat: no-repeat;
        background-size: 0% 100%;
        transition: background-size .5s, color .5s;

        &:hover{
            background-size: 100% 100%;
            color: #5C6EDA;
        }
    }

    .ms_flex-start{
        display: flex;
        justify-content: flex-start;
        .ms_Vue-box{
            height: 150px;
            width: 500px;
            background-color: red ;
            background-image: linear-gradient(45deg, #654ea3, #eaafc8);
	        transform: skewY(-3deg);
        }
    }

    .ms_flex-end{
        display: flex;
        justify-content: flex-end;
        

        .ms_Laravel-box{
            height: 150px;
            width: 500px;
            background-color: red ;
            background-image: linear-gradient(45deg, #654ea3, #eaafc8);
	        transform: skewY(-3deg);
        }
    }
    
    
    
</style>
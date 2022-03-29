<template>
<div>
    <!-- Container sezione -->
    <div class="ms_container-flex">
        <div class="ms_container">
            <h1 class="  ms_title">Benvenuto Nella Mia Versione del CMS più famoso al mondo!</h1>
            <h3 class="ms_text">Progettato con Vue e Laravel</h3>
            <p class="ms_text">Progetto creato da Daniele Ficuciello studente classe 51 di Boolean </p>
            <h2>Framework usati </h2>
        </div>

    <!-- inizio Box dei Framwork usati -->
        <div class="ms_flex-start">
            <!-- Vue -->
            <a class="ms_Vue-box" href="https://vuejs.org/">
                <div class="ms_box-logo">
                    <img  class="ms_logo" :src="'/img/vue-logo.png'" alt="">
                    <h1>Vue</h1>
                </div>
            </a>

            <!-- Laravel -->
            <a class="ms_Laravel-box" href="https://laravel.com/">
                <div class="ms_box-logo">
                    <img class="ms_logo" :src="'/img/laravel-logo.png'" alt="">
                    <h1>Laravel</h1>
                </div>
            </a>

            <!-- Bootstrap -->
            <a class="ms_Bootstrap-box" href="https://getbootstrap.com/">
                <div class="ms_box-logo">
                    <img class="ms_logo" :src="'/img/bootstrap-logo.svg'" alt="">
                    <h1>Bootstrap</h1>
                </div>
            </a>
        </div>
    </div>
    
    <div class="ms_container">
        <div class="ms_box-button">
            <button class="ms_btn"><router-link :to="{name: 'post-home' }"><span>Leggi Post</span></router-link></button>
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
        margin: 50px 0px;
        font-family: 'Lato', sans-serif;
    }
    .ms_container{
            margin: 0 auto;
            text-align: center;
            max-width: 1300px;
        }
    .ms_title{
        color: #CD4631;
        margin: 20px 0px;
        animation:heartBeat 10s infinite;
        /* animation-duration: 1s ; */
    }
    .ms_text{
        color: #CD4631;
        margin: 20px 0px;
    }

    .ms_box-button{
        height: 250px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #F8F2DC;
    }
    .ms_btn{
        font-family: 'Lato', sans-serif;
        font-weight: 900;
        color: red;
        padding: 6px 25px;
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
        cursor: pointer;
        span {
            color: #F8F2DC;
        }
        &:hover{
            background-size: 100% 100%;
            color: #5C6EDA;
        }
    }

    .ms_flex-start{
        width: 100%;
        height: 150px;
        display: flex;
        margin-top: 50px;
        
        .ms_box-logo{
            text-align: center;
            width: 100%;
            transition: transform 1s;
            &:hover{
                transform: scale(1.2);
            }
            .ms_logo{
                width: 10%;
            }
        }
        .ms_Vue-box{
            display: flex;
            align-items: center;
            flex-direction: column;
            text-align: center;
            justify-content: center;
            cursor: pointer;
            background-color: #F8F2DC;
            color: #CD4631;
            width: calc(100% / 3 );
            height: 100%;
            transition: all 0.5s linear;
            
            &:hover {
                background-color: #CD4631;
                color: #F8F2DC;
            }
        }

        .ms_Laravel-box{
            display: flex;
            align-items: center;
            flex-direction: column;
            text-align: center;
            justify-content: center;
            cursor: pointer;
            background-color:#DEA47E;
            color: #F8F2DC;
            height: 100%;
            width: calc(100% / 3 );
            transition: all 0.5s linear;
            &:hover {
                background-color: #CD4631;
            }
        }

        .ms_Bootstrap-box{
        display: flex;
        align-items: center;
        flex-direction: column;
        text-align: center;
        justify-content: center;
        cursor: pointer;
        background-color: #F8F2DC;
        color: #CD4631;
        height: 100%;
        width: calc(100% / 3 );
        transition: all 0.5s linear;
            &:hover  {                
                background-color:  #CD4631;
                color: #F8F2DC;
            }
        }
    }
    
</style>
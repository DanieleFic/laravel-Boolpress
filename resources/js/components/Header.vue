<template>

    <div class="ms_container-flex">
        <div class="ms_container">
            <img class="ms_logo" :src="'/img/logo.png'" >
            <nav>
                <div class="ms_nav">
                    <router-link  :to="{ name: 'home' }">Home</router-link>
                    <router-link  :to="{ name: 'post-home' }">Posts</router-link>
                    <router-link  :to="{ name: 'about' }">Chi siamo</router-link>
                    <router-link  :to="{ name: 'contatti' }">Contatti</router-link>
                </div>
            </nav>
        </div>
    </div>
    
</template>

<script>
export default {
    name:"Header",
    data: function() {
        return{
            
        }
        
    }
}
</script>

<style lang="scss" scoped>
    .ms_container-flex{
        background-color: #DEA47E;
        width: 100%;
        .ms_container{
            margin: 0 auto;
            max-width: 1300px;
            height: 70px;
            display: flex;
            align-items: center;
            .ms_logo{
                width: 200px;
            }
            .ms_nav{
                font-family: 'Lato', sans-serif;
                font-weight: 900;
                color: #F8F2DC;
                margin-left: 500px ;
                a{
                    font-size: 25px;
                    text-decoration: none;
                    color: white;
                    margin: 0px 5px;
                    text-shadow: 0.5px 0.5px #CD4631;
                    &:hover{
                        color:#81ADC8 ;
                    }
                }
            }
        }
    }
</style>


<template>
    <div class="ms_container">
        <h1>404</h1>
        <h1>Pagina non trovata</h1>
        
        <router-link :to="{name: 'post-home' }"><button class="ms_btn"><span>Torna indietro</span> </button></router-link>
    </div>
</template>

<script>

export default {
    name:"PageNotFound",
    component:{
        
    }
}
</script>

<style lang="scss" scoped>

.ms_container{
    font-family: 'Lato', sans-serif;
    max-width: 1300px;
    margin: 0 auto;
    text-align: center;
    height: 430px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color: #9E6240;

    .ms_btn{
        font-family: 'Lato', sans-serif;
        font-weight: 900;
        color: #F8F2DC  ;
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
                
            }
        }
    }

</style>


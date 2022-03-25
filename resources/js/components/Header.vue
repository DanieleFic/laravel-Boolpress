<template>

    <div class="ms_containerflex">
        <div class="ms_container">
            <img class="ms_logo" :src="'/img/logo.png'" >
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
    .ms_containerflex{
        width: 100%;
        background-color: white;
        .ms_container{
            margin: 0 auto;
            max-width: 1300px;
            height: 70px;
            display: flex;
            align-items: center;
            .ms_logo{
                width: 200px;
            }
        }
    }
</style>


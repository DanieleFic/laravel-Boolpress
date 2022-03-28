<template>
<div>
    <div class="ms_container-flextop">
        <div class="ms_container">
            <div class="ms_prefooter">
                <h3>Nostri Partner</h3>
                <img class="ms_partner-logo" :src="'/img/partner-1.png'" >
                <img class="ms_partner-logo" :src="'/img/partner-2.png'" >
                <img class="ms_partner-logo" :src="'/img/partner-3.png'" >
                <img class="ms_partner-logo" :src="'/img/partner-4.png'" >
            </div>
        </div>
    </div>
    <div class="ms_container-flexbottom">
        <div class="ms_container">
            <div class="ms_container-ul">
                <ul class="ms_lista">
                    <p>SERVICE</p>
                    <li>lista</li>
                    <li>lista</li>
                    <li>lista</li>
                    <li>lista</li>
                    <li>lista</li>
                    <li>lista</li>
                </ul>
                <ul class="ms_lista">
                    <p>COMPANY</p>
                    <li>lista</li>
                    <li>lista</li>
                    <li>lista</li>
                    <li>lista</li>
                    <li>lista</li>
                    <li>lista</li>
                </ul>
                <ul class="ms_lista">
                    <p>RESOURCES</p>
                    <li>lista</li>
                    <li>lista</li>
                    <li>lista</li>
                    <li>lista</li>
                    <li>lista</li>
                    <li>lista</li>
                </ul>
                <ul class="ms_lista">
                    <p>RESOURCES</p>
                    <li>lista</li>
                    <li>lista</li>
                    <li>lista</li>
                    <li>lista</li>
                    <li>lista</li>
                    <li>lista</li>
                </ul>
            </div>
            <div class="ms_social">
                <img class="ms_logo" :src="'/img/logo.png'" >
                <h3>SOCIAL</h3>
                <i class="fa-brands fa-facebook"></i>
            </div>
        </div>
    </div>
</div>
    
        
    
</template>

<script>
export default {
    name:"Footer",
}
</script>

<style lang="scss" scoped>
    .ms_container-flextop{
        background-color: #81ADC8;
        width: 100%;
        .ms_container{
            margin: 0 auto;
            max-width: 1300px;
            height: 100%;
            .ms_prefooter{
                font-family: 'Lato', sans-serif;
                color: #F8F2DC;
                height: 100px;
                width: 100%;
                display: flex;
                flex-direction: row;
                align-items: center;
                justify-content: space-between;
                
                .ms_partner-logo{
                    width: 75px;
                }
            }
        }
    }

    .ms_container-flexbottom{
        background-color: #DEA47E;
        width: 100%;
        .ms_container{
        margin: 0 auto;
        max-width: 1300px;
        height: 100%;
        display: flex;
        flex-direction: row;
            .ms_container-ul{
                padding-top: 50px;
                display: flex;
                flex-direction: row;
            }
            .ms_lista{
                margin-right:130px;
                font-family: 'Lato', sans-serif;
                color: #F8F2DC;
                text-shadow: 0.3px 0.3px #CD4631;
                list-style-type:none;
                li{
                    margin: 10px 0px;
                    &:hover{
                        color: #81ADC8;
                    }
                }
            }
            .ms_social{
                padding-top: 50px;
                font-family: 'Lato', sans-serif;
                color: #F8F2DC;

                .ms_logo{
                    margin-bottom: 50px;
                }
                .bi{
                    width: 30px;
                }
            }
        }
    }
</style>
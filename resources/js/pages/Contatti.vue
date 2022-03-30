<template>
    <div class="ms_container">
        <div class="ms_contact">
            <h1>Contattaci</h1>
            <p>V2296 Little Street</p>
            <p>Wooster, Ohio</p>
            <p>Zip Code: 44691</p>
            <p>Email ciao@ciao.com</p>
            <p>Tel. 330-601-9559</p>
            <p>Phone number. 330-347-5811</p>
            <p>Fax. 32323-23232</p>
        </div>
        <GmapMap
        :center='center'
        :zoom='12'
        style='width:70%;  height: 400px;'
        />

    </div>
</template>

<script>

export default {
    name:"Contatti",
    data() {
        return {
            center: { lat: 40.365275, lng: -82.66938 },
        }
    },
    mounted() {
    this.geolocate();
    },
    methods: {
        geolocate: function() {
        navigator.geolocation.getCurrentPosition(position => {
            this.center = {
            lat: position.coords.latitude,
            lng: position.coords.longitude,
            };
        });
        },
    },
}
</script>

<style lang="scss" scoped>

    .ms_container{
        font-family: 'Lato', sans-serif;
        max-width: 1300px;
        margin: 0 auto;
        align-items: center;
        height: 430px;
        display: flex;
        justify-content: space-between;
        
        .ms_contact{
            display: flex;
            flex-direction: column;
            align-items: flex-start;

            h1{
                margin: 30px 0px;
                color: #CD4631 ;
            }
            p{
                margin: 5px 0px;
                color: #81ADC8;
            }
        }
    }

</style>
<template>

    <div class="ms_container-flex">
        <div class="ms_container">
            <h1>FAQ</h1>
            <div class="ms_faqbox">
                <div v-for="(question,index) in myFaq" :key="index" class="ms_question">
                    <h2 class="accordion" v-on:click="(attivaDomanda(index)) && (isActive = !isActive)" :class="{ active: isActive == index }">{{question.title}}</h2>
                    <div class="panel" v-show='isActive == index'>A:{{question.value}}</div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
import VueFaqAccordion from 'vue-faq-accordion'

export default {
    name:"About",

    components: {
        VueFaqAccordion
    },
    
    data () {
        return {
            isActive:0,
        myFaq: [
            {
                title: 'How many time zones are there in all?',
                value: 'Given a 24-hour day and 360 degrees of longitude around the Earth',
            },
            {
                title: 'How long is a day and year on Venus?',
                value: 'Venus takes 224.7 Earth days to complete one orbit around the Sun.',
            },
            {
                title: 'What animal smells like popcorn?',
                value: 'Binturongs smell like popcorn.',
            },
            {
                title: 'What animal smells like popcorn?',
                value: 'Binturongs smell like popcorn.',
            },
            {
                title: 'What animal smells like popcorn?',
                value: 'Binturongs smell like popcorn.',
            },
            {
                title: 'What animal smells like popcorn?',
                value: 'Binturongs smell like popcorn.',
            },
            {
                title: 'What animal smells like popcorn?',
                value: 'Binturongs smell like popcorn.',
            },
            ]
        }
    },
    mounted(){
        console.log(this.myFaq)
    },
    methods:{
        attivaDomanda: function( index ) {
        this.isActive = this.isActive === index ? null : index;
        console.log("metodo attivaDomanda")
        }
    }
}
</script>

<style lang="scss" scoped>
    .ms_container-flex{
        font-family: 'Lato', sans-serif;
        display: flex;
        align-items: center;
        margin: 15px 0px;
        
    }
    .ms_container{
        margin: 0 auto;
        max-width: 1300px;
        
        h1{
            text-align: center;
            margin: 15px 0px;
            color: #9E6240;
        }
    }

    .active{
        color: #CD4631;
    }

    .ms_faqbox{
        font-family: 'Lato', sans-serif;
        width: 700px;
        background-color:rgba($color: #81ADC8, $alpha: 0.3) ;
        .ms_question{
            width: 100%;
            height: 150px;
            border-bottom: 2px solid #CD4631;
            overflow-x:hidden;
            h1{
                margin: 15px;
            }
            p{
                color:#9E6240;
                margin: 10px;
            }
        }
    }
    .accordion {
        font-family: 'Lato', sans-serif;
        background-color: #F8F2DC;
        height: 50px;
        color: #CD4631;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 15px;
        transition: 0.4s;
}
.panel {
    height: calc(100% - 50px);
    padding: 18px 18px;
    background-color: #DEA47E;
    overflow: hidden;
}

</style>
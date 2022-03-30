<template>

    <div class="ms_container-flex">
        <div class="ms_container">
            <h1>FAQ</h1>
            <!-- container della comanda -->
            <div class="ms_faqbox">
                <!-- ciclo for per ciclare le domande nei data -->
                <div  v-for="(question,index) in myFaq" :key="index" class="ms_question">
                    <div class="accordion ms_flex"   >
                        <h4>{{question.title}}</h4>
                        <!-- icon per aprire e chiudere domanda -->
                        <i v-on:click="(attivaDomanda(index)) && (isActive = !isActive)" v-if="activeIndex === index"  class="fa-solid fa-chevron-down"></i>
                        <i v-else v-on:click="(attivaDomanda(index)) && (isActive = !isActive)" class="fa-solid fa-chevron-up"></i>
                    </div>
                    <!-- div con risposta -->
                    <div class="panel" :class="{ active: isActive == index }" v-show='isActive == index'>
                        A:{{question.value}}
                    </div>
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
            isActive:null,
            activeIndex:null,
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
                title: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic, voluptates blanditiis rerum quod, facere veritatis molestiae eum, asperiores quas eaque nihil totam repudiandae facilis libero nisi sed optio eos voluptate?',
                value: 'Binturongs smell like popcorn.',
            },
            {
                title: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.?',
                value: 'Binturongs smell like popcorn.',
            },
            {
                title: 'Venus takes 224.7 Earth days to complete one orbit around the Sun?',
                value: 'Yes',
            },
            {
                title: 'voluptates blanditiis rerum quod, facere veritatis molestiae eum?',
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
        /* metodo per attivare la domanda  */
        attivaDomanda: function( index ) {
        this.isActive = this.isActive === index ? null : index;
        this.activeIndex = this.activeIndex !== index ? index : null;
    
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


    .ms_faqbox{
        font-family: 'Lato', sans-serif;
        width: 700px;
        background-color:rgba($color: #81ADC8, $alpha: 0.3);
        .ms_flex{
            width: 100%;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            .fa-chevron-up{
            color: #CD4631;
            cursor: pointer;
        }
            .fa-chevron-down{
            color: #81ADC8;
            cursor: pointer;
        }
        }
        .ms_question{
            width: 100%;
            /* height: 150px; */
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
        color: #CD4631;
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
    color: #F8F2DC;
    padding: 18px 18px;
    background-color: #81ADC8;
    overflow: hidden;
    
}

.active{
    animation: fade 2s;
}
@keyframes fade {
    0% {
        opacity: 0;
    }

    50%{
        opacity: 0.5;
    }

    100% {
        opacity: 1;
    }
}

</style>
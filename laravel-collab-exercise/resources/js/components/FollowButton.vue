<template>
    <div>
        <button class="btn btn-primary ms-5 px-3" @click="followThisUser" v-text="buttonText"></button> 
    </div>


</template>

<script>
import axios from 'axios';

    export default {
         
       props:['userId','follows'],

        mounted() {
            console.log('Component mounted.')
        }, 

        data: function (){
            return {
                status: this.follows,
            }
        },

        methods:{
            followThisUser(){
                //  alert('testFollow');
                axios.post('/follow/' + this.userId)
                     .then(response => {
                        // alert(response.data);
                        console.log(response.data);
                 });
            }
        }, 
        computed: {
            buttonText(){
                return(this.status) ? 'Unfollow' : 'Follow';
            } // end of buttonText method
        } // end of computed object
    }    
</script>

<template>
    <!-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div>
        <button class="btn btn-primary ms-5 px-3" @click="followThisUser">Follow</button> 
    </div>


</template>

<script>
import axios from 'axios';

    export default {
         
      

        mounted() {
            console.log('Component mounted.')
        }, 
        methods:{
            followThisUser(){
                 alert('testFollow');
                // axios.post('/follow/1')
                //     .then(response => {
                //         alert(response.data);
                // });
            }
        }
    }    
</script>

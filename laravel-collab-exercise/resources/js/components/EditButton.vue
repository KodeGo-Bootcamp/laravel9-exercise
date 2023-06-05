<template>
    <div class="container">
        <a class="btn btn-primary" href="/profile/{{$user->id}}/edit" @click="editUser">Edit Profile</a>
    </div>
</template>

<script>
import axios from 'axios';

    export default {
        props:['userId'],
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            
            editUser(){
                axios.get(`/profile/ ${this.userId}/edit`).then(response =>{
                    alert(response.data);
                     
                }); // end of axios          
             }// end of edit user
        }// end of methods
            // followThisUser(){
            //     //  alert('testFollow');
            //     axios.post('/follow/' + this.userId)
            //          .then(response => {
            //             alert(response.data);
            //      });
            // }
                
            }
    
</script>

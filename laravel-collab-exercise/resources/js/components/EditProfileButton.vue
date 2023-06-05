<template>
    <div>
        <a 
            :href="getEditThisProfile" 
            class="pl-3 btn btn-primary"
        >
            Edit Profile
        </a>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log("edit-profile component mounted");
    },
    props: ["userId"],
    computed: {
        getEditThisProfile() {
            return `/profile/${this.userId}/edit`;
        },
    },
};
</script>

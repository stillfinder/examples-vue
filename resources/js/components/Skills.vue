<template>
    <div>
        <ul class="mb-2">
            <li v-for="skill in skills" v-text="skill"></li>
        </ul>
        <button class="button" @click="loadSkills">Load skills using Ajax</button>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                skills: []
            }
        },

        methods: {
            loadSkills() {
                axios.get('skills').then(response => this.skills = response.data)
            }
        }
    }
</script>

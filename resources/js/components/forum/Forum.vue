<template>
    <v-container>
        <v-layout>
            <v-flex xs8>
                <question
                v-for="question in questions"
                :key="question.path"
                :data=question
                >

                </question>
            </v-flex>
                Sidebar
        </v-layout>
    </v-container>
</template>

<script>
import question from './Question'
export default {
    data(){
        return {
            questions:{}
        }
    },
    components:{question},
    created(){
        axios.get('/api/question')
        .then(res => this.questions = res.data.data)
        .catch(error => console.log(error.response.data))
    }
}
</script>

<style>

</style>

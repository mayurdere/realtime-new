<template>
    <v-container fluid>
        <v-card>
        <v-form>
            <v-text-field
                v-model="form.title"
                label="Title"
                type="text"
                required
                >
            </v-text-field>
            
            <markdown-editor v-model="form.body"></markdown-editor>

            <v-card-actions>
                <v-btn icon small>
                    <v-icon color="teal">    
                        save
                    </v-icon>
                </v-btn>

                <v-btn icon small>
                    <v-icon color="black">    
                        cancel
                    </v-icon>
                </v-btn>
            </v-card-actions>

        </v-form>
        </v-card>
    </v-container>
</template>

<script>
export default {
    data(){
        return{
            form: {
                title: null,
                body: null
            }
        }
    }
}
</script>

<style>

</style>

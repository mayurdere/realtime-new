<template>
  <form>
   
   <v-container>
    <v-text-field
      v-model="form.email"
      label="E-mail"
      type="email"
      required
    ></v-text-field>
     <v-text-field
      v-model="form.password"
      type="password"
      label="Password"
      required
    ></v-text-field>

    <v-btn color="green" type="submit">submit</v-btn>
    <v-btn type="clear">clear</v-btn>
   </v-container>
  </form>
</template>

<script>
export default {
    data(){
        return{
            form :{
                email:null,
                password:null
            }
        }
    }
}
</script>

<style>

</style>

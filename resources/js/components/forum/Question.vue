<template>
      <v-card>
        <v-card-title primary-title>
          <div>
            <h3 class="headline mb-0">
                <router-link :to="data.path">
                    {{data.title}}
                </router-link>
            </h3>
            <div class="grey--text">
                {{data.user}} said {{data.created_at}}
                </div>
          </div>
        </v-card-title>
        <v-card-text>
            {{data.body}}
        </v-card-text>
      </v-card>
</template>

<script>
export default {
    props:['data'] //data passed to the forum.vue's <question> tag (props means Question.vue s child and Forum.vue is parent)
}
</script>

<style>

</style>

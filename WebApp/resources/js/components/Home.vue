<template>
    <div>
        <head>
            <title>Hello home page</title>
        </head>
        <div>
            <h2>Home</h2>
            <h1>Hello WOrld<h1>
        </div>
    </div>
</template>

<script>
export default {
    components: Home,
    mounted() {             
         console.log('mounted!')         
      }, 

}

</script>

<style scoped>

</style>
<template>
    <Layout>
        <h1>{{ title }}</h1>
        <div>{{ description }}</div>
    </Layout>
</template>

<script>
import Layout from '../Components/Layout.vue'
export default {
    components: { Layout },
    props: {
        status: Number,
    },
    computed: {
        title() {
            return {
                503: 'Service unavailable',
                500: 'Server error',
                404: 'Page not found',
                403: 'Forbidden',
            }[this.status]
        },
        description() {
            return {
                503: this.__('Sorry, we are doing some maintenance. Please check back soon.'),
                500: this.__('Whoops, something went wrong on our servers.'),
                404: this.__('Sorry, the page you are looking for could not be found.'),
                403: this.__('Sorry, you are forbidden from accessing this page.'),
            }[this.status]
        },
    },
}
</script>

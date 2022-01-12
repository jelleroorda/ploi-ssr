<template>
    <Head>
        <title>{{ pageTitle }}</title>
    </Head>

    <main class="flex flex-col min-h-screen px-6">
        <article class="flex-grow-1 py-3">
            <div class="mx-auto max-w-md md:max-w-4xl xl:max-w-7xl">
                <FlashMessage class="mb-4"/>

                <h1 v-if="!hideTitle" class="mb-4" lang="en">Title</h1>

                <slot/>
            </div>
        </article>
    </main>
</template>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3'
import { Inertia } from '@inertiajs/inertia'

import FlashMessage from './FlashMessage.vue'

export default {
    components: {
        FlashMessage,
        Head,
        Link,
    },

    props: {
        hideTitle: {
            type: Boolean,
            default: false,
        },
    },

    computed: {
        pageTitle() {
            const title = 'Your Website'
            const pageTitle = this.$page.props.title

            if (!pageTitle) {
                return title
            }

            return `${pageTitle} | ${title}`
        }
    },

    watch: {
        '$page.props.locale': function (locale, oldLocale) {
            if (locale === oldLocale) {
                return
            }

            document.documentElement.lang = locale
        }
    },
}
</script>

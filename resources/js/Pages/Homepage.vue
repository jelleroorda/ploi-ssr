<template>
    <layout hide-title hide-nav>
        <div class="relative pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8" lang="en">
            <div class="relative max-w-7xl mx-auto">
                <div class="text-center">
                    <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">
                        Title
                    </h2>
                    <p class="mt-3 max-w-3xl mx-auto text-xl text-gray-500 sm:mt-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>

                    <p class="mt-3 max-w-3xl mx-auto text-xl text-gray-500 sm:mt-4">
                        {{ __('Translations are not working.') }}
                    </p>

                    <Link href="/background-information" class="block mt-4 text-sm text-blue-600 hover:text-blue-800">
                        Read more about the background information.
                    </Link>
                </div>
            </div>
        </div>
    </layout>
</template>

<script>
import Layout from '../Components/Layout.vue'
import { Link } from '@inertiajs/inertia-vue3'

export default {
    components: { Layout, Link }
}
</script>

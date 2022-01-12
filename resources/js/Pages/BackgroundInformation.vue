<template>
    <Layout hide-title hide-nav>
        <div class="background-information relative mx-auto py-16 px-4 sm:px-6 lg:px-8 max-w-3xl">
            <div class="relative max-w-7xl mx-auto" lang="en">
                <Link href="/" style="text-decoration: none;">&leftarrow; Back to the homepage</Link>
                <h2 class="mt-3 text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">
                    Title
                </h2>
                <h3 class="mt-4 text-xl">Background</h3>
                <p class="text-gray-700 mt-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p class="text-gray-700 mt-3">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                </p>
            </div>

            <div class="relative max-w-7xl mx-auto">
                <h3 class="mt-6 text-xl">Publications</h3>
                <ol class="mt-2 text-gray-700 list-decimal list-inside space-y-2">
                    <li>
                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
                    </li>
                    <li>
                        Vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.
                    </li>
                    <li>
                        Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                    </li>
                </ol>
            </div>
        </div>
    </Layout>
</template>

<script>
import Layout from '../Components/Layout.vue'
import { Link } from '@inertiajs/inertia-vue3'

export default {
    components: { Layout, Link }
}
</script>

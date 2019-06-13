<script>
    export default {
        template: `
        <div>
            <div class="flex flex-col relative" v-show="visible">
                <div class="border bg-gray-300 px-2 py-1">{{ title }}</div>
                <div class="border px-2 py-1">{{ body }}</div>
                <button class="absolute top-0 right-0 py-1 pr-4" @click="visible=false">x</button>
            </div>
        </div>
        `,

        data() {
            return {
                visible: true,
            }
        },

        props: ['title', 'body'],
    }
</script>
<script>
    export default {
        template: `
            <div>
                <task v-for="task in tasks">{{ task.description }}</task>
            </div>
        `,

        data() {
            return {
                tasks: [
                    { description: 'Learn Vue', completed: false },
                    { description: 'Make eStore', completed: true },
                    { description: 'Write article', completed: true },
                ]
            }
        }
    }
</script>
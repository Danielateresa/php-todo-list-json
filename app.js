const { createApp } = Vue;
createApp({
    data() {
        return {
            elements: [],
            url: 'server.php'
        }
    },
    methods: {
        readElement(url) {
            axios.get(url)
                .then(response => {
                    console.log(response.data);
                    this.elements = response.data;
                })
                .catch(err => {
                    console.log(err.message);
                })
        }
    },
    mounted() {

        this.readElement(this.url);
    }
}).mount('#app');
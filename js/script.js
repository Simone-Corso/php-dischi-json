const { createApp } = Vue;

createApp({
    data() {
        return {
            serverUrl: './api/api.php',
            discsInfos : [],
            discsInfosActiveIndex: 0,
        }
    },

    methods: {
        getDiscsInfos() {
            axios.get(this.serverUrl)
                .then(response => {
                    this.discsInfos =response.data;
                })
                .catch(err => {
                    console.log(err);
                })
        },
      },

    created() {
        this.getDiscsInfos()
    }
}).mount('#app')

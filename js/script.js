const { createApp } = Vue

createApp({
    data() {
        return{
            apriUrl: './api.php',
            albumList:[],
        }
    },
    methods: {
        getAlbumList() {
            axios.get(this.apriUrl).then((response)=> {
                this.albumList = response.data;
                console.log(response.data);
            })
        }
    },

    created(){
        this.getAlbumList();
    }
}).mount('#app')
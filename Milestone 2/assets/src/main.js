let app = new Vue ({
    el: '#app',
    data: {
        albumList: []
    },
    mounted(){				
        axios.get("http://localhost:8088/php-ajax-dischi/Milestone%202/assets/partials/data.php")
        .then(response => {
            const albums = response.data;
            console.log(albums);
            for (let i = 0; i < albums.length; i++) {
                this.albumList.push(albums[i]);
            }
            console.log(this.albumList);
        });	
        
    }
})
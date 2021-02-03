let app = new Vue ({
    el: '#app',
    data: {
        albumList: []
    },
    methods: {
        
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
        
        const container = document.querySelector('.albums');
        const select = document.getElementById('filter');
        select.addEventListener('change', event => {
            const scelta = select.options[select.selectedIndex].value;
            console.log(scelta);
            const albumFilter = this.albumList.filter(element => element.author == scelta);
            console.log(albumFilter);
            if (scelta == "") {
                container.innerHTML = '';
                arrayFilter(this.albumList, container)
            } else {
                container.innerHTML = '';
                arrayFilter(albumFilter, container)
            }
        })

        function arrayFilter(array, selector) {
            array.forEach(element => {
                const {poster, title, author, year} = element;
                selector.innerHTML += `<div class="album">
                <img src="${poster}" alt="">
                <h3>${title}</h3>
                <p>${author}</p>
                <p>${year}</p>
                </div>`
            })
        }
    }
})
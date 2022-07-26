var app = new Vue(
    {
        el:'#root',
        data:{
            database:[]
        },
        //funzione che compie la chimata api
        methods:{
            getDatabaseApi(){
                axios.get('http://localhost:8888/php-ajax-dischi/api.php')
                .then((response) => {
                    this.database = response.data;
                });
            }
        },
        //Quando avviene la chiamata al caricamento
        mounted(){
            this.getDatabaseApi();
        }
    }
);
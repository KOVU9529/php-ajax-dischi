var app = new Vue(
    {
        el:'#root',
        data:{
            database:[],
            //valore di default v-model
            userGender:'all'
        },
        //funzione che compie la chimata api
        methods:{
            getDatabaseApi(){
                axios.get('http://localhost:8888/php-ajax-dischi/api.php',
                //introduco il nuovo parametro
                {
                    params:
                    {
                        //riporto il valore v-model
                        genre:this.userGender
                    }
                }
                )
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

  const { createApp } = Vue

  createApp({
    data() {
      return {
        myList:null,
        apiUrl:"server.php",
        appari:false
      }
    },
    mounted() {
        this.requestDischi()
    },
    methods: {
        requestDischi(){
            
            axios.get(this.apiUrl).then((res)=>{

                this.myList=res.data
                console.log(this.myList)

            })
        },
        listasingola(index){

        }
        
    },
  }).mount('#app')

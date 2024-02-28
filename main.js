
  const { createApp } = Vue

  createApp({
    data() {
      return {
        myList:null,
        apiUrl:"server.php",
        appari:false,
        singola:null
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
            axios.get("newserver.php",{params:{inde: index}}).then((res) => {
                this.singola=res.data
                console.log(res.data)
                this.appari=true
})
        }
        
    },
  }).mount('#app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Dischi</title>
    
</head>
<body class="vh-100" style="background-color: #1D2D3C;">
    
    <div id="app">
       
        <div class="container-fluid position-relative ">
            
            <div class="container">
                <div class="row row-cols-3 g-5" >

                    <div class="col" v-for="(element,index) in myList" @click="listasingola(index)"  >
                        <div class="p-3" style="background-color: #112030; cursor: pointer;" >
                            <figure class="p-5">

                                <img class="card-img-top" :src="element.poster" alt="">
                            </figure>
                            <p class="text-light text-center">{{element.title}}</p>
                            <p class="text-light text-center">{{element.author}}</p>
                            <p class="text-light text-center">{{element.year}}</p>
                        </div>


                        
                        
                        
                    </div>
                    

                </div>
            </div>


            <div v-if="appari==true" class="position-absolute d-flex justify-content-center align-items-center"  style="width: 100%;height: 104vh; position: fixed; background-color: rgba(0, 0, 255, 0.535); top: 0;left: 0;">
                        <div class="w-25">  
                            <figure class="p-5 w-100 d-flex justify-content-center" >
                                <img class="w-50" :src="singola.poster" alt="a">
                            </figure>
                            <div class="d-flex flex-column">
                                <span class="text-center text-light h1">{{singola.title}}</span>
                                <span class="text-center text-light fs-7">{{singola.author}}</span>
                                <span class="text-center text-light h3">{{singola.year}}</span>

                            </div>
                            
                        </div>
            </div>

        </div>
        
    </div>





<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="main.js"></script>
</body>
</html>
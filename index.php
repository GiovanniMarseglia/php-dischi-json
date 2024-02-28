<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Dischi</title>
    
</head>
<body  style="background-color: #1D2D3C; height: 100vh;">
    
    <div id="app">
       
        <div class="container-fluid position-relative h-100">
            
            <div class="container">
                <div class="row row-cols-3 g-3 pt-4" >

                    <div class="col px-2" v-for="(element,index) in myList" @click="listasingola(index)"  >
                        <div class="py-2" style="background-color: #112030; cursor: pointer; border-radius: 10px;" >
                            <figure class="pt-2 d-flex justify-content-center ">

                                <img width="200px" :src="element.poster" alt="">
                            </figure>
                            <p class="text-light text-center">{{element.title}}</p>
                            <p class="text-light text-center">{{element.author}}</p>
                            <p class="text-light text-center">{{element.year}}</p>
                        </div>


                        
                        
                        
                    </div>
                    

                </div>
            </div>


            <div v-if="appari==true" class="position-absolute d-flex justify-content-center align-items-center overflow-hidden"  style="width: 100%;height: 100vh; position: fixed; background-color: #112031ce; top: 0;left: 0;">
                        
                        <div class="w-25 position-relative">  
                            <figure class="p-5 w-100 d-flex justify-content-center" >
                                <img class="w-100" :src="singola.poster" alt="a">
                            </figure>
                            <div class="d-flex flex-column">
                                <span class="text-center text-light h1">{{singola.title}}</span>
                                <span class="text-center text-light fs-7">{{singola.author}}</span>
                                <span class="text-center text-light h3">{{singola.year}}</span>

                            </div>


                            <div class="position-absolute z-3" @click="appari=false" style="cursor: pointer; top: 31px; right: 30px;">
                                <svg style="width: 35px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ff2929" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM175 175c9.4-9.4 24.6-9.4 33.9 0l47 47 47-47c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-47 47 47 47c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-47-47-47 47c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l47-47-47-47c-9.4-9.4-9.4-24.6 0-33.9z"/></svg>
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
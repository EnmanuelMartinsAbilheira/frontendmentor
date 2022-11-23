<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>I Am The justice, I Am The Dark In The Nigth, I Am Enmanuel </title>

        @vite('resources/js/app.js')


    </head>

    <body class="mx-4 sm:mx-12">


    <!-- 
        comienza navbar
    -->

        <!--navbar con hamburguer menu-->
        <section class="relative bg-white " >
            
            <div class="flex items-center justify-between h-24 px-8 mx-auto max-w-7xl">

                <a href="#_" class="block"><svg width="65" height="40" xmlns="http://www.w3.org/2000/svg"><path d="M23.016 39.2c.317 0 .574-.093.77-.28.196-.187.294-.457.294-.812v-1.82c0-.448.033-.84.098-1.176.065-.336.145-.663.238-.98l5.09-18.122 4.822 18.57c.112.384.193.682.243.895l.023.099c.047.215.07.453.07.714v1.82c0 .355.098.625.294.812.196.187.453.28.77.28h10.696c.299 0 .55-.093.756-.28.205-.187.308-.457.308-.812v-1.82c0-.373.023-.705.07-.994.047-.29.135-.677.266-1.162L54.04 7.224c.299-1.25.765-2.254 1.4-3.01.635-.756 1.363-1.311 2.184-1.666l.672-.308c.336-.168.574-.331.714-.49.14-.159.21-.369.21-.63 0-.336-.117-.607-.35-.812C58.637.103 58.287 0 57.82 0h-8.904c-.467 0-.817.103-1.05.308-.233.205-.35.476-.35.812 0 .261.06.471.182.63.121.159.313.303.574.434l.616.224c1.12.41 1.871.999 2.254 1.764s.453 1.661.21 2.688l-5.535 23.486-6.477-25.81c-.133-.58-.17-1.018-.11-1.31l.026-.104c.093-.29.317-.49.672-.602l1.232-.336c.299-.112.518-.257.658-.434a.986.986 0 0 0 .21-.63c0-.355-.112-.63-.336-.826C41.468.098 41.122 0 40.656 0H24.78c-.448 0-.789.098-1.022.294-.233.196-.35.471-.35.826 0 .224.06.415.182.574.121.159.322.294.602.406l1.176.42c.261.093.462.243.602.448.14.205.294.607.462 1.204l1.751 6.742-5.553 19.475L16.128 4.48c-.147-.49-.194-.898-.14-1.223l.028-.135c.093-.345.327-.574.7-.686l1.456-.336c.504-.168.756-.504.756-1.008 0-.336-.112-.602-.336-.798C18.368.098 18.022 0 17.556 0H1.344C.896 0 .56.098.336.294.112.49 0 .756 0 1.092c0 .224.056.434.168.63.112.196.29.35.532.462l1.232.392c.355.13.625.308.812.532.187.224.345.579.476 1.064l7.84 30.408c.112.43.191.751.238.966.047.215.07.462.07.742v1.82c0 .355.103.625.308.812.205.187.467.28.784.28h10.556Zm34.804.7c1.195 0 2.263-.29 3.206-.868a6.338 6.338 0 0 0 2.24-2.338c.55-.98.826-2.04.826-3.178 0-1.157-.275-2.212-.826-3.164a6.325 6.325 0 0 0-2.24-2.282c-.943-.57-2.011-.854-3.206-.854-1.157 0-2.207.285-3.15.854a6.325 6.325 0 0 0-2.24 2.282c-.55.952-.826 2.007-.826 3.164 0 1.139.275 2.198.826 3.178.55.98 1.297 1.76 2.24 2.338.943.579 1.993.868 3.15.868Z" fill="#00001A"/></svg></a>

                
                <!---->

                
  
                <div class="">
                    <a class="w3-button w3-hide-medium w3-hide-large w3-right"  onclick="myFunction()" > <i class="fa fa-terminal fa-2x"></i> <i class="fa fa-laptop fa-2x"></i> <i class="fa fa-user-secret fa-2x"></i> </a>
                    <a href="#Home" class="w3-bar-item w3-button  w3-hide-small">Home</a>
                    <a href="#New" class="w3-bar-item w3-button  w3-hide-small">New</a>
                    <a href="#Popular" class="w3-bar-item w3-button  w3-hide-small">Popular</a>
                    <a href="#Trending" class="w3-bar-item w3-button  w3-hide-small">Trending</a>
                    <a href="#Categories" class="w3-bar-item w3-button  w3-hide-small">Categories</a>
                    </div>

                <!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
                <div id="navDemo" class="bg-white w3-center w3-bar-block w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:60px">
                    <a href="#Home" class="w3-bar-item w3-button " onclick="myFunction()">Home</a>
                    <a href="#New" class="w3-bar-item w3-button " onclick="myFunction()">New</a>
                    <a href="#Popular" class="w3-bar-item w3-button " onclick="myFunction()">Popular</a>
                    <a href="#Trending" class="w3-bar-item w3-button " onclick="myFunction()">Trending</a>
                    <a href="#Categories" class="w3-bar-item w3-button " onclick="myFunction()">Categories</a>
                    </div>

                <!---->

            </div>

        </section>

        <!-- termina navbar -->

        <!-- 
            comianza header aqui
        -->

        <!--Header adactativo-->
        <section class="md:flex md:flex-row  md:justify-center">
            
            <div class="md:flex md:flex-col md:w-[60%] m-4">

                <img class="w-full" src="https://tenerifejovenyeduca.com/wp-content/uploads/2022/09/slider-proyecto-proyecta-mates01.webp" >
                
                <div class="lg:flex  mt-4">
                    <div class="w-full lg:w-[60%] text-6xl font-light">
                        <h2>The Bright Future of Web 3.0?</h2>
                    </div>

                    <div class="flex flex-col m-4 lg:m-1 lg:w-[50%]">
                        <h2 class="text-lg text-slate-500">We dive into the next evolution of the web that claims to put the power of the platforms back into the hands of the people. But is it really fulfilling its promise?</h2>
                        
                        <button class="bg-red-500 p-4 text-slate-100 ">Read More</button>

                    </div>
                </div>
                
            </div>
            
            <div class="mx-8 flex flex-row justify-center items-center md:flex md:items-start md:w-[30%] bg-black md:bg-white">
                <div class="md:flex md:items-start p-4 bg-black">

                    <div class="w-full ml-auto ">

                        <div class="mt-4">
                            <h2 class="text-6xl text-yellow-500">New</h2>
                        </div>

                        <div class="mt-8 text-white">
                            <h2 class="text-2xl">Hydrogen VS Electric Cars</h2>
                            <h3 class="text-base text-slate-400">Will hydrogen-fueled cars ever catch up to EVs?</h3>
                        </div>

                        <div class="mt-8 text-white">
                            <h2 class="text-2xl">The Downsides of AI Artistry</h2>
                            <h3 class="text-base text-slate-400"> What are the possible adverse effects of on-demand AI image generation?</h3>
                        </div>

                        <div class="mt-8 text-white">
                            <h2 class="text-2xl">Is VC Funding Drying Up?</h2>
                            <h3 class="text-base text-slate-400">  Private funding by VC firms is down 50% YOY. We take a look at what that means.</h3>
                        </div>

                        <div class="mt-8 text-white">
                            <h2 class="text-2xl">Is VC Funding Drying Up?</h2>
                            <h3 class="text-base text-slate-400">  Private funding by VC firms is down 50% YOY. We take a look at what that means.</h3>
                        </div>

                        <div class="mt-8 text-white">
                            <h2 class="text-2xl">Hydrogen VS Electric Cars</h2>
                            <h3 class="text-base text-slate-400">Will hydrogen-fueled cars ever catch up to EVs?</h3>
                        </div>

                    </div>

                </div>
            </div>


        </section>

        <section class="mt-4 w-full h-auto ">
            <div class="">
                
                <div class="flex grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 "> 
                    
                    <div class="pb-4 flex h-36 ">
                        <div class="flex">
                            <img class="my-22 mx-10" src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcR4If9T0HpmiYJdIPRrylxiD7G9Omag8ZAF7gmh5GQz5TwfZwR1">
                        </div>

                        <div class="md:ml-10">
                            <div class="text-2xl text-slate-700">01</div>
                            <div class="flex font-bold text-lg uppercase ">Reviving Retro PCs</div>
                            <div class="flex text-sm">What happens when old PCs are given modern upgrades?</div>
                        </div>
                        
                    </div>
                    
                    <div class="pb-4 flex h-36 ">
                        <div class="flex">
                            <img class="my-22 mx-10" src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRYswvISoTrePxF1BcMeR06FyYuxDkiEqFJ7hTGs8kMjWjzl_27">
                        </div>
                        
                        <div class="md:ml-10">
                            <div class="text-2xl text-slate-700">02</div>
                            <div class="flex font-bold text-lg uppercase ">Top 10 Laptops of 2022</div>
                            <div class="flex text-sm">Our best picks for various needs and budgets.</div>
                        </div>

                    </div>

                    <div class="pb-4 flex h-36 ">
                        <div class="flex">
                            <img class="my-22 mx-10" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQS8NTCGlGzZnrBU-dPqkR-oxlSBeyJg4uO9rQaVjLh9UUHYUhS">
                        </div>
                        
                        <div class="md:ml-10">
                            <div class="text-2xl text-slate-700">03</div>
                            <div class="flex font-bold text-sm uppercase ">The Growth of Gaming</div>
                            <div class="flex text-sm">How the pandemic has sparked fresh opportunities.</div>
                        </div>

                    </div>
                   
                    <div class="pb-4 flex h-36 ">
                        <div class="flex">
                            <img class="my-22 mx-10" src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcR4If9T0HpmiYJdIPRrylxiD7G9Omag8ZAF7gmh5GQz5TwfZwR1">
                        </div>

                        <div class="md:ml-10">
                            <div class="text-2xl text-slate-700">01</div>
                            <div class="flex font-bold text-lg uppercase ">Reviving Retro PCs</div>
                            <div class="flex text-sm">What happens when old PCs are given modern upgrades?</div>
                        </div>
                        
                    </div>
                    
                    <div class="pb-4 flex h-36 ">
                        <div class="flex">
                            <img class="my-22 mx-10" src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRYswvISoTrePxF1BcMeR06FyYuxDkiEqFJ7hTGs8kMjWjzl_27">
                        </div>
                        
                        <div class="md:ml-10">
                            <div class="text-2xl text-slate-700">02</div>
                            <div class="flex font-bold text-lg uppercase ">Top 10 Laptops of 2022</div>
                            <div class="flex text-sm">Our best picks for various needs and budgets.</div>
                        </div>

                    </div>

                    <div class="pb-4 flex h-36 ">
                        <div class="flex">
                            <img class="my-22 mx-10" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQS8NTCGlGzZnrBU-dPqkR-oxlSBeyJg4uO9rQaVjLh9UUHYUhS">
                        </div>
                        
                        <div class="md:ml-10">
                            <div class="text-2xl text-slate-700">03</div>
                            <div class="flex font-bold text-sm uppercase ">The Growth of Gaming</div>
                            <div class="flex text-sm">How the pandemic has sparked fresh opportunities.</div>
                        </div>

                    </div>
                   
                    <div class="pb-4 flex h-36 ">
                        <div class="flex">
                            <img class="my-22 mx-10" src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcR4If9T0HpmiYJdIPRrylxiD7G9Omag8ZAF7gmh5GQz5TwfZwR1">
                        </div>

                        <div class="md:ml-10">
                            <div class="text-2xl text-slate-700">01</div>
                            <div class="flex font-bold text-lg uppercase ">Reviving Retro PCs</div>
                            <div class="flex text-sm">What happens when old PCs are given modern upgrades?</div>
                        </div>
                        
                    </div>
                    
                    <div class="pb-4 flex h-36 ">
                        <div class="flex">
                            <img class="my-22 mx-10" src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRYswvISoTrePxF1BcMeR06FyYuxDkiEqFJ7hTGs8kMjWjzl_27">
                        </div>
                        
                        <div class="md:ml-10">
                            <div class="text-2xl text-slate-700">02</div>
                            <div class="flex font-bold text-lg uppercase ">Top 10 Laptops of 2022</div>
                            <div class="flex text-sm">Our best picks for various needs and budgets.</div>
                        </div>

                    </div>

                    <div class="pb-4 flex h-36 ">
                        <div class="flex">
                            <img class="my-22 mx-10" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQS8NTCGlGzZnrBU-dPqkR-oxlSBeyJg4uO9rQaVjLh9UUHYUhS">
                        </div>
                        
                        <div class="md:ml-10">
                            <div class="text-2xl text-slate-700">03</div>
                            <div class="flex font-bold text-sm uppercase ">The Growth of Gaming</div>
                            <div class="flex text-sm">How the pandemic has sparked fresh opportunities.</div>
                        </div>

                    </div>
                   
                </div>
            </div>
        </section>


            
        <script>
            
            // Used to toggle the menu on small screens when clicking on the menu button
            function myFunction() {
            var x = document.getElementById("navDemo");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
                } else { 
                    x.className = x.className.replace(" w3-show", "");
                }
            }

        </script>



    </body>

</html>






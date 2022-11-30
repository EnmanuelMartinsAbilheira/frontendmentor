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

    <body class="">

      <!--navbar con hamburguer menu-->
      <section class="relative bg-white " >
          
          <div class="flex items-center justify-between h-24 px-8 mx-auto max-w-7xl">

              <a href="#_" class="block"><svg width="65" height="40" xmlns="http://www.w3.org/2000/svg"><path d="M23.016 39.2c.317 0 .574-.093.77-.28.196-.187.294-.457.294-.812v-1.82c0-.448.033-.84.098-1.176.065-.336.145-.663.238-.98l5.09-18.122 4.822 18.57c.112.384.193.682.243.895l.023.099c.047.215.07.453.07.714v1.82c0 .355.098.625.294.812.196.187.453.28.77.28h10.696c.299 0 .55-.093.756-.28.205-.187.308-.457.308-.812v-1.82c0-.373.023-.705.07-.994.047-.29.135-.677.266-1.162L54.04 7.224c.299-1.25.765-2.254 1.4-3.01.635-.756 1.363-1.311 2.184-1.666l.672-.308c.336-.168.574-.331.714-.49.14-.159.21-.369.21-.63 0-.336-.117-.607-.35-.812C58.637.103 58.287 0 57.82 0h-8.904c-.467 0-.817.103-1.05.308-.233.205-.35.476-.35.812 0 .261.06.471.182.63.121.159.313.303.574.434l.616.224c1.12.41 1.871.999 2.254 1.764s.453 1.661.21 2.688l-5.535 23.486-6.477-25.81c-.133-.58-.17-1.018-.11-1.31l.026-.104c.093-.29.317-.49.672-.602l1.232-.336c.299-.112.518-.257.658-.434a.986.986 0 0 0 .21-.63c0-.355-.112-.63-.336-.826C41.468.098 41.122 0 40.656 0H24.78c-.448 0-.789.098-1.022.294-.233.196-.35.471-.35.826 0 .224.06.415.182.574.121.159.322.294.602.406l1.176.42c.261.093.462.243.602.448.14.205.294.607.462 1.204l1.751 6.742-5.553 19.475L16.128 4.48c-.147-.49-.194-.898-.14-1.223l.028-.135c.093-.345.327-.574.7-.686l1.456-.336c.504-.168.756-.504.756-1.008 0-.336-.112-.602-.336-.798C18.368.098 18.022 0 17.556 0H1.344C.896 0 .56.098.336.294.112.49 0 .756 0 1.092c0 .224.056.434.168.63.112.196.29.35.532.462l1.232.392c.355.13.625.308.812.532.187.224.345.579.476 1.064l7.84 30.408c.112.43.191.751.238.966.047.215.07.462.07.742v1.82c0 .355.103.625.308.812.205.187.467.28.784.28h10.556Zm34.804.7c1.195 0 2.263-.29 3.206-.868a6.338 6.338 0 0 0 2.24-2.338c.55-.98.826-2.04.826-3.178 0-1.157-.275-2.212-.826-3.164a6.325 6.325 0 0 0-2.24-2.282c-.943-.57-2.011-.854-3.206-.854-1.157 0-2.207.285-3.15.854a6.325 6.325 0 0 0-2.24 2.282c-.55.952-.826 2.007-.826 3.164 0 1.139.275 2.198.826 3.178.55.98 1.297 1.76 2.24 2.338.943.579 1.993.868 3.15.868Z" fill="#00001A"/></svg></a>

              
              <!---->

              

              <div class="">
                  <a class="w3-button w3-hide-medium w3-hide-large w3-right"  onclick="myFunction()" > <i class="fa fa-terminal fa-2x"></i> </a>
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
          
          <div class="md:flex md:flex-col md:w-[100%]">
            
            <div class="">
              <div class="w-[100%] absolute">
                <h2 class="mt-24 flex flex-col items-center justify-center text-6xl text-white">We are creatives</h2>
              </div>
              <img class="w-full" src="https://jcoder6.github.io/Sunny-side/images/desktop/image-header.jpg" >
            
            </div>
                  
          </div> 

      </section>


      <section class="w-full h-auto ">
        <div class="">
            
          <div class="grid grid-cols-1 md:grid-cols-2 h-100% w-100%"> 
                
            <div class=" mx-24 flex h-[100%] min-h-[30rem] sm:min-h-0">
              <div class="flex flex-col justify-center gap-4 ">
                  <h2 class="font-extralight text-4xl ">Transform your brand</h2>
                  <h3 class="font-hard text-sm">  We are a full-service creative agency specializing in helping brands grow fast. Engage your clients through compelling visuals that do most of the marketing for you.</h3>
                  <h4 class="uppercase" >Learn more</h4>
                </div>
            </div>
            
            <div class="h-[100%] w-[100%]">
              <div class="flex">
                  <img class="h-full w-full" src="https://jcoder6.github.io/Sunny-side/images/desktop/image-transform.jpg">
              </div>

            </div>
            
            
            <div class="h-[100%] w-[100%]">
              <div class="flex">
                  <img class="h-full w-full" src="https://jcoder6.github.io/Sunny-side/images/desktop/image-stand-out.jpg">
              </div>

            </div>

            <div class=" mx-24 flex h-[100%] min-h-[30rem] sm:min-h-0">
              <div class="flex flex-col justify-center gap-4 ">
                  <h2 class="font-extralight text-4xl ">Stand out to the right audience</h2>
                  <h3 class="font-hard text-sm"> Using a collaborative formula of designers, researchers, photographers, videographers, and copywriters, we’ll build and extend your brand in digital places.</h3>
                  <h4 class=" uppercase" >Learn more</h4>
              </div>
            </div>


            
            <div class="">
              <div class="flex justify-center items-end">
                <img class="w-full h-auto" src="https://jcoder6.github.io/Sunny-side/images/desktop/image-graphic-design.jpg" >
                <div class="absolute flex justify-center items-end">
                  <div class="h-[70%] w-[70%]">
                    <div class=" mb-8">
                      <h2 class="font-extralight text-3xl ">Stand out to the right audience</h2>
                      <h3 class="font-hard text-sm"> Using a collaborative formula of designers, researchers, photographers, videographers, and copywriters, we’ll build and extend your brand in digital places.</h3>
                    </div>
                  </div>    
                </div>
              </div>
            </div> 


            <div class="">
              <div class="flex justify-center items-end">
                <img class="w-full relative" src="https://jcoder6.github.io/Sunny-side/images/desktop/image-photography.jpg" >
                <div class="absolute flex justify-center items-end">
                  <div class="h-[70%] w-[70%]">
                    <div class=" mb-8">
                        <h2 class="font-extralight text-3xl ">Stand out to the right audience</h2>
                        <h3 class="font-hard text-sm"> Using a collaborative formula of designers, researchers, photographers, videographers, and copywriters, we’ll build and extend your brand in digital places.</h3>
                    </div>
                  </div>  
                </div>
              </div>
            </div> 
          </div>
        </div>
      </section >
      

      <section class="h-auto">
        <div class="">
          <div class="flex justify-center my-16">
            <h2 class="uppercase text-4xl ">Client testimonials</h2>
          </div>

          <div class="grid grid-cols-1 lg:grid-cols-3 ">
            <div class="flex flex-col items-center mx-10">
              <img class="rounded-full h-[25%] mb-12" src="https://jcoder6.github.io/Sunny-side/images/image-emily.jpg" alt="">

              <div class="container">
                <div class="flex flex-col items-center">
                  <p class="mb-4">We put our trust in Sunnyside and they delivered, making sure our needs were met and deadlines were always hit.</p>
                  <h3 class=" text-xl">Emily R.</h3>
                  <p>Marketing Director</p>
                </div>
              </div>
            </div>


            <div class="flex flex-col items-center mx-10">
              <img class="rounded-full h-[25%] mb-12" src="https://jcoder6.github.io/Sunny-side/images/image-thomas.jpg" alt="">

              <div class="container">
                <div class="flex flex-col items-center">
                  <p class="mb-4">Sunnyside’s enthusiasm coupled with their keen interest in our brand’s success made it a satisfying and enjoyable experience.</p>
                  <h3 class=" text-xl">Thomas S.</h3>
                  <p>Chief Operating Officer</p>
                </div>
              </div>
            </div>
            
            
            <div class="flex flex-col items-center mx-10">
              <img class="rounded-full h-[25%] mb-12" src="https://jcoder6.github.io/Sunny-side/images/image-jennie.jpg" alt="">

              <div class="container">
                <div class="flex flex-col items-center">
                  <p class="mb-4">  Incredible end result! Our sales increased over 400% when we worked with Sunnyside. Highly recommended!</p>
                  <h3 class=" text-xl">Jennie F.</h3>
                  <p>Business Owner</p>
                </div>
              </div>

            </div>
            
          </div>
        </div>

      </section>


      <section class="-mb-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4">

          <img class="" src="https://jcoder6.github.io/Sunny-side/images/desktop/image-gallery-milkbottles.jpg" alt="">
          <img class="" src="https://jcoder6.github.io/Sunny-side/images/desktop/image-gallery-orange.jpg" alt="">
          <img class="" src="https://jcoder6.github.io/Sunny-side/images/desktop/image-gallery-cone.jpg" alt="">
          <img class="" src="https://jcoder6.github.io/Sunny-side/images/desktop/image-gallery-sugarcubes.jpg" alt="">

        </div>

      </section>
      

      <section class="flex justify-center  bg-green-300 h-[50%]">
        <div class="flex justify-center items-end h-auto w-full">
          <div class="flex flex-col">
            <h2 class="flex justify-center pt-12 uppercase text-2xl">Sunnyside</h2>
            <div class="flex gap-12 mt-12">
              <a href="#">About</a>
              <a href="">Services</a>
              <a href="">Projects</a>
            </div>

            <div class="flex gap-10 justify-center m-10">
              <a href="#"><svg width="20" height="17" xmlns="http://www.w3.org/2000/svg"><path d="M20 2.172a8.192 8.192 0 01-2.357.646 4.11 4.11 0 001.805-2.27 8.22 8.22 0 01-2.606.996A4.096 4.096 0 0013.847.248c-2.65 0-4.596 2.472-3.998 5.037A11.648 11.648 0 011.392 1a4.109 4.109 0 001.27 5.478 4.086 4.086 0 01-1.858-.513c-.045 1.9 1.318 3.679 3.291 4.075a4.113 4.113 0 01-1.853.07 4.106 4.106 0 003.833 2.849A8.25 8.25 0 010 14.658a11.616 11.616 0 006.29 1.843c7.618 0 11.923-6.434 11.663-12.205A8.354 8.354 0 0020 2.172z" fill="#2C7566" fill-rule="nonzero"></path></svg></a>
              <a href="#"><svg width="20" height="20" xmlns="http://www.w3.org/2000/svg"><path d="M18.896 0H1.104C.494 0 0 .494 0 1.104v17.793C0 19.506.494 20 1.104 20h9.58v-7.745H8.076V9.237h2.606V7.01c0-2.583 1.578-3.99 3.883-3.99 1.104 0 2.052.082 2.329.119v2.7h-1.598c-1.254 0-1.496.597-1.496 1.47v1.928h2.989l-.39 3.018h-2.6V20h5.098c.608 0 1.102-.494 1.102-1.104V1.104C20 .494 19.506 0 18.896 0z" fill="#2C7566" fill-rule="nonzero"></path></svg></a>
              <a href="#"><svg width="20" height="20" xmlns="http://www.w3.org/2000/svg"><path d="M10 1.802c2.67 0 2.987.01 4.042.059 2.71.123 3.975 1.409 4.099 4.099.048 1.054.057 1.37.057 4.04 0 2.672-.01 2.988-.057 4.042-.124 2.687-1.387 3.975-4.1 4.099-1.054.048-1.37.058-4.041.058-2.67 0-2.987-.01-4.04-.058-2.718-.124-3.977-1.416-4.1-4.1-.048-1.054-.058-1.37-.058-4.041 0-2.67.01-2.986.058-4.04.124-2.69 1.387-3.977 4.1-4.1 1.054-.048 1.37-.058 4.04-.058zM10 0C7.284 0 6.944.012 5.877.06 2.246.227.227 2.242.061 5.877.01 6.944 0 7.284 0 10s.012 3.057.06 4.123c.167 3.632 2.182 5.65 5.817 5.817 1.067.048 1.407.06 4.123.06s3.057-.012 4.123-.06c3.629-.167 5.652-2.182 5.816-5.817.05-1.066.061-1.407.061-4.123s-.012-3.056-.06-4.122C19.777 2.249 17.76.228 14.124.06 13.057.01 12.716 0 10 0zm0 4.865a5.135 5.135 0 100 10.27 5.135 5.135 0 000-10.27zm0 8.468a3.333 3.333 0 110-6.666 3.333 3.333 0 010 6.666zm5.338-9.87a1.2 1.2 0 100 2.4 1.2 1.2 0 000-2.4z" fill="#2C7566" fill-rule="nonzero"></path></svg></a>
              <a href="#"><svg width="20" height="20" xmlns="http://www.w3.org/2000/svg"><path d="M10 0C4.477 0 0 4.477 0 10c0 4.237 2.636 7.855 6.356 9.312-.088-.791-.167-2.005.035-2.868.181-.78 1.172-4.97 1.172-4.97s-.299-.6-.299-1.486c0-1.39.806-2.428 1.81-2.428.852 0 1.264.64 1.264 1.408 0 .858-.546 2.14-.828 3.33-.236.995.5 1.807 1.48 1.807 1.778 0 3.144-1.874 3.144-4.58 0-2.393-1.72-4.068-4.176-4.068-2.845 0-4.516 2.135-4.516 4.34 0 .859.331 1.781.745 2.281a.3.3 0 01.069.288l-.278 1.133c-.044.183-.145.223-.335.134-1.249-.581-2.03-2.407-2.03-3.874 0-3.154 2.292-6.052 6.608-6.052 3.469 0 6.165 2.473 6.165 5.776 0 3.447-2.173 6.22-5.19 6.22-1.013 0-1.965-.525-2.291-1.148l-.623 2.378c-.226.869-.835 1.958-1.244 2.621.937.29 1.931.446 2.962.446 5.523 0 10-4.477 10-10S15.523 0 10 0z" fill="#2C7566" fill-rule="nonzero"></path></svg></a>
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


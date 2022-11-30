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



      <!--Header adactativo-->
      <section class="md:flex md:flex-row  md:justify-center">
        <div class="md:flex md:flex-col md:w-[100%]">  
          <div class="">

            <section class="absolute w-full" >
                  
              <div class="flex items-center justify-between h-24 text-white px-8 mx-auto max-w-7xl">

                <a href="#_" class="uppercase text-4xl">LoopStudios</a>

                <div class="">
                  <a class="w3-button w3-hide-medium w3-hide-large "  onclick="myFunction()" > <i class="fa fa-terminal fa-2x"></i> </a>
                  <a href="#Home" class=" m-3">Home</a>
                  <a href="#Shop" class=" m-3">Shop</a>
                  <a href="#About" class=" m-3">About</a>
                  <a href="#Contact" class=" m-3">Contact</a>
                </div>

                <!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
                <div id="navDemo" class="bg-white w3-center w3-bar-block w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:60px">
                  <a href="#Home" class="flex " onclick="myFunction()">Home</a>
                  <a href="#Shop" class="flex " onclick="myFunction()">Shop</a>
                  <a href="#About" class="flex " onclick="myFunction()">About</a>
                  <a href="#Contact" class="flex " onclick="myFunction()">Contact</a>
                </div>
                <!---->

              </div>

            </section>

            <div class=" w-auto">

              <img class="" src="https://my-loopstudios-project.netlify.app/images/desktop/image-hero.jpg" >
              
              <div class="bg-white">
                <div class="ml-8 -mt-32 md:-mt-60 border-solid border-2 p-4 absolute text-base md:text-6xl text-white border-solid">
                  <h2>IMMERSIVE</h2>
                  <h2>EXPERIENCE</h2>
                  <h2>THAT DELIVER</h2>
                </div> 
              </div>   

 
            
            </div>
          </div>  
        </div>  
      </section>


      <section class=" m-12 lg:h-[70%] lg:w-[70%]">

        <div class="lg:flex lg:flex-row lg:items-end lg:justify-end">

          <div class="">
            <img class="h-auto w-full"src="https://my-loopstudios-project.netlify.app/images/desktop/image-interactive.jpg" alt="">
            
          </div>
          <div class="border-solid border-1 lg:-mr-48 lg:absolute lg:p-12 bg-white lg:w-[40%] lg:h-auto lg:-mt-60">
            
            <div class="my-4 lg:mt-0 ">
              <h2 class="lg:my-2 text-4xl">THE LEADER IN INTERACTIVE VR</h2>
              <h3 class="lg:my-2 ltext-slate-500">Founded in 2011, Loopstudios has been producing world-class virtual reality projects for some of the best companies around the globe. Our award-winning creations have transformed buisness through digital experiences that bind to their brand.</h3>
            </div>
          
          </div>

        </div>
      
      </section>


      <section class="mt-60">
        <div class="m-12">

          <div class="flex justify-around uppercase my-4">
            <h2>Our Creations</h2>
            <button class="border-solid border-2" >see all</button>
          </div>

          <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-8">
            
            <div class="">
              <img class="" src="https://my-loopstudios-project.netlify.app/images/desktop/image-deep-earth.jpg" alt="">
              <div class="-mt-24 ml-4 text-2xl md:text-4xl text-white  absolute uppercase">
                <p>deep</p>
                <p>Earth</p>
              </div>
            </div>
            
            <div class="">
              <img class="" src="https://my-loopstudios-project.netlify.app/images/desktop/image-night-arcade.jpg" alt="">
              <div class="-mt-24 ml-4 text-2xl md:text-4xl text-white  absolute uppercase">
                <p>night</p>
                <p>arcade</p>
              </div>
            </div>
            
            <div class="">
              <img class="" src="https://my-loopstudios-project.netlify.app/images/desktop/image-soccer-team.jpg" alt="">
              <div class="-mt-24 ml-4 text-2xl md:text-4xl text-white  absolute uppercase">
                <p>soccer</p>
                <p>team vr</p>
              </div>
            </div>
            
            <div class="">
              <img class="" src="https://my-loopstudios-project.netlify.app/images/desktop/image-grid.jpg" alt="">
              <div class="-mt-24 ml-4 text-2xl md:text-4xl text-white  absolute uppercase">
                <p>the</p>
                <p>grid</p>
              </div>
            </div>
            
            <div class="">
              <img class="" src="https://my-loopstudios-project.netlify.app/images/desktop/image-from-above.jpg" alt="">
              <div class="-mt-24 ml-4 text-2xl md:text-4xl text-white  absolute uppercase">
                <p>From Up</p>
                <p>above vt</p>
              </div>
            </div>
            
            <div class="">
              <img class="" src="https://my-loopstudios-project.netlify.app/images/desktop/image-pocket-borealis.jpg" alt="">
              <div class="-mt-24 ml-4 text-2xl md:text-4xl text-white  absolute uppercase">
                <p>pocket</p>
                <p>borealis</p>
              </div>
            </div>
            
            <div class="">
              <img class="" src="https://my-loopstudios-project.netlify.app/images/desktop/image-curiosity.jpg" alt="">
              <div class="-mt-24 ml-4 text-2xl md:text-4xl text-white  absolute uppercase">
                <p>the</p>
                <p>curiosity</p>
              </div>
            </div>
            
            <div class="">
              <img class="" src="https://my-loopstudios-project.netlify.app/images/desktop/image-fisheye.jpg" alt="">
              <div class="-mt-24 ml-4 text-2xl md:text-4xl text-white  absolute uppercase">
                <p>make it</p>
                <p>fisheye</p>
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


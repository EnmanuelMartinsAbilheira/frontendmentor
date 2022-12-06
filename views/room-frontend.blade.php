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
          
            <section class="absolute " >

              <div class="flex items-center justify-between h-24 px-8 mx-auto max-w-7xl">

                <a href="#_" class="uppercase text-4xl">Room</a>

                <a class=" d-none"  onclick="myFunction()" > <i class="fa fa-terminal fa-2x"></i> </a>
                <div class=" hidden sm:flex ">
                  <ul class="flex flex-row m-0 p-0">   
                    <a href="#Home" class=" overflow-hidden m-3">Home</a>
                    <a href="#Shop" class=" overflow-hidden m-3">Shop</a>
                    <a href="#About" class=" overflow-hidden m-3">About</a>
                    <a href="#Contact" class=" overflow-hidden m-3">Contact</a>
                  </ul>
                </div>


                  <!---->

              </div>

            </section>

              <div class="grid grid cols-1 lg:grid-cols-2">

                <div class=" ">
                  <img class="w-full" src="https://shoppinggarden.com.br/uploads/usuario/2019/03/17/bonsai-sg-1.jpg" >
                </div>

                <div class="mx-12 flex flex-col justify-center items-center w-full h-auto bg-white gap-16">
                  <h1 class="text-4xl ">Discover innovative ways to decorate</h1> 
                  <p class="">
                  We provide unmatched quality, comfort, and style for property owners across the country. 
                  Our experts combine form and function in bringing your vision to life. Create a room in your 
                  own style with our collection and make your property a reflection of you and what you love.
                  </p>
                  <button> Shop Now</button> 
                </div>    

              </div>

                
            </section>


      <section class="w-full h-auto ">
        
        <div class="">
            
          <div class="grid grid-cols-1 lg:grid-cols-3 ">
            <div class="h-[30%] w-auto">
              <div class="flex">
                  <img class="h-full w-full" src="https://thedesignhome.com/wp-content/uploads/2020/10/rb_fd6tshbm-1198x800.jpg">
              </div>

            </div>

            <div class="flex flex-col justify-center mx-12 flex min-h-[25rem] sm:min-h-12>
              <div class="flex flex-col justify-center gap-4 ">
                  <h2 class="font-extralight text-2xl ">About our furniture</h2>
                  <h3 class="font-hard text-sm">Our multifunctional collection blends design and function to suit your individual taste.Make each room unique, or pick a cohesive theme that best express your interests and whatinspires you. Find the furniture pieces you need, from traditional to contemporary stylesor anything in between. Product specialists are available to help you create your dream space.</h3>

                </div>
            </div>
            
            <div class="h-full w-full">
              <div class="flex">
                <img class="h-full w-full" src="https://blog.adgager.com/wp-content/uploads/2021/06/ellen-qin-bxLhqZIp2LI-unsplash-1080x635.jpg">
              </div>
            </div>

          </div>
        </div>

      </section >
      

  </body>

</html>


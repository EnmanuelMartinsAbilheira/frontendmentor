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

  <body class=" bg-blue-600">

    <section class="md:flex md:flex-row  md:justify-center w-full ">

      <div class="md:flex md:flex-col md:w-[100%]">

        <div class="flex items-center justify-between h-24 px-8 max-w-7xl">

          <a href="#_" ><div class="logo-container"><img src="https://hannahshiels.github.io/front-end-mentor/fylo-dark-theme-landing-page-master/images/logo.svg" alt="logo-img"></div></a>

          <a class=" sm:hidden" > <i class="fa fa-terminal fa-2x"></i> </a>
          <div class=" hidden sm:flex ">
            <ul class="text-white flex flex-row m-0 p-0">   
              <a href="#Home" class=" overflow-hidden m-3">Features</a>
              <a href="#Shop" class=" overflow-hidden m-3">Team</a>
              <a href="#About" class=" overflow-hidden m-3">Sign In</a>
            </ul>
          </div>

        </div>

      </div>

    </section>

    <section class="flex flex-col justify-center items-center text-center">
      <div class=" h-auto"> <img src="https://hannahshiels.github.io/front-end-mentor/fylo-dark-theme-landing-page-master/images/illustration-intro.png" alt="illustration-intro"></div>
      <div class="w-1/2 text-white">
        <h1 class=" font-medium text-4xl"> All your files in one secure location, accessible anywhere.</h1>
        <p class="mt-2">Fylo stores all your most important files in one secure location. Access them wherever you need, share and collaborate with friends family, and co-workers. </p>
        <button class=" bg-emerald-300 m-4 p-2 rounded-3xl"> Get Started</button>
      </div>

    </section>
    
    <section class="text-white flex flex-wrap justify-center items-center grid grid-cols-1 sm:grid-cols-2">

      <div class="py-4 px-6 text-center flex flex-col items-center">
        <div class=""> <img src="https://hannahshiels.github.io/front-end-mentor/fylo-dark-theme-landing-page-master/images/icon-access-anywhere.svg" alt=""> </div>
        <div class=" mt-2">
          <h3 class="text-2xl ">Access your files, anywhere</h3>
          <p>The ability to use a smartphone, tablet, or computer to access your account means your files follow you everywhere.</p>
        </div>
      </div>

      <div class="py-4 px-6 text-center flex flex-col items-center">
        <div class=""> <img src="https://hannahshiels.github.io/front-end-mentor/fylo-dark-theme-landing-page-master/images/icon-security.svg" alt=""> </div>
        <div class="mt-2">
          <h3 class="text-2xl "> Security you can trust</h3>
          <p> 2-factor authentication and user-controlled encryption are just a couple of the security features we allow to help secure your files.</p>
        </div>

      </div>
      <div class="py-4 px-6 text-center flex flex-col items-center">
        <div class=""> <img src="https://hannahshiels.github.io/front-end-mentor/fylo-dark-theme-landing-page-master/images/icon-collaboration.svg" alt=""> </div>
        <div class=" mt-2">
          <h3 class="text-2xl "> Real-time collaboration</h3>
          <p> Securely share files and folders with friends, family and colleagues for live collaboration. No email attachments required.</p>
        </div>
      </div>

      <div class="py-4 px-6 text-center flex flex-col items-center">
        <div class=""> <img src="https://hannahshiels.github.io/front-end-mentor/fylo-dark-theme-landing-page-master/images/icon-any-file.svg" alt=""> </div>
        <div class=" mt-2">
          <h3 class="text-2xl "> Store any type of file</h3>
          <p> Whether you're sharing holidays photos or work documents, Fylo has you covered allowing for all file types to be securely stored and shared.</p>
        </div>
      </div>
    </section>

    <section class=" my-4 flex flex-col grid items-center grid-cols-1 md:grid-cols-2">
      <div class="w-full max-w-7xl h-auto"> <img src="https://hannahshiels.github.io/front-end-mentor/fylo-dark-theme-landing-page-master/images/illustration-stay-productive.png" alt=""> </div>

      <div class="flex flex-col gap-4 text-white mx-4">
        <h2 class="text-4xl">Stay productive, wherever you are</h2>
        <p class=""> Never let location be an issue when accessing your files. Fylo has you covered for all of your file storage needs. </p>
        <p class=""> Securely share files and folders with friends, family and colleagues for live collaboration. No email attachments required.</p>
        <p class=" text-green-400 flex justify-center"> <a class="border-b-2 " href="#">See how Fylo works </a> </p>
      </div>
    </section>

    <section class="mx-12 flex grid grid-cols-1 md:grid-cols-3 gap-8 my-8">

      <div class=" text-xs bg-gray-600 p-4 rounded-3xl">
        <div class="flex ">
          <p>Fylo has improved our team productivity by an order of magnitude. Since making the switch our team has become a well-oiled collaboration machine.</p>
        </div>
        <div class="flex items-end ">
          <div class="w-8 mt-4"> <img class="rounded-full" src="https://hannahshiels.github.io/front-end-mentor/fylo-dark-theme-landing-page-master/images/profile-1.jpg" alt=""></div>
            <div class="ml-1 ">
              <h4>Satish Patel</h4>
              <p>Founder & CEO, Huddle</p>
            </div>
         </div>
      </div>

      <div class=" text-xs bg-gray-600 p-4 rounded-3xl">
        <div class="flex ">
          <p>Fylo has improved our team productivity by an order of magnitude. Since making the switch our team has become a well-oiled collaboration machine.</p>
        </div>
        <div class="flex items-end ">
          <div class="w-8 mt-4"> <img class="rounded-full" src="https://hannahshiels.github.io/front-end-mentor/fylo-dark-theme-landing-page-master/images/profile-2.jpg" alt=""></div>
            <div class="ml-1 ">
              <h4> Bruce McKenzie </h4>
              <p>Founder & CEO, Huddle</p>
            </div>
        </div>
      </div>

      <div class=" text-xs bg-gray-600 p-4 rounded-3xl">
        <div class="flex ">
          <p> Fylo has improved our team productivity by an order of magnitude. Since making the switch our team has become a well-oiled collaboration machine.</p>
        </div>
        <div class="flex items-end er">
          <div class="w-8 mt-4"> <img class="rounded-full" src="https://hannahshiels.github.io/front-end-mentor/fylo-dark-theme-landing-page-master/images/profile-3.jpg" alt=""></div>
          <div class="ml-1 ">
            <h4> Iva Boyd</h4>
            <p>Founder & CEO, Huddle</p>
          </div>
        </div>
      </div>

    </section>

  </body>

</html>


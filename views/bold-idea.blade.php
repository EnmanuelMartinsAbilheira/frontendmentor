<html>

  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <title>laravel</title>

      @vite('resources/js/app.js')


  </head>

  <body class="bg-[#F5F5F5]">

    <!--  -->
    <section class="relative w-full h-[40rem] md:h-[60rem] bg-cover bg-[url('https://s3-alpha-sig.figma.com/img/33c3/3e98/c8af4756c1f3711c01ee6ea7ce6bb8a0?Expires=1671408000&Signature=VeNuJU0kYsZJRQe6G1o2kHofcAJcdWu95JOqa9NJfgZlleph7zPGrwGmceMSvfIeRztN1HKqd5Cq04jFRmSkzwwvaOwDfxXq9mcKJQ6OOY0dThntX5sRIQ8Th20pN6Ik0D9NovwSC4ulRM6yQcWgbzhRYeh3obaDWRQRIh9JD9h8G5lC7CyVwhJyutw--WBzHCjJ2awlpH5hW6QpTKWrQOmGDq3FQ23BwzaX3Nh5LZlbiiZbKbtE0~oKiG9uKT8ouwY8liLLFrObWjucnXneaJhmvW0sDopHi9-Pa9FqpUlhiOlei6-nyvmaWF2Pf11UkyU-GqUGzYswwlJjHZMayA__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA')] " >

      <div class="container m-auto px-12 ">
        <a href="#_" class="uppercase text-4xl pb-8 flex items-center justify-between h-24 pt-12 pb-20">
          <svg width="261" class="md:h-25" viewBox="0 0 261 55" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M24.194 45.7385H13.7212V55.0003H24.194V45.7385Z" fill="white"/><path d="M18.9626 2.37005e-06C15.2136 -0.00187853 11.5483 1.11581 8.43021 3.2117C5.31214 5.3076 2.8814 8.28754 1.44544 11.7746C0.0094758 15.2617 -0.367207 19.0993 0.363037 22.8019C1.09328 26.5046 2.89764 29.906 5.54791 32.576C8.19817 35.246 11.5753 37.0645 15.2521 37.8017C18.9289 38.5388 22.7402 38.1615 26.204 36.7173C29.6678 35.2731 32.6284 32.827 34.7114 29.6883C36.7944 26.5497 37.9062 22.8595 37.9062 19.0846C37.9075 16.5788 37.4184 14.0973 36.4669 11.7819C35.5155 9.46654 34.1203 7.3626 32.3611 5.59031C30.6019 3.81802 28.5131 2.41212 26.2142 1.45291C23.9152 0.493708 21.4511 2.0587e-06 18.9626 2.37005e-06ZM18.9626 28.9168C17.0286 28.9187 15.1376 28.3429 13.5289 27.2622C11.9201 26.1815 10.6659 24.6445 9.92491 22.8457C9.18397 21.047 8.98961 19.0673 9.36644 17.1573C9.74328 15.2473 10.6744 13.4928 12.0418 12.1158C13.4093 10.7389 15.1518 9.80133 17.0486 9.42188C18.9455 9.04244 20.9115 9.23814 22.6978 9.98422C24.4842 10.7303 26.0106 11.9932 27.0839 13.6132C28.1571 15.2331 28.729 17.1372 28.7271 19.0846C28.7271 21.6922 27.6984 24.1931 25.8672 26.037C24.036 27.881 21.5523 28.9168 18.9626 28.9168Z" fill="white"/><path d="M70.5053 14.1543H67.4268V41.1979H70.5053V14.1543Z" fill="white"/><path d="M93.0566 15.9945H104.587C105.427 15.9442 106.269 16.0676 107.06 16.357C107.85 16.6465 108.574 17.0959 109.186 17.6776C109.748 18.2673 110.184 18.9661 110.468 19.7312C110.752 20.4964 110.878 21.3118 110.839 22.1278C110.86 22.9121 110.745 23.6941 110.499 24.4385C110.296 25.0221 109.974 25.5565 109.554 26.0074C109.168 26.4252 108.694 26.7502 108.166 26.9583C107.612 27.1505 107.033 27.2594 106.448 27.2816V27.4813C107.055 27.4889 107.658 27.5948 108.232 27.7951C108.86 27.9989 109.444 28.3217 109.951 28.746C110.497 29.2288 110.94 29.8174 111.254 30.4767C111.632 31.2911 111.813 32.1838 111.783 33.0821C111.788 33.9864 111.634 34.8845 111.33 35.7351C111.04 36.5302 110.608 37.265 110.055 37.9032C109.514 38.5188 108.851 39.0143 108.11 39.3581C107.345 39.7206 106.509 39.9028 105.664 39.8906H93.0566V15.9945ZM98.2222 25.7887H103.36C103.652 25.8167 103.946 25.7793 104.222 25.6792C104.499 25.5792 104.749 25.419 104.957 25.2101C105.164 25.0011 105.323 24.7486 105.423 24.4706C105.522 24.1925 105.559 23.8958 105.532 23.6017V22.5367C105.561 22.2417 105.525 21.944 105.426 21.6647C105.327 21.3855 105.168 21.1318 104.961 20.9217C104.753 20.7117 104.502 20.5506 104.225 20.4501C103.948 20.3495 103.653 20.3119 103.36 20.3401H98.2222V25.7887ZM98.2222 35.5069H104.172C104.762 35.5422 105.343 35.3405 105.786 34.9459C105.991 34.7381 106.149 34.4893 106.252 34.2157C106.354 33.9421 106.399 33.6498 106.381 33.3579V32.1883C106.4 31.8962 106.356 31.6036 106.254 31.3298C106.151 31.0561 105.992 30.8074 105.786 30.6003C105.344 30.2031 104.764 29.9981 104.172 30.0297H98.2222V35.5069Z" fill="white"/><path d="M122.7 40.2997C121.497 40.3236 120.303 40.1037 119.187 39.653C118.178 39.2309 117.279 38.5801 116.561 37.7512C115.824 36.8779 115.266 35.8664 114.918 34.7749C114.518 33.5121 114.323 32.1922 114.342 30.8667C114.323 29.5443 114.518 28.2276 114.918 26.968C115.265 25.8818 115.823 24.8764 116.561 24.0107C117.279 23.1814 118.178 22.5305 119.187 22.1089C121.454 21.2466 123.955 21.2466 126.222 22.1089C127.228 22.5306 128.124 23.1816 128.838 24.0107C129.583 24.8727 130.146 25.8791 130.49 26.968C130.891 28.2276 131.085 29.5443 131.067 30.8667C131.085 32.1922 130.891 33.5121 130.49 34.7749C130.143 35.8686 129.581 36.8808 128.838 37.7512C128.123 38.5799 127.228 39.2308 126.222 39.653C125.103 40.1037 123.905 40.3236 122.7 40.2997ZM122.7 36.2964C123.131 36.3196 123.562 36.2464 123.962 36.082C124.362 35.9176 124.721 35.6661 125.013 35.3455C125.602 34.6007 125.891 33.6609 125.825 32.7115V29.079C125.894 28.1265 125.604 27.1828 125.013 26.4355C124.388 25.8438 123.562 25.5144 122.704 25.5144C121.846 25.5144 121.021 25.8438 120.395 26.4355C119.801 27.1814 119.508 28.1252 119.574 29.079V32.74C119.51 33.6906 119.804 34.6306 120.395 35.374C120.688 35.6892 121.047 35.9354 121.445 36.0948C121.843 36.2543 122.272 36.3231 122.7 36.2964Z" fill="white"/><path d="M139.632 39.8906C138.95 39.9494 138.263 39.8677 137.614 39.6502C136.964 39.4327 136.366 39.0842 135.854 38.6259C134.991 37.6122 134.557 36.2976 134.646 34.9649V14.5586H139.679V35.9538H141.917V39.8906H139.632Z" fill="white"/><path d="M155.884 36.8762H155.714C155.575 37.3633 155.354 37.823 155.062 38.236C154.766 38.6549 154.406 39.0239 153.995 39.3295C153.561 39.6419 153.079 39.8827 152.569 40.0427C152.035 40.2135 151.477 40.3001 150.917 40.2994C149.93 40.362 148.944 40.1745 148.048 39.7543C147.153 39.334 146.376 38.6943 145.789 37.8937C144.627 36.2771 144.051 33.9474 144.051 30.8855C144.051 27.8236 144.627 25.5034 145.789 23.9059C146.378 23.1083 147.156 22.4714 148.051 22.053C148.946 21.6345 149.931 21.4478 150.917 21.5097C152.017 21.4909 153.095 21.8238 153.995 22.4606C154.85 23.0397 155.463 23.9169 155.714 24.9234H155.884V14.5586H160.917V39.8905H155.884V36.8762ZM152.588 36.1916C153.429 36.2254 154.258 35.9816 154.949 35.4974C155.247 35.2808 155.489 34.9947 155.654 34.6635C155.818 34.3322 155.9 33.9658 155.893 33.5956V28.242C155.902 27.8715 155.82 27.5045 155.656 27.1731C155.491 26.8416 155.249 26.5557 154.949 26.3402C154.259 25.8533 153.43 25.6062 152.588 25.6366C152.144 25.6237 151.703 25.7071 151.294 25.881C150.885 26.0549 150.518 26.3153 150.218 26.6445C149.561 27.3913 149.222 28.368 149.274 29.3641V32.483C149.222 33.4792 149.561 34.4558 150.218 35.2026C150.52 35.5284 150.888 35.7852 151.297 35.9558C151.705 36.1264 152.146 36.2068 152.588 36.1916Z" fill="white"/><path d="M172.986 39.8906V35.7542H176.046V20.1404H172.986V15.9945H184.319V20.1404H181.259V35.7542H184.319V39.8906H172.986Z" fill="white"/><path d="M199.088 36.8762H198.918C198.782 37.3628 198.565 37.8226 198.276 38.236C197.98 38.6549 197.619 39.0239 197.209 39.3295C196.771 39.642 196.286 39.8827 195.773 40.0427C195.242 40.2142 194.688 40.3009 194.13 40.2994C193.143 40.361 192.155 40.1732 191.258 39.753C190.361 39.3329 189.582 38.6938 188.993 37.8937C187.841 36.2771 187.265 33.9474 187.265 30.8855C187.265 27.8236 187.841 25.5034 188.993 23.9059C189.585 23.1089 190.364 22.4725 191.261 22.0542C192.158 21.6359 193.144 21.4488 194.13 21.5097C195.23 21.4922 196.308 21.825 197.209 22.4606C198.061 23.0407 198.67 23.918 198.918 24.9234H199.088V14.5586H204.121V39.8906H199.088V36.8762ZM195.792 36.1916C196.633 36.2268 197.463 35.9829 198.153 35.4974C198.451 35.2808 198.693 34.9947 198.857 34.6635C199.022 34.3322 199.104 33.9658 199.097 33.5956V28.242C199.106 27.8715 199.024 27.5045 198.86 27.1731C198.695 26.8416 198.452 26.5557 198.153 26.3402C197.464 25.852 196.634 25.6048 195.792 25.6366C195.35 25.6239 194.91 25.7073 194.503 25.8813C194.095 26.0552 193.73 26.3155 193.431 26.6445C192.775 27.3913 192.435 28.368 192.487 29.3641V32.483C192.435 33.4792 192.775 34.4559 193.431 35.2026C193.731 35.5282 194.098 35.7849 194.505 35.9556C194.912 36.1262 195.351 36.2067 195.792 36.1916Z" fill="white"/><path d="M216.266 40.2994C215.022 40.3223 213.786 40.0961 212.63 39.6338C211.602 39.2077 210.68 38.5584 209.929 37.732C209.168 36.8784 208.598 35.8698 208.258 34.7747C207.873 33.5087 207.685 32.1904 207.701 30.8665C207.684 29.562 207.869 28.2628 208.248 27.0154C208.573 25.9257 209.123 24.9178 209.863 24.0581C210.585 23.2288 211.486 22.5781 212.498 22.1563C213.631 21.6928 214.845 21.4663 216.068 21.4906C217.367 21.456 218.657 21.7126 219.845 22.2419C220.851 22.7067 221.737 23.4 222.433 24.2673C223.108 25.1329 223.606 26.1253 223.896 27.1865C224.201 28.321 224.354 29.4915 224.35 30.6668V32.1692H212.895V32.445C212.844 32.9723 212.912 33.5043 213.095 34.001C213.278 34.4976 213.571 34.946 213.951 35.3123C214.331 35.6785 214.789 35.9531 215.289 36.1153C215.79 36.2775 216.321 36.3231 216.842 36.2486C217.731 36.2876 218.612 36.0698 219.382 35.621C220.054 35.1936 220.673 34.6859 221.224 34.1091L223.736 37.2661C222.893 38.2418 221.827 38.9958 220.629 39.4626C219.243 40.0272 217.761 40.3115 216.266 40.2994ZM216.162 25.2372C215.713 25.2148 215.266 25.2947 214.852 25.4708C214.438 25.647 214.069 25.9149 213.773 26.2547C213.166 27.0106 212.857 27.9652 212.904 28.9362V29.1929H219.156V28.9077C219.2 27.9679 218.946 27.0383 218.429 26.2547C218.162 25.9086 217.815 25.6345 217.418 25.4569C217.021 25.2793 216.586 25.2038 216.153 25.2372H216.162Z" fill="white"/><path d="M241.111 39.8905C240.698 39.9044 240.285 39.8359 239.898 39.6891C239.511 39.5422 239.156 39.3198 238.854 39.0347C238.229 38.4215 237.827 37.6143 237.712 36.743H237.504C237.395 37.2842 237.179 37.7979 236.869 38.2536C236.559 38.7093 236.162 39.0978 235.7 39.396C234.676 40.0466 233.483 40.3774 232.272 40.3469C231.526 40.398 230.777 40.2981 230.07 40.0532C229.363 39.8082 228.712 39.4231 228.155 38.9205C227.672 38.418 227.297 37.8213 227.051 37.1672C226.806 36.5131 226.696 35.8154 226.729 35.1169C226.681 34.2954 226.845 33.4754 227.206 32.737C227.567 31.9986 228.112 31.3672 228.788 30.9045C230.475 29.8994 232.42 29.4197 234.378 29.5257H237.211V28.3561C237.25 27.6038 237.007 26.8643 236.531 26.2831C236.228 25.999 235.868 25.7833 235.476 25.6505C235.083 25.5177 234.667 25.4707 234.255 25.5129C233.413 25.4672 232.578 25.6974 231.876 26.169C231.318 26.5744 230.83 27.0691 230.431 27.6334L227.437 24.9518C228.138 23.9018 229.076 23.0347 230.176 22.4224C231.563 21.7364 233.098 21.4095 234.643 21.4715C237.161 21.4715 239.05 22.0294 240.309 23.1451C240.963 23.7704 241.472 24.5338 241.798 25.3805C242.125 26.2272 242.261 27.1362 242.197 28.0423V35.9157H243.859V39.8524L241.111 39.8905ZM234.142 36.8C234.9 36.8226 235.649 36.6316 236.305 36.2485C236.6 36.0663 236.84 35.8059 236.998 35.4956C237.156 35.1853 237.227 34.8372 237.202 34.4894V32.3593H234.756C232.782 32.3593 231.8 33.025 231.8 34.3657V34.8982C231.777 35.1691 231.82 35.4416 231.925 35.6919C232.03 35.9422 232.195 36.1627 232.404 36.3341C232.918 36.6753 233.528 36.8388 234.142 36.8Z" fill="white"/><path d="M253.313 40.2993C251.894 40.3806 250.475 40.1332 249.165 39.576C247.855 39.0188 246.69 38.1668 245.758 37.0853L248.714 34.071C249.312 34.7528 250.025 35.3226 250.82 35.7541C251.629 36.17 252.527 36.3791 253.436 36.3626C254.159 36.4315 254.885 36.272 255.513 35.9062C255.702 35.7582 255.852 35.5671 255.952 35.3488C256.052 35.1305 256.1 34.8913 256.089 34.651C256.089 33.8142 255.485 33.3102 254.286 33.1486L252.35 32.9109C248.34 32.4037 246.334 30.5558 246.334 27.3671C246.322 26.5449 246.49 25.7301 246.825 24.9804C247.151 24.2696 247.628 23.6398 248.223 23.1356C248.863 22.5979 249.601 22.1909 250.395 21.9375C251.311 21.6441 252.267 21.4996 253.228 21.5096C254.054 21.5024 254.878 21.566 255.693 21.6998C256.341 21.8071 256.975 21.9889 257.582 22.2418C258.124 22.4789 258.638 22.7789 259.111 23.1356C259.591 23.5039 260.051 23.8975 260.49 24.3147L257.704 27.291C257.159 26.7325 256.519 26.2754 255.816 25.9408C255.13 25.6153 254.382 25.4464 253.625 25.4463C252.987 25.3892 252.347 25.532 251.793 25.8552C251.619 25.9777 251.478 26.1417 251.382 26.3325C251.287 26.5234 251.239 26.7351 251.245 26.9487C251.231 27.1517 251.259 27.3553 251.328 27.5468C251.396 27.7383 251.503 27.9134 251.642 28.0613C252.064 28.398 252.577 28.5971 253.115 28.6318L255.117 28.9076C259.045 29.4306 261 31.2278 261 34.3087C261.01 35.1389 260.826 35.9598 260.462 36.705C260.091 37.4459 259.562 38.0953 258.913 38.6067C258.191 39.1719 257.371 39.5975 256.496 39.8619C255.463 40.1712 254.39 40.3187 253.313 40.2993Z" fill="white"/></svg>
        </a>
        <div class="flex flex-col items-center justify-between w-full md:flex-row md:-mt-40">
          <div class="flex flex-col items-center md:items-start justify-center w-full md:-mt-80 md:w-1/2 md:pb-24 md:pr-16">
            <h1 class="sm:mx-20 md:mx-0 text-4xl md:text-5xl font-extrabold text-white "> Coloque o seu negócio noutro nível</h1>
            <p class="text-lg mx-8 md:mx-0 text-gray-200 my-7 items-center justify-center font-italic">Aumente as suas vendas, a sua posição no mundo digital e fidealize clientes.</p>
            <a href="#_" class="w-40 px-8 py-3 text-lg font-normal text-center text-gray-800 bg-gray-100 rounded-lg md:w-auto">Saber Mais</a>
          </div>
          <div class="z-50 max-w-none absolute md:relative flex items-center justify-center md:w-1/2 md:pt-0 ">
            <img class="relative max-w-none mt-60 sm:mt-12 ml-36 sm:ml-80 md:mt-0 md:ml-28 md:-mt-4 w-[800px] sm:w-[70rem] md:w-[120rem] " src="https://s3-alpha-sig.figma.com/img/0ccb/f719/a5cfb601b2069d491e2ff187f7abfb08?Expires=1671408000&Signature=UKNf8ZeOBpa0M5LKzfLxIkLdxd8AftmG5BnGsARjveeNWVhyzOVD3X7GjnQWxyqBUG5yS55EDcblvXv89q4h5v91l9vbts7~Pcs1iaMrn3lqG0w~1zUncYh~0rmaKGPmQsxg9CCGme2U-adFioaE01VsvlznUdz2k~yO6b0wMhbfvJUbxhN5TjhuuJumx1219qPW5Dc09xSgFt8oK8ifrlr717q-xQRKHq5gZ8zOC4IgNBnWzoWm0jTzx-jh1fJgqkiLB8h-E2-58UzJM~qjErZgEfQv6cMgwFH~n4o6rwQyFvYrQ-37Gsx~v3c0G3d6YmSTLf1HlZvXu~7MKEmwJg__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA">
          </div>
        </div>
      </div>

    </section>
    
    
    <section class="container mx-auto px-6 sm:px-12 lg:px-18">
      
      <div class="mx-auto pt-40 -mt-4 md:-mt-56 relative bg-[#E0CD67] h-[125%] sm:h-full md:h-4/5 ">
      
        <div class="container px-20 grid grid-cols-1 md:grid-cols-2 ">
          
          <div class="">
            <h2 class="text-5xl text-bold">a Bold</h2>
          </div>

          <div class=" flex flex-col gap-4">
            <h2>A Bold ldeas é uma empresa com principal atividade no ramo das tecnologias e produtos de informação. Focada na criação de soluções à medida, com uma forte componente tecnológica, visual e criativa, cobrindo todo o largo espectro de tarefas e competências necessárias à transformação de ideias em produtos. </h2>
            <h2>A Bold ldeas está particularmente apta para o desenvolvimento de tecnologia, com dezenas de projetos web e mobile.</h2>
          </div>
    
        </div>

        <h3 class="flex -mb-13 ml-16 mt-8 md:mt-0 text-6xl md:text-7xl lg:text-9xl text-gray-100 opacity-40">fazemos</h3>

        <div class="mx-12 ">
          
          <div class="flex flex-row grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 ">
        
            <div class="mx-4 mb-4 flex flex-col justify-center items-center md:mb-12 p-20 bg-white drop-shadow-2xl ">
              <svg width="58" height="61" viewBox="0 0 58 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d_550_1028)">
                  <path d="M26.3902 4.90059H21.7668C10.2084 4.90059 5.58496 9.52398 5.58496 21.0825V34.9526C5.58496 46.5111 10.2084 51.1345 21.7668 51.1345H35.637C47.1955 51.1345 51.8189 46.5111 51.8189 34.9526V30.3292" stroke="#111111" stroke-width="2.48421" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M38.0414 7.2585L19.8252 25.4747C19.1317 26.1682 18.4382 27.5321 18.2995 28.5261L17.3055 35.4843C16.9356 38.0041 18.7156 39.761 21.2354 39.4142L28.1936 38.4202C29.1645 38.2815 30.5284 37.588 31.245 36.8945L49.4612 18.6783C52.6051 15.5344 54.0846 11.8819 49.4612 7.2585C44.8378 2.63511 41.1853 4.1146 38.0414 7.2585V7.2585Z" stroke="#111111" stroke-width="2.48421" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M35.4287 9.87073C36.1952 12.5927 37.6479 15.0722 39.6475 17.0718C41.647 19.0713 44.1265 20.524 46.8485 21.2905" stroke="#111111" stroke-width="2.48421" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                </g>
                <defs>
                  <filter id="filter0_d_550_1028" x="-3.03857" y="0.277206" width="63.481" height="63.4807" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                  <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                  <feOffset dy="4"/>
                  <feGaussianBlur stdDeviation="2"/>
                  <feComposite in2="hardAlpha" operator="out"/>
                  <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                  <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_550_1028"/>
                  <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_550_1028" result="shape"/>
                  </filter>
                </defs>
              </svg>

              <h2 class="text-2xl pt-8 font-mono">Design</h2>

            </div>

            <div class="mx-4 mb-4 flex flex-col justify-center items-center md:mb-12 p-20 bg-white drop-shadow-2xl ">
              <svg width="57" height="56" viewBox="0 0 57 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M32.0665 19.5105H40.5735M16.2545 32.8952H40.5966M16.8555 51.1345H39.9725M17.4566 4.90059H39.3483C40.8509 4.90059 42.1917 4.94682 43.3938 5.10864C49.7972 5.82527 51.531 8.83047 51.531 17.0601V31.67C51.531 39.8997 49.7972 42.9049 43.3938 43.6215C42.1917 43.7833 40.874 43.8296 39.3483 43.8296H17.4566C15.954 43.8296 14.6132 43.7833 13.4111 43.6215C7.0077 42.9049 5.27393 39.8997 5.27393 31.67V17.0601C5.27393 8.83047 7.0077 5.82527 13.4111 5.10864C14.6132 4.94682 15.954 4.90059 17.4566 4.90059V4.90059Z" stroke="#111111" stroke-width="2.48421" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M17.3066 19.4643H17.3274M24.9352 19.4643H24.956" stroke="#111111" stroke-width="2.48421" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>

              <h2 class="text-2xl pt-8 font-mono">Tecnologias</h2>

            </div>

            <div class="mx-4 flex flex-col justify-center items-center max-w-1/2 md:mb-12 p-20 bg-white drop-shadow-2xl ">
              <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.8071 39.2345V34.4493M24.643 39.2345V29.6641M36.4789 39.2345V24.8558M36.4789 10.8007L35.4155 12.049C29.5136 18.9397 21.6112 23.8201 12.8071 26.0116" stroke="#111111" stroke-width="2.48421" stroke-linecap="round"/>
                <path d="M29.7056 10.8007H36.4788V17.5508" stroke="#111111" stroke-width="2.48421" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M17.7082 48.1345H31.5784C43.1369 48.1345 47.7603 43.5111 47.7603 31.9527V18.0825C47.7603 6.524 43.1369 1.9006 31.5784 1.9006H17.7082C6.14976 1.9006 1.52637 6.524 1.52637 18.0825V31.9527C1.52637 43.5111 6.14976 48.1345 17.7082 48.1345Z" stroke="#111111" stroke-width="2.48421" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>

              <h2 class="text-2xl pt-8 font-mono">Marketing</h2>

            </div>

          </div>
          
        </div>

      </div>

    </section>


    <section class="container m-auto px-6 sm:px-12 lg:px-18">
      
      <div class="relative w-auto flex justify-center items-center bg-black mt-[40rem] sm:mt-[40rem] md:mt-[35rem] lg:mt-[10rem] py-12 mb-12 ">

        <div class=" flex flex-col md:flex-row justify-around gap-4">
          
          <div class="flex justify-center items-center">
            <h2 class="text-white text-3xl md:text-4xl lg:text-6xl ">Vamos falar sobre <br>o seu projeto?</h2>
          </div>
  
          <div class="flex flex-col md:flex-row justify-center items-center gap-4">
            <button class="bg-[#E0CD67]  rounded-lg py-4 px-8 ">Começar</button>
            <button class="bg-white py-4 rounded-lg px-6 ">Saber Mais </button>
          </div>
        </div>

      </div>

    </section>
    

		<section class="container m-auto px-6 sm:px-12 lg:px-18 py-8">
			<div class="text-8xl "><h2 class="flex justify-start text-7xl lg:text-9xl text-gray-300 opacity-70">projetos</h2></div>
			
			<div class="flex justify-around relative">
				<div class="grid grid-cols-1 md:grid-cols-2 gap-4">

					<div class="flex flex-col justify-center items-center p-12 h-auto w-full bg-slate-50">
						<img src="https://s3-alpha-sig.figma.com/img/78d9/5ebf/cd7a63738157b3efd7db25fa60005566?Expires=1672012800&Signature=M0lIYCrr8jwPKLImIpyT6NVNmJDIk6Pet~GXGMKgFD-Zj3lNce~4HtvvkjX~q51iK6nrvqPw8oDZY69iNYPYyknpty-tBvt8SeP4LdjJwNGI6ymbLbIHFVZbnSrdJ7ZK5o-Xun8GpwpzH8GHj~aEWg4cOaxc6Wx3x2vTdI94MUotSSXhK4B9o1M8biqitWoPkDT0xNdfvqK61qHsqB3zxuYI82c11Me~Z23v6EJR139OCbrW-WedAzJUwaQaAPS9hjA8n9RObxaZz~1ETtuu4bF1ZOXxH9dmfen4T9wGfdpY4zxgs8yyhDqwWAq3MEJ6u-~VCH~ZgTBOSzdvmzO1Kw__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA" alt="">
						<h2 class=" text-2xl  text-slate-400">e-commerce</h2>
					</div>

					<div class="flex flex-col justify-center items-center p-12 h-auto w-full bg-slate-50">
						<img src="https://bold-ideas.pt/app/webp-express/webp-images/uploads/2022/10/Frame-12-1.jpg.webp" alt="">
						<h2 class=" text-2xl  text-slate-400">social media</h2>
					</div>
				</div>
			</div>
		</section>


		<section class="container m-auto px-6 sm:px-24 lg:px-28 pb-4 sm:pb-6 md:pb-12 ">
		  <div class="grid grid-cols-1 md:grid-cols-2">

        <div class="flex flex-col justify-center items-start gap-6">
          <h2 class="text-5xl">Vamos trabalhar juntos?</h2>
          <h3 class="text-slate-600">Diariamente ajudamos a impulsar vários negócios. A nossa principal prioridade é cumprir com os objetivos do nossos clientes.</h3>
          <button class="bg-[#E0CD67]  p-4 rounded-xl font-mono">contacte-nos</button>
        </div>	
        <img class="-mt-24 ml-16 md:-mt-0 md:ml-0" src="https://s3-alpha-sig.figma.com/img/fed3/a73d/4fe2893bf78d94b78a113556c92a6e41?Expires=1672012800&Signature=dMsY77Y-HtluuO-3iTYA7~SDafKdXAeAqKvVLAOZo3t76SqaEA6PoERmijQrqpORCOCOqDH99m0Zn9gKw77bOsqNgOafsRqpQeXmI7gKJ~awzwYOU6qUTN2hLkk2L6~52BZJBL1TK9I69UGjeF9SHAv3c~9N14kINjscfZfd2ss15SEuhMrbllltHbZQ4JuHl7KBQaEYbqmJux~Vy0ka53s9S2hucdjGGsw8jpmwBTm6CCyzDvJJkyCXzH9RLb5Ce1tX2D5qrfNhAjeeqx4TKEuvx-3fU7On-nb5cjRlcCllMrajZseXyKW8Lc3JNj8oYuq6TjLf0WZgd1mlHrhR7g__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA">
      </div>
    </section>


    <section class=" bg-white pt-12">
      
      <svg class="absolute" width="151" height="443" viewBox="0 0 151 443" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M36.3717 375.054H-50.7949V451H36.3717V375.054Z" fill="#CECECE" fill-opacity="0.2"/>
        <path d="M-7.17249 1.94343e-05C-38.3756 -0.0154039 -68.8825 9.14962 -94.8345 26.3359C-120.786 43.5221 -141.018 67.9575 -152.969 96.5515C-164.921 125.145 -168.056 156.613 -161.978 186.975C-155.901 217.337 -140.883 245.228 -118.824 267.122C-96.7657 289.016 -68.6577 303.928 -38.0553 309.973C-7.45285 316.017 24.2692 312.923 53.0986 301.08C81.928 289.238 106.57 269.18 123.907 243.443C141.244 217.707 150.498 187.447 150.498 156.493C150.508 135.945 146.437 115.598 138.518 96.6114C130.599 77.6253 118.987 60.3731 104.345 45.8404C89.703 31.3077 72.318 19.7793 53.1835 11.9138C34.0489 4.04838 13.5397 1.68813e-05 -7.17249 1.94343e-05ZM-7.17249 237.117C-23.2687 237.133 -39.0078 232.411 -52.3979 223.549C-65.7879 214.687 -76.2269 202.084 -82.3939 187.334C-88.5608 172.585 -90.1785 156.352 -87.0421 140.69C-83.9056 125.028 -76.1562 110.641 -64.7744 99.3494C-53.3926 88.0583 -38.8902 80.3706 -23.1024 77.2591C-7.31471 74.1477 9.04863 75.7524 23.9167 81.8703C38.7847 87.9881 51.4891 98.344 60.422 111.627C69.3549 124.911 74.1148 140.525 74.0992 156.493C74.0992 177.876 65.5367 198.383 50.2953 213.503C35.0539 228.623 14.3821 237.117 -7.17249 237.117Z" fill="#CECECE" fill-opacity="0.2"/>
      </svg>

      <div class="container m-auto">

        <div class="flex flex-row justify-evenly items-center h-2/3 ">
        
          <div class="grid grid-cols-1 md:grid-cols-2 w-auto h-full md:items-center">
  
            <div class="text-black flex flex-col justify-center items-end md:items-start gap-4">
              <div class="text-2xl font-black"><h2>Contactos </h2></div>
              <div class="flex flex-col gap-3 text-xl ">
                <a href="#">+351 913 149 251</a>
                <a href="#">hello@bold-ideas.pt</a>
                <a class="underline decoration-solid" href="#">www.bold-ideas.pt</a>
                <div class="mt-8 flex flex-rox justify-between">
                  <a href="#"><svg class="h-10 w-auto border-2 px-4 mr-2 py-2 rounded-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg></a>
                  <a href="#"><svg class="h-10 w-auto border-2 px-4 mr-2 py-2 rounded-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></a>
                  <a href="#"><svg class="h-10 w-auto border-2 px-4 mr-2 py-2 rounded-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/></svg></a>
                  <a href="#"><svg class="h-10 w-auto border-2 px-4 mr-2 py-2 rounded-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M232 237.2c31.8-15.2 48.4-38.2 48.4-74 0-70.6-52.6-87.8-113.3-87.8H0v354.4h171.8c64.4 0 124.9-30.9 124.9-102.9 0-44.5-21.1-77.4-64.7-89.7zM77.9 135.9H151c28.1 0 53.4 7.9 53.4 40.5 0 30.1-19.7 42.2-47.5 42.2h-79v-82.7zm83.3 233.7H77.9V272h84.9c34.3 0 56 14.3 56 50.6 0 35.8-25.9 47-57.6 47zm358.5-240.7H376V94h143.7v34.9zM576 305.2c0-75.9-44.4-139.2-124.9-139.2-78.2 0-131.3 58.8-131.3 135.8 0 79.9 50.3 134.7 131.3 134.7 61.3 0 101-27.6 120.1-86.3H509c-6.7 21.9-34.3 33.5-55.7 33.5-41.3 0-63-24.2-63-65.3h185.1c.3-4.2.6-8.7.6-13.2zM390.4 274c2.3-33.7 24.7-54.8 58.5-54.8 35.4 0 53.2 20.8 56.2 54.8H390.4z"/></svg></a>
                </div>
              </div>
            </div>
  
            <div class="">
              <div class="text-3xl font-black mb-6"><h2>Mantenha-se a <br>par das novidades </h2></div>
              <span class="text-md ">Email</span>
              <div class="">
                <input class="py-4 px-10 md:px-12 rounded-xl border-2 " placeholder="Escreva o Seu Email" type="Email"> 
                <button class="py-4 px-10 md:px-12 mx-4 bg-black rounded-xl text-white border-2">subscreva</button> 
              </div>
            </div>
  
          </div>
  
        </div>
      </div>

      <div class="border-solid border-2  flex justify-center text-slate-400 py-8"><p>© 2022 Bold Ideas. All rights reserved.</p></div>

    </section>


  </body>

</html>




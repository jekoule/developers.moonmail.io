<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MoonMail Developers - An Email Platform for Developers</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  <!-- Font Awesome if you need it
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  -->
  <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css">
  <!--Replace with your tailwind.css once created-->

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet">

    <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
    <style>
        .gradient {
            background: linear-gradient(90deg, #2d354d 0%, #2d354d 100%);
        }
    </style>

</head>

<body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">

<!--Nav-->
<nav id="header" class="fixed w-full z-30 top-0 text-white">

    <div class="w-full container mx-auto  flex flex-wrap items-center justify-between mt-0 py-2">
            
        <div class="pl-4 flex items-center">
            <a id="brandname" class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl"  href="#"> 
                @include('larecipe::partials.logo')
            </a>

            <a id="brandnameblack" class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl hidden"  href="#"> 
                @include('larecipe::partials.logoblack')
            </a>
        </div>

        <div class="block lg:hidden pr-4">
            <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-800 hover:border-teal-500 appearance-none focus:outline-none">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
            </button>
        </div>

        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
            
            <ul class="list-reset lg:flex justify-end flex-1 items-center">
                <!--
                <li class="mr-3">
                    <a class="inline-block py-2 px-4 text-black font-bold no-underline" href="#">Active</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#">link</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#">link</a>
                </li>
                -->
            </ul>
        
            <a href="/docs" id="navAction" class="mx-auto lg:mx-0 hover:underline bg-white text-black font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow ">Documentation</a>
        </div>
    </div>
    
    <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
</nav>




<!--Hero-->
<div class="pt-24 bg-center-top bg-no-repeat bg-cover" style="background-image: url('/images/header.png');">

    <div class="container px-12 mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <!--Left Col-->
        <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
            <h1 class="my-4 text-5xl font-bold leading-tight">Build the Ultimate Communication Platform</h1>
            <p class="leading-normal text-2xl mb-8">Be everywhere. Create a high-quality customer experience. Deliver a consistent message across multiple platforms</p>
        
            


            <a href="/docs" class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg">Documentation</a>
            
        </div>
        <!--Right Col-->
        <div class="w-full md:w-3/5 py-6 text-center">
            <img class="w-full md:w-4/5 z-50" src="">
        </div>
        
    </div>

</div>



<section class="bg-white border-b py-8">
    <div class="container max-w-5xl mx-auto m-8">
        <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">An Email Platform for Developers</h1>
        <div class="w-full mb-4">   
            <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        
        <div class="flex flex-wrap flex-col-reverse sm:flex-row">   
            <div class="w-full sm:w-1/2 p-6 mt-6">
                @include('larecipe::partials.world')
            </div>
            <div class="w-full sm:w-1/2 p-6 mt-6">
                <div class="align-middle">
                    <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">Flexible Email Service Solutions</h3>
                    <p class="text-gray-600 mb-8">MoonMail's communication tools are designed API first with programmers and developers in mind.<br /><br />
                </div>
            </div>

        </div>
    </div>
</section>
        



<!-- Change the colour #f8fafc to match the previous section colour -->
<svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
            <g class="wave" fill="#f8fafc">
                <path d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z"></path>
            </g>
            <g transform="translate(1.000000, 15.000000)" fill="#FFFFFF">
                <g transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
                    <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
                    <path d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z" opacity="0.100000001"></path>
                    <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" opacity="0.200000003"></path>
                </g>
            </g>
        </g>
    </g>
</svg>

<section class="container mx-auto text-center py-6 mb-12">

    <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-white">Get Started with MoonMail API for Free</h1>
    <div class="w-full mb-4">   
        <div class="h-1 mx-auto bg-white w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
    </div>

    <h3 class="my-4 text-3xl leading-tight mb-4">Start sending with the most powerful email platform</h3>    
        <br>
    <a href="/docs" class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg">Documentation!</a>
        
</section>


<!--Footer-->
<footer class="bg-white">
    <div class="container mx-auto  px-8">

        <div class="w-full flex flex-col md:flex-row py-6">
                
            <div class="flex-1 mb-6">
            
                <a class="text-orange-600 no-underline hover:no-underline font-bold text-2xl lg:text-4xl"  href="#"> 
                   @include('larecipe::partials.logoblack')
                    
                </a>
            </div>
         
        
            <div class="flex-1">

                <p class="uppercase text-gray-500 md:mb-6">Links</p>
                <ul class="list-reset mb-6">
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="https://support.moonmail.io/en/collections/1841124-faq" class="no-underline hover:underline text-gray-800 hover:text-orange-500">FAQ</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="https://support.moonmail.io/en/collections/1835628-the-platform" class="no-underline hover:underline text-gray-800 hover:text-orange-500">The Platform</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="https://moonmail.io/pricing/" class="no-underline hover:underline text-gray-800 hover:text-orange-500">Pricing</a>
                    </li>
                </ul>
            </div>
            <div class="flex-1">
                <p class="uppercase text-gray-500 md:mb-6">Legal</p>
                <ul class="list-reset mb-6">
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="https://support.moonmail.io/en/articles/3148254-terms-of-service" class="no-underline hover:underline text-gray-800 hover:text-orange-500">Terms</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="https://support.moonmail.io/en/articles/3150678-privacy-policy" class="no-underline hover:underline text-gray-800 hover:text-orange-500">Privacy</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="https://support.moonmail.io/en/articles/3150803-anti-spam-policy" class="no-underline hover:underline text-gray-800 hover:text-orange-500">Anti-Spam Policy</a>
                    </li>
                </ul>
            </div>
            <div class="flex-1">
                <p class="uppercase text-gray-500 md:mb-6">Social</p>
                <ul class="list-reset mb-6">
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="https://www.facebook.com/getmoonmail" class="no-underline hover:underline text-gray-800 hover:text-orange-500">Facebook</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="https://www.linkedin.com/company/10267689" class="no-underline hover:underline text-gray-800 hover:text-orange-500">Linkedin</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="https://www.facebook.com/getmoonmail" class="no-underline hover:underline text-gray-800 hover:text-orange-500">Twitter</a>
                    </li>
                </ul>
            </div>
            <div class="flex-1">
                <p class="uppercase text-gray-500 md:mb-6">Company</p>
                <ul class="list-reset mb-6">
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="https://support.moonmail.io/en/" class="no-underline hover:underline text-gray-800 hover:text-orange-500">Contact</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    
    <a href="https://www.freepik.com/free-photos-vectors/background">Background vector created by freepik - www.freepik.com</a>

</footer>

<script>

    var scrollpos = window.scrollY;
    var header = document.getElementById("header");
    var navcontent = document.getElementById("nav-content");
    var navaction = document.getElementById("navAction");
    var brandname = document.getElementById("brandname");
    var brandnameblack = document.getElementById("brandnameblack");
    var toToggle = document.querySelectorAll(".toggleColour");

    document.addEventListener('scroll', function() {

    /*Apply classes for slide in bar*/
    scrollpos = window.scrollY;

    if(scrollpos > 10){
      brandnameblack.classList.remove("hidden");
      brandname.classList.add("hidden");
      header.classList.add("bg-white");
      navaction.classList.remove("bg-white");
      navaction.classList.add("gradient");
      navaction.classList.remove("text-gray-800");
      navaction.classList.add("text-white");
      //Use to switch toggleColour colours
      for (var i = 0; i < toToggle.length; i++) {
         toToggle[i].classList.add("text-gray-800");
         toToggle[i].classList.remove("text-white");
      }
      header.classList.add("shadow");
      navcontent.classList.remove("bg-gray-100");
      navcontent.classList.add("bg-white");
    }
    else {
      brandnameblack.classList.add("hidden");
      brandname.classList.remove("hidden");
      header.classList.remove("bg-white");
      navaction.classList.remove("gradient");
      navaction.classList.add("bg-white");
      navaction.classList.remove("text-white");
      navaction.classList.add("text-gray-800");
      //Use to switch toggleColour colours
      for (var i = 0; i < toToggle.length; i++) {
         toToggle[i].classList.add("text-white");
         toToggle[i].classList.remove("text-gray-800");
      }
      
      header.classList.remove("shadow");
      navcontent.classList.remove("bg-white");
      navcontent.classList.add("bg-gray-100");
      
    }

    });

    
</script>

<script>
    
    
    /*Toggle dropdown list*/
    /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/
    
    var navMenuDiv = document.getElementById("nav-content");
    var navMenu = document.getElementById("nav-toggle");
    
    document.onclick = check;
    function check(e){
      var target = (e && e.target) || (event && event.srcElement);
      
      //Nav Menu
      if (!checkParent(target, navMenuDiv)) {
        // click NOT on the menu
        if (checkParent(target, navMenu)) {
          // click on the link
          if (navMenuDiv.classList.contains("hidden")) {
            navMenuDiv.classList.remove("hidden");
          } else {navMenuDiv.classList.add("hidden");}
        } else {
          // click both outside link and outside menu, hide menu
          navMenuDiv.classList.add("hidden");
        }
      }
      
    }
    function checkParent(t, elm) {
      while(t.parentNode) {
        if( t == elm ) {return true;}
        t = t.parentNode;
      }
      return false;
    }
</script>


</body>

</html>

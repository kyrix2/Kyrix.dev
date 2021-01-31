<?php
session_start();
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Oussama Kefi | Kyrix's Workshop</title>
  <link rel="icon" href="img/icon.png">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="referrer" content="no-referrer-when-downgrade">
  <!--fonts-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&family=Staatliches&display=swap" rel="stylesheet"> <!-- font-family: 'Rock Salt', cursive; font-family: 'Staatliches', cursive;-->
  <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet"> <!-- font-family: 'Concert One', cursive; -->
  <!--Css & TailwindCss-->
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/d70f8cdd06.js" crossorigin="anonymous"></script>
</head>

<body>
  <header class="header">
    <div class="container mx-auto">
      <nav class="navbar flex justify-between">
        <div class="logo float-left">
          <h1 class="name">OUSSAMA<br/>KEFI<span class="text-yellow-100	">.</span></h1>
          <div class="aka pl-12 grey">
            AKA: KYRIX
          </div>
        </div>
        <ul class="nav-items flex flex-row">
          <a href="index.php#Aboutme"><li class="nav-link inline-block text-white mr-5">ABOUT ME</li></a>
          <a href="index.php#Portfolio"><li class="nav-link inline-block text-white mr-5">PORTFOLIO</li></a>
          <a href=""><li class="nav-link inline-block yellow">CONTACT ME</li></a>
        </ul>
      </nav>
    </div>
  </header>

  <main class="container mx-auto lg:grid grid-cols-2">
    <section class="lg:px-0 px-2">
      <div class="inline-block">
        <p class="text-3xl lg:text-5xl font-medium">Hi! It's me <span class="namefont greeny">OUSSAMA KEFI</span></p>
        <p class="sub-text text-xl lg:text-3xl namefont text-bold">I’M ALSO KNOW AS KYRIX ,THE FRONT-END DEVELOPER</p>
      </div>
        <img src="img/kyrix-emoji.png" class="facemoji lg:inline-block hidden">
        <p class="lg:text-3xl text-xl namefont text-bold lg:mt-16 mt-8 w-3/4">a <span class="yellow">creative</span> guy that helps bussiness deploy their ideas to do better online... <a href="" class="greeny text-xl">Know more >>></a></p>
        <div class="grey pl-12 lg:text-sm aka w-3/4 text-right">
          ABOUT ME
        </div>
    </section>
    <section class="right-svg m-auto">
      <img src="/img/computer-work-5.png" class="svg w-100 w-full hidden lg:block" alt="Main Pic">
    </section>
  </main>
  <div class="mt-16">
    <p class="aka grey text-center p-0">Scroll<br/>Down</p>
    <img src="img/scroll-icon.png" class="w-14 m-auto animate-bounce mt-5">
  </div>
<section class="container mx-auto my-24" id="Aboutme">
  <p class="title text-center text-6xl">
    About Me<span class="yellow">.</span>
  </p>
  <div class="lg:grid grid-cols-0">
    <blockquote class="m-auto p-2 lg:w-2/4 lg:p-0">
    <p class="mt-10 text-center text-xl px-2 font-medium">
      “ I am <span class="font-bold yellow ">Oussama Kefi</span> aka Kyrix, company owner , <span class="font-bold yellow">Web Developer & Designer</span>, I have over 3 years of experience deploying, designing, and coding websites for different businesses. In addition, I am expanding my knowledge to be a Full-Stuck.”
    </p>
    </blockquote>
    <div class="grid grid-cols-2 lg:flex lg:flex-row justify-center mt-16">
      <h2 class="aka grey lg:block hidden">Languages</h2>
      <div class="flex-col lg:m-0 m-auto mb-12">
        <div class="lang orb html">
          <p class="text-center py-2 font-medium">Html</p>
        </div>
      </div>
      <div class="flex-col lg:m-0 m-auto mb-12">
        <div class="lang orb Javascript">
          <p class="text-center py-2 font-medium">Javascript</p>
        </div>
      </div>
      <div class="flex-col lg:m-0 m-auto mb-12">
        <div class="lang orb css">
          <p class="text-center py-2 font-medium">CSS</p>
        </div>
      </div>
      <div class="flex-col lg:m-0 m-auto mb-12">
        <div class="lang orb python">
          <p class="text-center py-2 font-medium">Python</p>
        </div>
      </div>
    </div>
    <div class="grid grid-cols-2 lg:flex lg:flex-row justify-center lg:mt-16 mt-8">
      <h2 class="aka grey lg:block hidden">Framworks</h2>
      <div class="flex-col lg:m-0 m-auto mb-12">
        <div class="lang orb tcss">
          <p class="text-center py-2 font-medium">TailwindCss</p>
        </div>
      </div>
      <div class="flex-col lg:m-0 m-auto mb-12">
        <div class="lang orb reactjs">
          <p class="text-center py-2 font-medium">React Js</p>
        </div>
      </div>
      <div class="flex-col lg:m-0 m-auto mb-6">
        <div class="lang orb bootstrap">
          <p class="text-center py-2 font-medium">Bootstrap</p>
        </div>
      </div>
      <div class="flex-col lg:m-0 m-auto mb-6">
        <div class="lang orb vuejs">
          <p class="text-center py-2 font-medium">VueJs</p>
        </div>
      </div>
    </div>
   </div>
  </div>
  <a href=""><p class="text-center mt-16 fontname greeny">You can check my full resume.</p></a>
</section>

<section class="container mx-auto my-24" id="Portfolio">
  <p class="title text-center text-6xl">
    Portfolio<span class="yellow">.</span>
  </p>
  <p class="text-center text-xl mb-16">You can check all previous works</p>
  <div class="lg:grid lg:grid-cols-3 lg:gap-4 block px-3 lg:p-0">
    <a href="https://wizardnode.com/">
      <div class="wizard rounded-md m-3 mb-10 lg:mb-3 boxs">
        <div class="relative z-10 col-start-1 row-start-1 px-4 pt-40 pb-3 bg-gradient-to-t from-gray-600">
          <h2 class="text-sm font-medium text-white">WizardNode LLC</h2>
          <h2 class="text-xl font-semibold text-white pt-2">
            <img src="/img/html5.png" class="rounded-md w-8 inline-block">
            <img src="/img/css.png" class="rounded-full w-8 inline-block">
            <img src="/img/js.png" class="rounded-full w-8 inline-block">
            <img src="/img/php.jpg" class="rounded-full w-8 inline-block">
            <img src="/img/bootstrap.png" class="rounded-full w-8 inline-block">     
          </h2>
        </div>
      </div>
    </a>
    <!-- . --->
    <a href="https://www.freshkeys.vip/">
      <div class="freshkey rounded-md m-3 mb-10 lg:mb-3 boxs">
        <div class="relative z-10 col-start-1 row-start-1 px-4 pt-40 pb-3 bg-gradient-to-t from-gray-600">
          <h2 class="text-sm font-medium text-white">FreshKeys.VIP</h2>
          <h2 class="text-xl font-semibold text-white pt-2">
            <img src="/img/reactjs.png" class="rounded-full w-8 inline-block">
            <img src="https://www.drupal.org/files/styles/grid-3-2x/public/project-images/screenshot_361.png" class="rounded-full w-8 inline-block">
          </h2>
        </div>
      </div>
    </a>
    <!-- . --->
    <a href="/zerobyte/index.html">
      <div class="zerobyte rounded-md m-3 mb-10 lg:mb-3 boxs">
        <div class="relative z-10 col-start-1 row-start-1 px-4 pt-40 pb-3 bg-gradient-to-t from-gray-600">
          <h2 class="text-sm font-medium text-white">Zerobyte Esport</h2>
          <h2 class="text-xl font-semibold text-white pt-2">
            <img src="/img/html5.png" class="rounded-md w-8 inline-block">
            <img src="/img/css.png" class="rounded-full w-8 inline-block">
            <img src="/img/bootstrap.png" class="rounded-full w-8 inline-block">
          </h2>
        </div>
      </div>
    </a>
    <!-- Row 2 --->
    <a href="/EmpireDesign/index.html">
      <div class="empiredzn rounded-md m-3 mb-10 lg:mb-3">
        <div class="relative z-10 col-start-1 row-start-1 px-4 pt-40 pb-3 bg-gradient-to-t from-gray-600	">
          <h2 class="text-sm font-medium text-white">Empire Design</h2>
          <h2 class="text-xl font-semibold text-white pt-2">
            <img src="/img/html5.png" class="rounded-md w-8 inline-block">
            <img src="/img/css.png" class="rounded-full w-8 inline-block">
            <img src="/img/bootstrap.png" class="rounded-full w-8 inline-block">
            <img src="/img/js.png" class="rounded-full w-8 inline-block">
          </h2>
        </div>
      </div>
    </a>
    <!-- . --->
    <a href="/EmpireDesign/index.html">
      <div class="prod-de-net rounded-md m-3 mb-10 lg:mb-3">
        <div class="relative z-10 col-start-1 row-start-1 px-4 pt-40 pb-3 bg-gradient-to-t from-gray-600	">
          <h2 class="text-sm font-medium text-white">Prof De Net</h2>
          <h2 class="text-xl font-semibold text-white pt-2">
            <img src="/img/php.jpg" class="rounded-full w-8 inline-block">
            <img src="https://www.drupal.org/files/styles/grid-3-2x/public/project-images/screenshot_361.png" class="rounded-full w-8 inline-block">
          </h2>
        </div>
      </div>
    </a>
    <!-- . --->
    <a href="https://immortalnode.com/">
      <div class="immortal rounded-md m-3 lg:mb-3">
        <div class="relative z-10 col-start-1 row-start-1 px-4 pt-40 pb-3 bg-gradient-to-t from-gray-600	">
          <h2 class="text-sm font-medium text-white">ImmortalNode LLC</h2>
          <h2 class="text-xl font-semibold text-white pt-2">
            <img src="/img/html5.png" class="rounded-md w-8 inline-block">
            <img src="/img/css.png" class="rounded-full w-8 inline-block">
            <img src="/img/php.jpg" class="rounded-full w-8 inline-block">
            <img src="/img/bootstrap.png" class="rounded-full w-8 inline-block">
          </h2>
        </div>
      </div>
    </a>
  </div>
  <h2 class="aka text-center grey mt-10">And more little ones...</h2>
</section>

<div class="ready">
  <div class="max-w-screen-xl text-center mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:display lg:items-center lg:justify-between">
    <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-white sm:text-4xl sm:leading-10">
      Ready to work together?
      <br>
      <span class="yellow">Get in touch with me.</span>
    </h2>
    <div class="mt-8 flex justify-center lg:flex-shrink-0 lg:mt-5">
      <div class="block rounded-md shadow">
        <a href="contact.php" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
          Contact Me
        </a>
      </div>
    </div>
  </div>  
</div>
<footer class="text-center pb-5">
    <div class="inline-flex lg:mt-5">
        <a href="https://github.com/kyrixdev" class="mx-5">
          <i class="fab fa-2x fa-github"></i>
        </a>
        <a href="https://www.linkedin.com/in/kyrix/" class="mx-5">
          <i class="fab fa-2x fa-linkedin"></i>
        </a>
        <a href="https://dsc.bio/kyrix" class="mx-5">
          <i class="fab fa-2x fa-discord"></i>
        </a>
        <a href="https://dev.to/kyrix2" class="mx-5">
          <i class="fab fa-2x fa-dev"></i>
        </a>
    </div>
    <p class="line-1 anim-typewriter font-md title greeny">Kyrix.dev <i class="fas fa-code text-white"></i> with <i class="fas fa-heart text-red-500"></i>. </p>
</footer>

</body>
</html>
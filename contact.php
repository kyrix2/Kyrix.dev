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

  <h2 class="text-center font-md mb-8 text-3xl greeny title tracking-wide"> Contact Me </h2>
<!-- component -->
<?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill in the Blanks <i class='fas fa-times-circle'></i>";
                                echo '<div class="bg-red-400 mx-auto p-2 px-5 fit-content rounded w-max">
                                <p class="text-center">
                                '.$Msg.'
                                
                                </div>';
                            }

                            if(isset($_GET['success']))
                            {
                                $Msg = " Your Message Has Been Sent <i class='fas fa-check-circle'></i>";
                                echo '<div class="bg-green-400 mx-auto p-2 px-5 fit-content rounded w-max">
                                <p class="text-center">
                                '.$Msg.'
                                </p>
                                </div>';
                                session_destroy();
                            }
?>
<form action="process.php" method="post" class="w-full max-w-lg mx-auto p-5">
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-200 text-xs font-bold mb-2" for="grid-first-name">
        First Name
      </label>
      <input name="First-name" class="appearance-none block w-full bg-gray-300 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Jane">
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-200 text-xs font-bold mb-2" for="grid-last-name">
        Last Name
      </label>
      <input name="Last-name" class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe">
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-200 text-xs font-bold mb-2" for="grid-password">
        E-mail
      </label>
      <input name="Email" class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" type="email">
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-200 text-xs font-bold mb-2" for="grid-password">
        Message
      </label>
      <textarea name="msg" class=" no-resize appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none" id="message"></textarea>
      <p class="text-gray-600 text-xs italic">Include all details needed.</p>
    </div>
  </div>
  <div class="md:flex md:items-center">
    <div class="md:w-1/3">
      <button class="shadow-md bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-opacity-50 text-white font-bold py-2 px-4 rounded" type="submit" name="btn-send">
        Send
      </button>
    </div>
    <div class="md:w-2/3"></div>
  </div>
</form>

</body>
</html>
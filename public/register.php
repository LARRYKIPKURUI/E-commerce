<?php
// Get the current page filename
$current_page = basename($_SERVER['PHP_SELF']);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe Hub</title>
    <link rel="stylesheet" href="output.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>


<!-- Header goes here -->
<header class="text-gray-400 bg-gray-900 body-font">
  <div class="container flex flex-col flex-wrap items-center p-5 mx-auto md:flex-row">
    <a class="flex items-center mb-4 font-medium text-white title-font md:mb-0">

      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" viewBox="-107.52 -107.52 663.06 663.06" xml:space="preserve" width="38px" height="38px" fill="#000000" transform="rotate(-45)matrix(1, 0, 0, 1, 0, 0)" stroke="#000000" stroke-width="0.44802"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-107.52" y="-107.52" width="663.06" height="663.06" rx="331.53" fill="#91ec7e" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path style="fill:#0071CE;" d="M200.126,161.091c-8.325-17.186-15.836-48.897-44.21-48.897c-28.373,0-48.4,23.367,4.174,67.595 L200.126,161.091z"></path> <path style="fill:#61626b;" d="M437.361,295.545c0-35.48-28.762-64.242-64.242-64.242c-34.559,0-113.951-23.638-155.737-65.423 c-41.786-41.786-64.768,4.357-91.928,4.357c-27.161,0-50.142-20.985-85.661-20.985c-35.518,0-34.473,51.279-34.473,92.02 c0,40.741,0,54.273,0,54.273H437.361z"></path> <path style="fill:#C3C6C8;" d="M217.382,165.88c-41.786-41.786-64.768,4.357-91.928,4.357c-27.161,0-50.142-20.985-85.661-20.985 c-27.653,0-33.142,31.085-34.217,64.078c26.574,3.768,84.781,26.672,105.105,82.215h125.001 c-14.686-59.25,17.115-72.73,43.827-60.756c21.455,9.618,40.715-2.11,42.403-12.509 C286.039,211.824,244.052,192.549,217.382,165.88z"></path> <g> <path style="fill:#0071CE;" d="M165.745,233.867h-57c-4.142,0-7.5-3.358-7.5-7.5c0-4.142,3.358-7.5,7.5-7.5h57 c4.142,0,7.5,3.358,7.5,7.5C173.245,230.509,169.887,233.867,165.745,233.867z"></path> <path style="fill:#0071CE;" d="M181.01,256.711h-57c-4.142,0-7.5-3.358-7.5-7.5c0-4.142,3.358-7.5,7.5-7.5h57 c4.142,0,7.5,3.358,7.5,7.5C188.51,253.353,185.152,256.711,181.01,256.711z"></path> </g> <path style="fill:#00B3E3;" d="M125.454,170.237c-27.161,0-50.142-20.985-85.661-20.985c-12.555,0-20.53,6.42-25.608,16.504 c30.033,5.918,64.411,35.633,108.864,33.708c24.479-1.06,57.639-33.992,93.814-34.09 C175.407,124.491,152.501,170.237,125.454,170.237z"></path> <path style="fill:#E8E8E8;" d="M429.608,289.846h-35.8c-66.146,0-265.817-16.922-326.298-16.922H14.32 c-8.438,0-14.32,6.905-14.32,15.344v32.215c0,8.438,5.882,15.343,14.32,15.343h415.287c10.127,0,18.412-8.286,18.412-18.412v-9.156 C448.02,298.131,439.734,289.846,429.608,289.846z"></path> <path style="fill:#0071CE;" d="M382.12,289.704c-29.316-0.629-74.753-3.306-122.727-6.345c2.492,7.871,3.945,15.984,1.783,21.016 c-2.956,6.879-16.243,20.591-27.504,31.451H376.47C380.882,322.236,384.199,305.694,382.12,289.704z"></path> <path style="fill:#00B3E3;" d="M99.177,311.875H48.51c-4.142,0-7.5-3.358-7.5-7.5c0-4.142,3.358-7.5,7.5-7.5h50.667 c4.142,0,7.5,3.358,7.5,7.5C106.677,308.517,103.319,311.875,99.177,311.875z"></path> <circle style="fill:#00416A;" cx="209.986" cy="185.568" r="7.5"></circle> <circle style="fill:#00416A;" cx="232.673" cy="201.289" r="7.5"></circle> <circle style="fill:#00416A;" cx="257.843" cy="214.945" r="7.501"></circle> </g> </g></svg>
      <span class="ml-3 text-xl text-lime-400">SHOE_HUB</span>
    </a>
    <nav class="flex flex-wrap items-center justify-center text-base md:ml-auto md:mr-auto">
    <a class="mr-5 text-lg hover:underline hover:text-lime-400 <?php if ($current_page === 'index.php') echo 'active:text-orange-500'; ?>" href="index.php">Home</a>
    <a class="mr-5 text-lg hover:underline hover:text-lime-400 <?php if ($current_page === 'shop.php') echo 'active:text-orange-500'; ?>" href="shop.php">Shop</a>
    <a class="mr-5 text-lg hover:underline hover:text-lime-400 <?php if ($current_page === 'about.php') echo 'active:text-orange-500'; ?>" href="about.php">About</a>
    <a class="mr-5 text-lg hover:underline hover:text-lime-400 <?php if ($current_page === 'contact.php') echo 'active:text-orange-500'; ?>" href="contact.php">Contact</a>
</nav>

<a  class="hover:underline hover:text-lime-400 text-lg <?php if ($current_page === 'index.php') echo 'active:text-orange-500'; ?>" href="shopping_cart.php">
    <button class="inline-flex items-center px-3 py-1 mt-3 text-base bg-gray-900 border-0 rounded focus:outline-none md:mt-0">Shopping Cart
    <img src="images/cart.png" class="cart" alt="Cart Icon" id="cartIcon">
      
    </button>
 </a>
</header>
<!-- Header ends here -->

<section class="pb-5 text-gray-400 bg-gray-800 body-font">
  <div class="container flex flex-wrap items-center px-5 mx-auto py-19 ">
    <div class="pr-0 lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0">
      <h1 class="text-3xl font-medium text-white title-font">Welcome to Shoe Hub</h1>
      <p class="mt-4 leading-relaxed">Your ultimate destination for the latest footwear trends and iconic brands.
      To ensure a smooth registration process, please make sure to follow these guidelines: Your username should be more than 3 characters long, your email address must be valid, and your password must contain at least one uppercase letter, one
       lowercase letter, one number, and be at least 6 characters long. Additionally, please ensure that your password matches the confirmation password field before submitting. Once you've met these criteria, you're ready to step into the world of
        Shoe Hub and explore our extensive collection of stylish footwear. Let's get you signed up and ready to walk in style!
      </p>
    </div>
    <div class="flex flex-col w-full p-8 bg-opacity-50 rounded-lg bg-9 gray-800 mt- lg:w-2/5 md:w-1/2 md:ml-auto md:mt-0">
      <h2 class="mb-2 text-lg font-medium text-white title-font">Sign Up</h2>
      <div class="relative mb-4">
        <label for="full-name" class="text-sm leading-7 text-gray-400">Username</label>
        <input type="text" id="full-name" name="username" class="w-full px-3 py-1 text-base leading-8 text-gray-100 transition-colors duration-200 ease-in-out bg-gray-600 border border-gray-600 rounded outline-none bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-indigo-900 focus:border-indigo-500">
      </div>
      <div class="relative mb-4">
        <label for="email" class="text-sm leading-7 text-gray-400">Email</label>
        <input type="email" id="email" name="email" class="w-full px-3 py-1 text-base leading-8 text-gray-100 transition-colors duration-200 ease-in-out bg-gray-600 border border-gray-600 rounded outline-none bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-indigo-900 focus:border-indigo-500">
      </div>
      <div class="relative mb-4">
        <label for="email" class="text-sm leading-7 text-gray-400">Password</label>
        <input type="email" id="password" name="password" class="w-full px-3 py-1 text-base leading-8 text-gray-100 transition-colors duration-200 ease-in-out bg-gray-600 border border-gray-600 rounded outline-none bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-indigo-900 focus:border-indigo-500">
      </div>
      <div class="relative mb-4">
        <label for="email" class="text-sm leading-7 text-gray-400">Confirm Password</label>
        <input type="email" id="confirm_password" name="confirm_password" class="w-full px-3 py-1 text-base leading-8 text-gray-100 transition-colors duration-200 ease-in-out bg-gray-600 border border-gray-600 rounded outline-none bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-indigo-900 focus:border-indigo-500">
      </div>
      <button class="px-8 py-2 text-lg text-white bg-indigo-500 border-0 rounded focus:outline-none hover:bg-indigo-600">Sign Up</button>
      <p class="mt-3 text-xs">If you already have an account, <a href="login.php" class="text-indigo-400">Login here</a>.</p>
    </div>
  </div>
</section>
</body>
</html>

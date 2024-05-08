<?php
// Start or resume the current session
session_start();

// Check if the session variable 'username' is not set
if (!isset($_SESSION['username'])) {
    // Redirect the user to index.php to deny access of page since they have not logged in
    header("Location: index.php");
    exit; // Terminate script execution to ensure the redirect takes effect
}


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
    <a class="mr-5 text-lg hover:underline hover:text-lime-400 <?php if ($current_page === 'index.php') echo 'active:text-orange-500'; ?>" href="home.php">Home</a>
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

<!-- Services offered by thee shoe hub-->
<section class="py-12 bg-gray-100">
    <div class="container mx-auto">
      <h3 class="flex flex-col items-center pb-5 text-3xl font-bold text-black">Our Services</h3>
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
            <!-- First Row -->
            <div class="flex flex-col items-center p-6 bg-white rounded-lg shadow-md md:flex-row">
                <img src="images/shipping.png" alt="Shipping Icon" class="w-12 h-12 mb-4 md:mb-0 md:mr-4">
                <div>
                    <h3 class="text-lg font-semibold">Free Shipping</h3>
                    <p class="text-gray-600">
                        Enjoy the convenience of free shipping on all orders. 
                        Your satisfaction is our priority, and we deliver to 
                        your doorstep without any additional cost.
                    </p>
                </div>
            </div>

            <div class="flex flex-col items-center p-6 bg-white rounded-lg shadow-md md:flex-row">
                <img src="images/track.png" alt="Location Icon" class="w-12 h-12 mb-4 md:mb-0 md:mr-4">
                <div>
                    <h3 class="text-lg font-semibold">Order Tracking</h3>
                    <p class="text-gray-600">
                        Stay in control with our seamless order tracking system. 
                        Monitor your purchase every step of the way, from confirmation
                        to delivery, for a worry-free shopping experience. 
                    </p>
                </div>
            </div>
            <!-- Second Row -->
            <div class="flex flex-col items-center p-6 mt-8 bg-white rounded-lg shadow-md md:flex-row md:mt-0">
                <img src="images/secuity.png" alt="Security Icon" class="w-12 h-12 mb-4 md:mb-0 md:mr-4">
                <div>
                    <h3 class="text-lg font-semibold">Secure Payments</h3>
                    <p class="text-gray-600">
                        Our payment system ensures secure transactions
                        and protects sensitive information for every purchase.
                    </p>
                </div>
            </div>

            <div class="flex flex-col items-center p-6 mt-8 bg-white rounded-lg shadow-md md:flex-row md:mt-0">
                <img src="images/return.png" alt="Returns Icon" class="w-12 h-12 mb-4 md:mb-0 md:mr-4">
                <div>
                    <h3 class="text-lg font-semibold">100% Return on Money</h3>
                    <p class="text-gray-600">
                        We guarantee a hassle-free return policy. 
                        If you're not completely satisfied, we'll 
                        give you a full refund, no questions asked. 
                        Our commitment is your satisfaction.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- About us content -->
<div class="font-[sans-serif] text-gray-800 bg-gray-100 px-6 py-12 text-2xl">
      <div class="mb-12 text-center">
        <h2 class="text-4xl font-extrabold">About Shoe Hub</h2>
      </div>
      <div class="grid gap-12 mx-auto lg:grid-cols-2 max-lg:max-w-2xl">
        <div>
          <p class="mb-4 text-sm">Welcome to [Your Shoe Hub], where footwear meets passion! Founded by [Your Name/Team] with a deep love for shoes and a vision to create a hub where every step tells a story, we're here to revolutionize the way you shop for footwear</p>
          <p class="mb-4 text-sm">At [Your Shoe Hub], we believe that shoes are more than just a necessity; they're a statement, an expression of style, comfort, and individuality. Whether you're strutting the city streets, hitting the gym, or stepping onto the dance floor,
             the right pair of shoes can elevate your confidence and performance.</p>
          <p class="text-sm">What sets us apart is our commitment to offering a curated selection of the finest footwear from around the globe. From iconic brands to emerging designers, we handpick each pair to ensure unparalleled quality, style, and comfort.</p>
          <div class="grid gap-8 mt-12 xl:grid-cols-3 sm:grid-cols-2">
            
            <div class="flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" class="fill-green-500 shrink-0" viewBox="0 0 24 24">
                <path d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z" data-original="#000000"></path>
              </svg>
              <h6 class="ml-4 text-base font-semibold">Customization of products</h6>
            </div>
            <div class="flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" class="fill-green-500 shrink-0" viewBox="0 0 24 24">
                <path d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z" data-original="#000000"></path>
              </svg>
              <h6 class="ml-4 text-base font-semibold">Security of Product</h6>
            </div>
            <div class="flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" class="fill-green-500 shrink-0" viewBox="0 0 24 24">
                <path d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z" data-original="#000000"></path>
              </svg>
              <h6 class="ml-4 text-base font-semibold">Customer Support</h6>
            </div>
            <div class="flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" class="fill-green-500 shrink-0" viewBox="0 0 24 24">
                <path d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z" data-original="#000000"></path>
              </svg>
              <h6 class="ml-4 text-base font-semibold">Adaptive to Trend</h6>
            </div>
            <div class="flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" class="fill-green-500 shrink-0" viewBox="0 0 24 24">
                <path d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z" data-original="#000000"></path>
              </svg>
              <h6 class="ml-4 text-base font-semibold">Good Delivery</h6>
            </div>
            <div class="flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" class="fill-green-500 shrink-0" viewBox="0 0 24 24">
                <path d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z" data-original="#000000"></path>
              </svg>
              <h6 class="ml-4 text-base font-semibold">Solid Communication</h6>
            </div>
          </div>
        </div>
        <div>
          <p class="mb-4 text-sm">But [Your Shoe Hub] is more than just a marketplace. It's a community—a gathering place for fellow shoe lovers to connect, share stories, and celebrate our passion for footwear. Whether you're a sneakerhead, a fashionista, or simply someone who appreciates a good pair of shoes, you're welcome here.</p>
          <p class="mb-4 text-sm">As we continue to grow, our dedication to customer satisfaction remains unwavering. With fast shipping, hassle-free returns, and personalized customer service, we're committed to making your shopping experience with us as seamless and enjoyable as possible.</p>
          <p class="text-sm">Thank you for choosing [Your Shoe Hub] as your destination for all things footwear. We're excited to be part of your journey, one step at a time.Step into style. Step into comfort. Step into [Your Shoe Hub]</p>
        </div>
      </div>
    </div>









<!-- My Testimonials-->
<div class="my-6 font-[sans-serif] text-[#333]">
            <div class="max-w-3xl mx-auto mb-16 text-center mb-">
                <h2 class="text-3xl font-extrabold">Testimonials</h2>
                <p class="mt-4 text-sm leading-relaxed">"Shoe Hub: Where sneaker enthusiasts find their sole satisfaction."<br>"Discover the perfect fit at Shoe Hub, where style meets comfort and performance."</p>
            </div>
            <div class="max-w-4xl mx-auto space-y-16">
                <div class="grid gap-4 md:grid-cols-3">
                    <div class="flex">
                        <img src='https://readymadeui.com/profile_2.webp' class="w-10 h-10 rounded-full" />
                        <div class="ml-4 text-left">
                            <p class="text-sm font-extrabold">Kefa Panda</p>
                            <p class="text-xs text-gray-400">panda34@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <p class="text-sm leading-relaxed">I've put Shoe Hub to the test, and it's passed with flying colors. Whether I'm hitting the gym or pounding the pavement, their selection of performance footwear
                           has never let me down. The durability and support of their shoes have helped me achieve my fitness goals without compromising on style</p>
                    </div>
                </div>
                <div class="grid gap-4 md:grid-cols-3">
                    <div class="flex">
                        <img src='https://readymadeui.com/profile_3.webp' class="w-10 h-10 rounded-full" />
                        <div class="ml-4 text-left">
                            <p class="text-sm font-extrabold">Boru Martin</p>
                            <p class="text-xs text-gray-400">borumart@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <p class="text-sm leading-relaxed">I stumbled upon Shoe Hub while searching for a specific pair of limited edition sneakers, and I was blown away by the selection. Not only did I find what I
                           was looking for, but the seamless shopping experience and lightning-fast delivery exceeded my expectations. Shoe Hub is now my go-to destination for all my sneaker cravings.</p>
                    </div>
                </div>
                <div class="grid gap-4 md:grid-cols-3">
                    <div class="flex">
                        <img src='https://readymadeui.com/profile_4.webp' class="w-10 h-10 rounded-full" />
                        <div class="ml-4 text-left">
                            <p class="text-sm font-extrabold">Simon Konecki</p>
                            <p class="text-xs text-gray-400">simon23@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <p class="text-sm leading-relaxed">As someone who values both style and comfort, I've always struggled to find shoes that strike the perfect balance. That is until I discovered Shoe Hub.
                           From trendy designs to premium materials, every pair I've purchased has exceeded my expectations. Plus, their easy returns policy gives me peace of mind with every purchase. Shoe Hub has become my ultimate style secret</p>
                    </div>
                </div>
            </div>
        </div>



        <footer class="bg-gray-900 py-8 px-10 font-[sans-serif]">
      <div class="md:max-w-[50%] mx-auto text-center">
      <a class="flex items-center mb-4 font-medium text-white title-font md:mb-0">

      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" viewBox="-107.52 -107.52 663.06 663.06" xml:space="preserve" width="38px" height="38px" fill="#000000" transform="rotate(-45)matrix(1, 0, 0, 1, 0, 0)" stroke="#000000" stroke-width="0.44802"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-107.52" y="-107.52" width="663.06" height="663.06" rx="331.53" fill="#91ec7e" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path style="fill:#0071CE;" d="M200.126,161.091c-8.325-17.186-15.836-48.897-44.21-48.897c-28.373,0-48.4,23.367,4.174,67.595 L200.126,161.091z"></path> <path style="fill:#61626b;" d="M437.361,295.545c0-35.48-28.762-64.242-64.242-64.242c-34.559,0-113.951-23.638-155.737-65.423 c-41.786-41.786-64.768,4.357-91.928,4.357c-27.161,0-50.142-20.985-85.661-20.985c-35.518,0-34.473,51.279-34.473,92.02 c0,40.741,0,54.273,0,54.273H437.361z"></path> <path style="fill:#C3C6C8;" d="M217.382,165.88c-41.786-41.786-64.768,4.357-91.928,4.357c-27.161,0-50.142-20.985-85.661-20.985 c-27.653,0-33.142,31.085-34.217,64.078c26.574,3.768,84.781,26.672,105.105,82.215h125.001 c-14.686-59.25,17.115-72.73,43.827-60.756c21.455,9.618,40.715-2.11,42.403-12.509 C286.039,211.824,244.052,192.549,217.382,165.88z"></path> <g> <path style="fill:#0071CE;" d="M165.745,233.867h-57c-4.142,0-7.5-3.358-7.5-7.5c0-4.142,3.358-7.5,7.5-7.5h57 c4.142,0,7.5,3.358,7.5,7.5C173.245,230.509,169.887,233.867,165.745,233.867z"></path> <path style="fill:#0071CE;" d="M181.01,256.711h-57c-4.142,0-7.5-3.358-7.5-7.5c0-4.142,3.358-7.5,7.5-7.5h57 c4.142,0,7.5,3.358,7.5,7.5C188.51,253.353,185.152,256.711,181.01,256.711z"></path> </g> <path style="fill:#00B3E3;" d="M125.454,170.237c-27.161,0-50.142-20.985-85.661-20.985c-12.555,0-20.53,6.42-25.608,16.504 c30.033,5.918,64.411,35.633,108.864,33.708c24.479-1.06,57.639-33.992,93.814-34.09 C175.407,124.491,152.501,170.237,125.454,170.237z"></path> <path style="fill:#E8E8E8;" d="M429.608,289.846h-35.8c-66.146,0-265.817-16.922-326.298-16.922H14.32 c-8.438,0-14.32,6.905-14.32,15.344v32.215c0,8.438,5.882,15.343,14.32,15.343h415.287c10.127,0,18.412-8.286,18.412-18.412v-9.156 C448.02,298.131,439.734,289.846,429.608,289.846z"></path> <path style="fill:#0071CE;" d="M382.12,289.704c-29.316-0.629-74.753-3.306-122.727-6.345c2.492,7.871,3.945,15.984,1.783,21.016 c-2.956,6.879-16.243,20.591-27.504,31.451H376.47C380.882,322.236,384.199,305.694,382.12,289.704z"></path> <path style="fill:#00B3E3;" d="M99.177,311.875H48.51c-4.142,0-7.5-3.358-7.5-7.5c0-4.142,3.358-7.5,7.5-7.5h50.667 c4.142,0,7.5,3.358,7.5,7.5C106.677,308.517,103.319,311.875,99.177,311.875z"></path> <circle style="fill:#00416A;" cx="209.986" cy="185.568" r="7.5"></circle> <circle style="fill:#00416A;" cx="232.673" cy="201.289" r="7.5"></circle> <circle style="fill:#00416A;" cx="257.843" cy="214.945" r="7.501"></circle> </g> </g></svg>
      <span class="ml-3 text-xl text-lime-400">SHOE_HUB</span>
      </a>
        <p class="mt-8 text-sm text-gray-400">"Shoes aren't just accessories; they're the silent storytellers of our journeys,
           each step a chapter, every scuff a memory, and every shine a reflection of the paths we've tread." <a href="about.php" class="text-sm font-semibold text-blue-500">Read
            more...</a></p>
        <ul class="mt-6">
          <li class="space-x-4">
            <a href='javascript:void(0)'>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="inline w-6 h-6 fill-blue-500" viewBox="0 0 24 24">
                <path fill-rule="evenodd"
                  d="M19 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7v-7h-2v-3h2V8.5A3.5 3.5 0 0 1 15.5 5H18v3h-2a1 1 0 0 0-1 1v2h3v3h-3v7h4a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2z"
                  clip-rule="evenodd" />
              </svg>
            </a>
            <a href='javascript:void(0)'>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="inline w-6 h-6 fill-blue-500"
                viewBox="0 0 24 24">
                <path fill-rule="evenodd"
                  d="M21 5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5zm-2.5 8.2v5.3h-2.79v-4.93a1.4 1.4 0 0 0-1.4-1.4c-.77 0-1.39.63-1.39 1.4v4.93h-2.79v-8.37h2.79v1.11c.48-.78 1.47-1.3 2.32-1.3 1.8 0 3.26 1.46 3.26 3.26zM6.88 8.56a1.686 1.686 0 0 0 0-3.37 1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68zm1.39 1.57v8.37H5.5v-8.37h2.77z"
                  clip-rule="evenodd" />
              </svg>
            </a>
            <a href='javascript:void(0)'>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="inline w-6 h-6 fill-blue-500"
                viewBox="0 0 24 24">
                <path
                  d="M12 9.3a2.7 2.7 0 1 0 0 5.4 2.7 2.7 0 0 0 0-5.4Zm0-1.8a4.5 4.5 0 1 1 0 9 4.5 4.5 0 0 1 0-9Zm5.85-.225a1.125 1.125 0 1 1-2.25 0 1.125 1.125 0 0 1 2.25 0ZM12 4.8c-2.227 0-2.59.006-3.626.052-.706.034-1.18.128-1.618.299a2.59 2.59 0 0 0-.972.633 2.601 2.601 0 0 0-.634.972c-.17.44-.265.913-.298 1.618C4.805 9.367 4.8 9.714 4.8 12c0 2.227.006 2.59.052 3.626.034.705.128 1.18.298 1.617.153.392.333.674.632.972.303.303.585.484.972.633.445.172.918.267 1.62.3.993.047 1.34.052 3.626.052 2.227 0 2.59-.006 3.626-.052.704-.034 1.178-.128 1.617-.298.39-.152.674-.333.972-.632.304-.303.485-.585.634-.972.171-.444.266-.918.299-1.62.047-.993.052-1.34.052-3.626 0-2.227-.006-2.59-.052-3.626-.034-.704-.128-1.18-.299-1.618a2.619 2.619 0 0 0-.633-.972 2.595 2.595 0 0 0-.972-.634c-.44-.17-.914-.265-1.618-.298-.993-.047-1.34-.052-3.626-.052ZM12 3c2.445 0 2.75.009 3.71.054.958.045 1.61.195 2.185.419A4.388 4.388 0 0 1 19.49 4.51c.457.45.812.994 1.038 1.595.222.573.373 1.227.418 2.185.042.96.054 1.265.054 3.71 0 2.445-.009 2.75-.054 3.71-.045.958-.196 1.61-.419 2.185a4.395 4.395 0 0 1-1.037 1.595 4.44 4.44 0 0 1-1.595 1.038c-.573.222-1.227.373-2.185.418-.96.042-1.265.054-3.71.054-2.445 0-2.75-.009-3.71-.054-.958-.045-1.61-.196-2.185-.419A4.402 4.402 0 0 1 4.51 19.49a4.414 4.414 0 0 1-1.037-1.595c-.224-.573-.374-1.227-.419-2.185C3.012 14.75 3 14.445 3 12c0-2.445.009-2.75.054-3.71s.195-1.61.419-2.185A4.392 4.392 0 0 1 4.51 4.51c.45-.458.994-.812 1.595-1.037.574-.224 1.226-.374 2.185-.419C9.25 3.012 9.555 3 12 3Z" />
              </svg>
            </a>
            <a href='javascript:void(0)'>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="inline w-6 h-6 fill-blue-500"
                viewBox="0 0 24 24">
                <path
                  d="m10 15 5.19-3L10 9v6zm11.56-7.83c.13.47.22 1.1.28 1.9.07.8.1 1.49.1 2.09L22 12c0 2.19-.16 3.8-.44 4.83-.25.9-.83 1.48-1.73 1.73-.47.13-1.33.22-2.65.28-1.3.07-2.49.1-3.59.1L12 19c-4.19 0-6.8-.16-7.83-.44-.9-.25-1.48-.83-1.73-1.73-.13-.47-.22-1.1-.28-1.9-.07-.8-.1-1.49-.1-2.09L2 12c0-2.19.16-3.8.44-4.83.25-.9.83-1.48 1.73-1.73.47-.13 1.33-.22 2.65-.28 1.3-.07 2.49-.1 3.59-.1L12 5c4.19 0 6.8.16 7.83.44.9.25 1.48.83 1.73 1.73z" />
              </svg>
            </a>
            <a href='javascript:void(0)'>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="inline w-6 h-6 fill-blue-500"
                viewBox="0 0 24 24">
                <path
                  d="M22.92 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.83 4.5 17.72 4 16.46 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98-3.56-.18-6.73-1.89-8.84-4.48-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.9 20.29 6.16 21 8.58 21c7.88 0 12.21-6.54 12.21-12.21 0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z" />
              </svg>
            </a>
          </li>
        </ul>
      </div>
      <ul class="grid gap-12 mt-16 max-sm:grid-cols-1 max-lg:grid-cols-2 lg:grid-cols-4">
        <li class="flex items-center">
          <div class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill='#007bff' viewBox="0 0 482.6 482.6">
              <path
                d="M98.339 320.8c47.6 56.9 104.9 101.7 170.3 133.4 24.9 11.8 58.2 25.8 95.3 28.2 2.3.1 4.5.2 6.8.2 24.9 0 44.9-8.6 61.2-26.3.1-.1.3-.3.4-.5 5.8-7 12.4-13.3 19.3-20 4.7-4.5 9.5-9.2 14.1-14 21.3-22.2 21.3-50.4-.2-71.9l-60.1-60.1c-10.2-10.6-22.4-16.2-35.2-16.2-12.8 0-25.1 5.6-35.6 16.1l-35.8 35.8c-3.3-1.9-6.7-3.6-9.9-5.2-4-2-7.7-3.9-11-6-32.6-20.7-62.2-47.7-90.5-82.4-14.3-18.1-23.9-33.3-30.6-48.8 9.4-8.5 18.2-17.4 26.7-26.1 3-3.1 6.1-6.2 9.2-9.3 10.8-10.8 16.6-23.3 16.6-36s-5.7-25.2-16.6-36l-29.8-29.8c-3.5-3.5-6.8-6.9-10.2-10.4-6.6-6.8-13.5-13.8-20.3-20.1-10.3-10.1-22.4-15.4-35.2-15.4-12.7 0-24.9 5.3-35.6 15.5l-37.4 37.4c-13.6 13.6-21.3 30.1-22.9 49.2-1.9 23.9 2.5 49.3 13.9 80 17.5 47.5 43.9 91.6 83.1 138.7zm-72.6-216.6c1.2-13.3 6.3-24.4 15.9-34l37.2-37.2c5.8-5.6 12.2-8.5 18.4-8.5 6.1 0 12.3 2.9 18 8.7 6.7 6.2 13 12.7 19.8 19.6 3.4 3.5 6.9 7 10.4 10.6l29.8 29.8c6.2 6.2 9.4 12.5 9.4 18.7s-3.2 12.5-9.4 18.7c-3.1 3.1-6.2 6.3-9.3 9.4-9.3 9.4-18 18.3-27.6 26.8l-.5.5c-8.3 8.3-7 16.2-5 22.2.1.3.2.5.3.8 7.7 18.5 18.4 36.1 35.1 57.1 30 37 61.6 65.7 96.4 87.8 4.3 2.8 8.9 5 13.2 7.2 4 2 7.7 3.9 11 6 .4.2.7.4 1.1.6 3.3 1.7 6.5 2.5 9.7 2.5 8 0 13.2-5.1 14.9-6.8l37.4-37.4c5.8-5.8 12.1-8.9 18.3-8.9 7.6 0 13.8 4.7 17.7 8.9l60.3 60.2c12 12 11.9 25-.3 37.7-4.2 4.5-8.6 8.8-13.3 13.3-7 6.8-14.3 13.8-20.9 21.7-11.5 12.4-25.2 18.2-42.9 18.2-1.7 0-3.5-.1-5.2-.2-32.8-2.1-63.3-14.9-86.2-25.8-62.2-30.1-116.8-72.8-162.1-127-37.3-44.9-62.4-86.7-79-131.5-10.3-27.5-14.2-49.6-12.6-69.7z"
                data-original="#000000" />
            </svg>
          </div>
          <a href="javascript:void(0)" class="ml-3 text-sm text-blue-500">
            <small class="block">Tel</small>
            <strong>+254 742009797</strong>
          </a>
        </li>
        <li class="flex items-center">
          <div class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill='#007bff' viewBox="0 0 479.058 479.058">
              <path
                d="M434.146 59.882H44.912C20.146 59.882 0 80.028 0 104.794v269.47c0 24.766 20.146 44.912 44.912 44.912h389.234c24.766 0 44.912-20.146 44.912-44.912v-269.47c0-24.766-20.146-44.912-44.912-44.912zm0 29.941c2.034 0 3.969.422 5.738 1.159L239.529 264.631 39.173 90.982a14.902 14.902 0 0 1 5.738-1.159zm0 299.411H44.912c-8.26 0-14.971-6.71-14.971-14.971V122.615l199.778 173.141c2.822 2.441 6.316 3.655 9.81 3.655s6.988-1.213 9.81-3.655l199.778-173.141v251.649c-.001 8.26-6.711 14.97-14.971 14.97z"
                data-original="#000000" />
            </svg>
          </div>
          <a href="javascript:void(0)" class="ml-3 text-sm text-blue-500">
            <small class="block">Mail</small>
            <strong>larrykipkurui12@gmail.com</strong>
          </a>
        </li>
        <li class="flex items-center">
          <div class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill='#007bff' viewBox="0 0 368.16 368.16">
              <path
                d="M184.08 0c-74.992 0-136 61.008-136 136 0 24.688 11.072 51.24 11.536 52.36 3.576 8.488 10.632 21.672 15.72 29.4l93.248 141.288c3.816 5.792 9.464 9.112 15.496 9.112s11.68-3.32 15.496-9.104l93.256-141.296c5.096-7.728 12.144-20.912 15.72-29.4.464-1.112 11.528-27.664 11.528-52.36 0-74.992-61.008-136-136-136zM293.8 182.152c-3.192 7.608-9.76 19.872-14.328 26.8l-93.256 141.296c-1.84 2.792-2.424 2.792-4.264 0L88.696 208.952c-4.568-6.928-11.136-19.2-14.328-26.808-.136-.328-10.288-24.768-10.288-46.144 0-66.168 53.832-120 120-120s120 53.832 120 120c0 21.408-10.176 45.912-10.28 46.152z"
                data-original="#000000" />
              <path
                d="M184.08 64.008c-39.704 0-72 32.304-72 72s32.296 72 72 72 72-32.304 72-72-32.296-72-72-72zm0 128c-30.872 0-56-25.12-56-56s25.128-56 56-56 56 25.12 56 56-25.128 56-56 56z"
                data-original="#000000" />
            </svg>
          </div>
          <a href="javascript:void(0)" class="ml-3 text-sm text-blue-500">
            <small class="block">Address</small>
            <strong>Nairobi, Kenya</strong>
          </a>
        </li>
        <li class="flex items-center">
          <div class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill='#007bff' viewBox="0 0 100 100">
              <path
                d="M83 23h-3V11c0-3.309-2.692-6-6-6H26c-3.308 0-6 2.691-6 6v12h-3C8.729 23 2 29.729 2 38v30c0 4.963 4.037 9 9 9h9v12c0 3.309 2.692 6 6 6h48c3.308 0 6-2.691 6-6V77h9c4.963 0 9-4.037 9-9V38c0-8.271-6.729-15-15-15zM26 11h48v12H26zm0 78V59h48v30zm66-21c0 1.654-1.345 3-3 3h-9V59h3a3 3 0 1 0 0-6H17a3 3 0 1 0 0 6h3v12h-9c-1.655 0-3-1.346-3-3V38c0-4.963 4.037-9 9-9h66c4.963 0 9 4.037 9 9zm-27 0a3 3 0 0 1-3 3H38a3 3 0 1 1 0-6h24a3 3 0 0 1 3 3zm0 12a3 3 0 0 1-3 3H38a3 3 0 1 1 0-6h24a3 3 0 0 1 3 3zm21-42a3 3 0 0 1-3 3h-6a3 3 0 1 1 0-6h6a3 3 0 0 1 3 3z"
                data-original="#000000" />
            </svg>
          </div>
          <a href="javascript:void(0)" class="ml-3 text-sm text-blue-500">
            <small class="block">Fax</small>
            <strong>+1-548-2588</strong>
          </a>
        </li>
      </ul>
      <hr class="my-8 border-gray-300" />
      <div class="md:flex md:item-center">
        <ul class="flex flex-wrap gap-4">
          <li class="text-sm">
            <a href='javascript:void(0)' class='font-semibold text-blue-500 hover:underline'>Terms of Service</a>
          </li>
          <li class="text-sm">
            <a href='javascript:void(0)' class='font-semibold text-blue-500 hover:underline'>Privacy Policy</a>
          </li>
          <li class="text-sm">
            <a href='javascript:void(0)' class='font-semibold text-blue-500 hover:underline'>Security</a>
          </li>
        </ul>
        <p class='ml-auto text-sm text-gray-400 max-md:mt-4'>Copyright © 2024<a href='https://readymadeui.com/'
          target='_blank' class="mx-1 hover:underline">THIS_BE_LARRY</a><br>All Rights Reserved.</p>
      </div>
    </footer>


</body>

</html>
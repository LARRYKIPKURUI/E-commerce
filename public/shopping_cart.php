<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="output.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<header class="text-gray-400 bg-gray-900 body-font">
  <div class="container flex flex-col flex-wrap items-center p-5 mx-auto md:flex-row">
    <a class="flex items-center mb-4 font-medium text-white title-font md:mb-0">

      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" viewBox="-107.52 -107.52 663.06 663.06" xml:space="preserve" width="38px" height="38px" fill="#000000" transform="rotate(-45)matrix(1, 0, 0, 1, 0, 0)" stroke="#000000" stroke-width="0.44802"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-107.52" y="-107.52" width="663.06" height="663.06" rx="331.53" fill="#91ec7e" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path style="fill:#0071CE;" d="M200.126,161.091c-8.325-17.186-15.836-48.897-44.21-48.897c-28.373,0-48.4,23.367,4.174,67.595 L200.126,161.091z"></path> <path style="fill:#61626b;" d="M437.361,295.545c0-35.48-28.762-64.242-64.242-64.242c-34.559,0-113.951-23.638-155.737-65.423 c-41.786-41.786-64.768,4.357-91.928,4.357c-27.161,0-50.142-20.985-85.661-20.985c-35.518,0-34.473,51.279-34.473,92.02 c0,40.741,0,54.273,0,54.273H437.361z"></path> <path style="fill:#C3C6C8;" d="M217.382,165.88c-41.786-41.786-64.768,4.357-91.928,4.357c-27.161,0-50.142-20.985-85.661-20.985 c-27.653,0-33.142,31.085-34.217,64.078c26.574,3.768,84.781,26.672,105.105,82.215h125.001 c-14.686-59.25,17.115-72.73,43.827-60.756c21.455,9.618,40.715-2.11,42.403-12.509 C286.039,211.824,244.052,192.549,217.382,165.88z"></path> <g> <path style="fill:#0071CE;" d="M165.745,233.867h-57c-4.142,0-7.5-3.358-7.5-7.5c0-4.142,3.358-7.5,7.5-7.5h57 c4.142,0,7.5,3.358,7.5,7.5C173.245,230.509,169.887,233.867,165.745,233.867z"></path> <path style="fill:#0071CE;" d="M181.01,256.711h-57c-4.142,0-7.5-3.358-7.5-7.5c0-4.142,3.358-7.5,7.5-7.5h57 c4.142,0,7.5,3.358,7.5,7.5C188.51,253.353,185.152,256.711,181.01,256.711z"></path> </g> <path style="fill:#00B3E3;" d="M125.454,170.237c-27.161,0-50.142-20.985-85.661-20.985c-12.555,0-20.53,6.42-25.608,16.504 c30.033,5.918,64.411,35.633,108.864,33.708c24.479-1.06,57.639-33.992,93.814-34.09 C175.407,124.491,152.501,170.237,125.454,170.237z"></path> <path style="fill:#E8E8E8;" d="M429.608,289.846h-35.8c-66.146,0-265.817-16.922-326.298-16.922H14.32 c-8.438,0-14.32,6.905-14.32,15.344v32.215c0,8.438,5.882,15.343,14.32,15.343h415.287c10.127,0,18.412-8.286,18.412-18.412v-9.156 C448.02,298.131,439.734,289.846,429.608,289.846z"></path> <path style="fill:#0071CE;" d="M382.12,289.704c-29.316-0.629-74.753-3.306-122.727-6.345c2.492,7.871,3.945,15.984,1.783,21.016 c-2.956,6.879-16.243,20.591-27.504,31.451H376.47C380.882,322.236,384.199,305.694,382.12,289.704z"></path> <path style="fill:#00B3E3;" d="M99.177,311.875H48.51c-4.142,0-7.5-3.358-7.5-7.5c0-4.142,3.358-7.5,7.5-7.5h50.667 c4.142,0,7.5,3.358,7.5,7.5C106.677,308.517,103.319,311.875,99.177,311.875z"></path> <circle style="fill:#00416A;" cx="209.986" cy="185.568" r="7.5"></circle> <circle style="fill:#00416A;" cx="232.673" cy="201.289" r="7.5"></circle> <circle style="fill:#00416A;" cx="257.843" cy="214.945" r="7.501"></circle> </g> </g></svg>
      <span class="ml-3 text-xl text-lime-400">SHOE_HUB</span>
    </a>
    <nav class="flex flex-wrap items-center justify-center text-base md:ml-auto md:mr-auto">
      <a class="mr-5 text-lg hover:text-lime-400" href="index.php" >Home</a>
      <a class="mr-5 text-lg hover:text-lime-400" href="shop.php" >Shop</a>
      <a class="mr-5 text-lg hover:text-lime-400" href="about.php" >About</a>
      <a class="mr-5 text-lg hover:text-lime-400" href="contact.php" >Contact </a>
    </nav>
    <a  class="hover:underline hover:text-lime-400 text-lg <?php if ($current_page === 'index.php') echo 'active:text-orange-500'; ?>" href="shopping_cart.php">
    <button class="inline-flex items-center px-3 py-1 mt-3 text-base bg-gray-900 border-0 rounded focus:outline-none md:mt-0">Shopping Cart
    <img src="images/cart.png" class="cart" alt="Cart Icon" id="cartIcon">
      
    </button>
 </a>
</header> 

<div class="font-[sans-serif]">
      <div class="grid gap-12 p-6 lg:grid-cols-3">
        <div class="bg-white divide-y lg:col-span-2">
          <div class="grid items-center gap-8 py-6 md:grid-cols-4">
            <div class="flex items-center gap-6 md:col-span-2">
              <div class="w-32 h-22 shrink-0 shadow-[0_0px_4px_0px_rgba(6,81,237,0.2)] p-4">
                <img src='https://readymadeui.com/images/product11.webp' class="object-contain w-full h-full rounded-md" />
              </div>
              <div>
                <h3 class="text-lg font-extrabold text-[#333]">VelvetGlide Boots</h3>
                <h6 class="mt-2 text-gray-500 text-md">Color: <strong class="ml-2">Black</strong></h6>
              </div>
            </div>
            <div class="flex">
              <button type="button" class="bg-transparent py-2 font-semibold text-[#333]">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-current" viewBox="0 0 124 124">
                  <path d="M112 50H12C5.4 50 0 55.4 0 62s5.4 12 12 12h100c6.6 0 12-5.4 12-12s-5.4-12-12-12z" data-original="#000000"></path>
                </svg>
              </button>
              <button type="button" class="bg-transparent mx-4 px-4 py-2 font-semibold text-[#333] text-md shadow-[0_0px_4px_0px_rgba(6,81,237,0.2)]">
                1
              </button>
              <button type="button" class="bg-transparent py-2 font-semibold text-[#333]">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-current" viewBox="0 0 42 42">
                  <path d="M37.059 16H26V4.941C26 2.224 23.718 0 21 0s-5 2.224-5 4.941V16H4.941C2.224 16 0 18.282 0 21s2.224 5 4.941 5H16v11.059C16 39.776 18.282 42 21 42s5-2.224 5-4.941V26h11.059C39.776 26 42 23.718 42 21s-2.224-5-4.941-5z" data-original="#000000"></path>
                </svg>
              </button>
            </div>
            <div class="flex items-center">
              <h4 class="text-lg font-bold text-[#333]">$20.00</h4>
              <svg xmlns="http://www.w3.org/2000/svg" class="w-3 cursor-pointer shrink-0 fill-[#333] hover:fill-red-500 ml-auto" viewBox="0 0 320.591 320.591">
                <path d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z" data-original="#000000"></path>
                <path d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z" data-original="#000000"></path>
              </svg>
            </div>
          </div>
          <div class="grid items-center gap-8 py-6 md:grid-cols-4">
            <div class="flex items-center gap-6 md:col-span-2">
              <div class="w-32 h-22 shrink-0 shadow-[0_0px_4px_0px_rgba(6,81,237,0.2)] p-4">
                <img src='https://readymadeui.com/images/product14.webp' class="object-contain w-full h-full rounded-md" />
              </div>
              <div>
                <h3 class="text-lg font-extrabold text-[#333]">EchoElegance</h3>
                <h6 class="mt-2 text-gray-500 text-md">Color: <strong class="ml-2">Black/White</strong></h6>
              </div>
            </div>
            <div class="flex">
              <button type="button" class="bg-transparent py-2 font-semibold text-[#333]">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-current" viewBox="0 0 124 124">
                  <path d="M112 50H12C5.4 50 0 55.4 0 62s5.4 12 12 12h100c6.6 0 12-5.4 12-12s-5.4-12-12-12z" data-original="#000000"></path>
                </svg>
              </button>
              <button type="button" class="bg-transparent mx-4 px-4 py-2 font-semibold text-[#333] text-md shadow-[0_0px_4px_0px_rgba(6,81,237,0.2)]">
                1
              </button>
              <button type="button" class="bg-transparent py-2 font-semibold text-[#333]">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-current" viewBox="0 0 42 42">
                  <path d="M37.059 16H26V4.941C26 2.224 23.718 0 21 0s-5 2.224-5 4.941V16H4.941C2.224 16 0 18.282 0 21s2.224 5 4.941 5H16v11.059C16 39.776 18.282 42 21 42s5-2.224 5-4.941V26h11.059C39.776 26 42 23.718 42 21s-2.224-5-4.941-5z" data-original="#000000"></path>
                </svg>
              </button>
            </div>
            <div class="flex items-center">
              <h4 class="text-lg font-bold text-[#333]">$24.00</h4>
              <svg xmlns="http://www.w3.org/2000/svg" class="w-3 cursor-pointer shrink-0 fill-[#333] hover:fill-red-500 ml-auto" viewBox="0 0 320.591 320.591">
                <path d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z" data-original="#000000"></path>
                <path d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z" data-original="#000000"></path>
              </svg>
            </div>
          </div>
          <div class="grid items-center gap-8 py-6 md:grid-cols-4">
            <div class="flex items-center gap-6 md:col-span-2">
              <div class="w-32 h-22 shrink-0 shadow-[0_0px_4px_0px_rgba(6,81,237,0.2)] p-4">
                <img src='https://readymadeui.com/images/product13.webp' class="object-contain w-full h-full rounded-md" />
              </div>
              <div>
                <h3 class="text-lg font-extrabold text-[#333]">ZenithGlow</h3>
                <h6 class="mt-2 text-gray-500 text-md">Color: <strong class="ml-2">Black</strong></h6>
              </div>
            </div>
            <div class="flex">
              <button type="button" class="bg-transparent py-2 font-semibold text-[#333]">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-current" viewBox="0 0 124 124">
                  <path d="M112 50H12C5.4 50 0 55.4 0 62s5.4 12 12 12h100c6.6 0 12-5.4 12-12s-5.4-12-12-12z" data-original="#000000"></path>
                </svg>
              </button>
              <button type="button" class="bg-transparent mx-4 px-4 py-2 font-semibold text-[#333] text-md shadow-[0_0px_4px_0px_rgba(6,81,237,0.2)]">
                1
              </button>
              <button type="button" class="bg-transparent py-2 font-semibold text-[#333]">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-current" viewBox="0 0 42 42">
                  <path d="M37.059 16H26V4.941C26 2.224 23.718 0 21 0s-5 2.224-5 4.941V16H4.941C2.224 16 0 18.282 0 21s2.224 5 4.941 5H16v11.059C16 39.776 18.282 42 21 42s5-2.224 5-4.941V26h11.059C39.776 26 42 23.718 42 21s-2.224-5-4.941-5z" data-original="#000000"></path>
                </svg>
              </button>
            </div>
            <div class="flex items-center">
              <h4 class="text-lg font-bold text-[#333]">$22.00</h4>
              <svg xmlns="http://www.w3.org/2000/svg" class="w-3 cursor-pointer shrink-0 fill-[#333] hover:fill-red-500 ml-auto" viewBox="0 0 320.591 320.591">
                <path d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z" data-original="#000000"></path>
                <path d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z" data-original="#000000"></path>
              </svg>
            </div>
          </div>
        </div>
        <div class="p-6 bg-gray-100 rounded">
          <h3 class="text-xl font-extrabold text-[#333] border-b pb-4">Order Summary</h3>
          <ul class="text-[#333] divide-y mt-6">
            <li class="flex flex-wrap gap-4 py-4 text-md">Subtotal <span class="ml-auto font-bold">$46.00</span></li>
            <li class="flex flex-wrap gap-4 py-4 text-md">Shipping <span class="ml-auto font-bold">$4.00</span></li>
            <li class="flex flex-wrap gap-4 py-4 text-md">Tax <span class="ml-auto font-bold">$4.00</span></li>
            <li class="flex flex-wrap gap-4 py-4 font-bold text-md">Total <span class="ml-auto">$54.00</span></li>
          </ul>
          
          <a href="checkout.php">
          <button type="button"  class="mt-6 text-md px-6 py-2.5 w-full bg-blue-600 hover:bg-blue-700 text-white rounded">Check
            out</button>
          
          </a>
          

       <!--   <div class="mt-10">
            <h3 class="text-xl font-extrabold text-[#333] mb-6">Apply promo code</h3>
            <div class="flex max-w-md overflow-hidden border border-blue-600 rounded">
              <input type="email" placeholder="Promo code"
                class="w-full outline-none bg-white text-gray-600 text-md px-4 py-2.5" />
              <button type='button' class="flex items-center justify-center px-6 text-white bg-blue-600 hover:bg-blue-700 text-md">
                Apply
              </button>
            </div>
          </div> -->
        </div>
      </div>
    </div>



















</body>

</html>














 
    

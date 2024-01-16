
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>Digital Nigeria </title>
  <link rel="stylesheet" href="{{asset('main.css')}}">
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>

<!-- Header -->
<header id="header" class="header py-28 text-center md:pt-36 lg:text-left xl:pt-44 xl:pb-32">
  <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-2 lg:gap-x-8">
      <div class="mb-16 lg:mt-32 xl:mt-40 xl:mr-12">
         <!-- Display error message if it exists -->
    @if(session('error'))

    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
      <span class="font-medium">Info !</span> {{ session('error') }}.
    </div>
   
@endif
          <h1 class="h1-large mb-5">Unlock Your Certificate Now! Enter Your Email to Download</h1>
          <p class="p-large mb-8">Ready to claim your certificate? Simply enter your email below, and we'll send you a secure link to download your personalized certificate. Your achievements deserve recognition</p>
          <button  data-modal-target="default-modal" data-modal-toggle="default-modal"  type="button" class="btn-solid-lg" style="border-radius:10px;"> <a  href="">Proceed</a></button>
        <!-- Main modal -->
<div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
  <div class="relative p-4 w-full max-w-2xl max-h-full">
      <!-- Modal content -->
      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
          <!-- Modal header -->
          <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
              <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
             Digital Nigeria
              </h3>
              <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                  </svg>
                  <span class="sr-only">Close modal</span>
              </button>
          </div>
          <!-- Modal body -->
          <div class="p-4 md:p-5">
            <form class="space-y-4" action="{{ url('/submit-form') }}" method="post">
              @csrf
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                </div>
               
                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Verify email</button>
               
            </form>
        </div>
          <!-- Modal footer -->
          <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
            
              <button data-modal-hide="default-modal" type="button" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
          </div>
      </div>
  </div>
</div>
        
      </div>
      <div class="xl:text-right">
          <img class="inline" src="header-smartphone.png" alt="alternative" />
      </div>
  </div> <!-- end of container -->
</header> <!-- end of header -->
<!-- end of header -->




</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</html>
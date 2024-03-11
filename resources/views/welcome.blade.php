<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>Digital Nigeria</title>
  <link rel="stylesheet" href="{{asset('main.css')}}">
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>

<section class="bg-white dark:bg-gray-900">
  <div class="container px-6 py-16 mx-auto text-center">
    <div class="max-w-lg mx-auto">
      @if(session('error'))

      <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
        <span class="font-medium">Info !</span> {{ session('error') }}.
      </div>
     
  @endif
      <h1 class="text-3xl font-semibold text-gray-800 dark:text-white lg:text-4xl">Digital Nigeria Conference</h1>
      <p class="mt-6 text-gray-500 dark:text-gray-300">Theme: Harnessing Digital Technologies for Job Creation, Inclusive Economic Growth and </p>
      <!-- Button to trigger modal -->
      <button type="button" class="px-5 py-2 mt-6 text-sm font-medium leading-5 text-center text-white capitalize bg-green-600 rounded-lg hover:bg-green-500 lg:mx-0 lg:w-auto focus:outline-none" data-toggle="modal" data-target="#trialModal">
      Click to verify Your certificate
      </button>
      
    </div>

    <div class="flex justify-center mt-10">
      <img class="object-cover w-full h-96 rounded-xl lg:w-4/5" src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80" alt="App preview" />
    </div>
  </div>
</section>

<!-- Bootstrap Modal -->
<div class="modal fade" id="trialModal" tabindex="-1" role="dialog" aria-labelledby="trialModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="trialModalLabel">Digital Nigeria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
        <!-- Modal body content goes here -->
        {{-- <p>This is a modal for your 14-day free trial. Please enter your email below:</p> --}}
        <form action="{{ url('certificate') }}" method="post">
          @csrf
         
          <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" name="email" id="email"  placeholder="Enter email">
          </div>
       
      </div>
      <div class="modal-footer">
        <button type="submit" class="w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Verify email</button>
      </form>   
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
</html>

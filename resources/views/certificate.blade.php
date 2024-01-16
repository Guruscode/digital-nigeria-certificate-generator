<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  {{-- <link rel="stylesheet" href="{{asset('certificate.css')}}"> --}}
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
  <div class="certificate bg-white rounded-lg max-w-600 border border-[your chosen border color] flex flex-col items-center justify-center p-10">
    <div class="header flex items-center mb-10">
      <img src="logo.svg" alt="Image" class="w-16 h-16 mr-4">
      <h1 class="text-[your chosen text color] text-4xl font-serif">Certificate of Completion</h1>
    </div>
    <div class="body flex flex-col space-y-4">
      <div class="left-section w-4/5">
        <h2 class="[your chosen text color] text-2xl font-bold">[Recipient Name]</h2>
        <p class="[your chosen text color] text-lg">Has Successfully Completed</p>
        <p class="[your chosen text color] text-lg font-bold">[Achievement Name]</p>
        <p class="[your chosen text color] text-sm">On [Date]</p>
        <div class="signature-line flex items-center mt-4">
          <div class="border-b border-[your chosen border color] w-32 mr-4"></div>
          <p class="[your chosen text color] text-sm">Signature</p>
        </div>
      </div>
      <div class="right-section flex flex-col items-center justify-center border rounded-lg border-[your chosen border color] p-4 w-1/5">
        <img src="/path/to/qr-code.png" alt="QR Code" class="w-16 h-16">
      </div>
    </div>
    <div class="footer text-[your chosen text color] text-center mt-10">
      <img src="logo.png" alt="Logo" class="w-16 h-16 mx-auto mb-2">
      <p>[Institution Name] | [Website Address]</p>
    </div>
  </div>
  
  
</body>
</html>
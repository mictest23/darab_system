<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('pageTitle')</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.7/dist/tailwind.min.css" />
    <livewire:styles />
  </head>
  <body class="bg-gray-100">
    <div class="flex h-screen">
      <aside class="bg-white border-r border-gray-200 flex-shrink-0 w-64">
        <div class="h-full flex flex-col justify-between">
          <div class="flex items-center justify-center h-16 bg-gray-900 text-white">
            <span class="text-lg font-bold">DARAB System v.2</span>
          </div>
        
          @include('back.layouts.inc.nav')


          <a class="bg-red-500 text-white py-2 px-4 text-sm" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            Logout
          </a>
          <form action="{{ route('logout') }}" id="logout-form" method="POST">@csrf</form>
          <div class="bg-gray-900 text-white py-2 px-4 text-sm">
            © DARAB 2023
          </div>
        </div>
      </aside>
      
      @yield('content')

    </div>
    <livewire:scripts />
  </body>
</html>

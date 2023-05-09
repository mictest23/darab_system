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
      <aside class="bg-white border-r border-gray-200 flex-shrink-0 w-64 self-start sticky top-0 col-span-1">
        <div class="h-auto flex flex-col justify-between">
          <div class="flex items-center justify-center h-16 bg-gray-900 text-white">
            <span class="text-lg font-bold">DARAB System v.2</span>
          </div>
        
          @include('back.layouts.inc.nav')

          <a class="bg-red-500 text-white py-2 px-4 text-sm mt-40" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            Logout
          </a>
          <form action="{{ route('logout') }}" id="logout-form" method="POST">@csrf</form>
          <div class="bg-gray-900 text-white py-2 px-4 text-sm">
            © DARAB 2023
          </div>
        </div>
      </aside>

      <main class="flex-1 p-10">
        <div class="grid grid-cols-6">
          <div class="col-start-1 col-end-3">
            <h1 class="text-2xl font-bold mb-5">@yield('pagePart')</h1>
          </div>
          <div class="col-end-7 col-span-2 px-7 grid justify-items-end">
            <button class="text-lg mb-5 px-3 bg-gray-900 shadow-sm rounded-sm text-white">
              <span class="font-bold">Mike Pitao | </span>
              <span class="text-sm">Super Admin</span>
            </button>
          </div>
        </div>
      
        @yield('content')

      </main>


    </div>
    <livewire:scripts />
  </body>
</html>

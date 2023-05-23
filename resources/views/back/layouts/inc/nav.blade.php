

<nav class="flex-1">
    <ul class="space-y-2">
      <li>
        <a href="/dashboard" class="block py-2 px-4 bg-gray-200 hover:bg-gray-100 text-gray-900 hover:text-gray-800 {{ request()->is('dashboard') ? 'bg-blue-100':'' }}">
          Dashboard
        </a>
      </li>
      <li>
        <a href="/add" class="block py-2 px-4 bg-gray-200 hover:bg-gray-100 text-gray-900 hover:text-gray-800 {{ request()->is('add') ? 'bg-blue-100':'' }}">
          Add Record
        </a>
      </li>
      <li>
        <a href="/view" class="block py-2 px-4 bg-gray-200 hover:bg-gray-100 text-gray-900 hover:text-gray-800 {{ request()->is('view') ? 'bg-blue-100':'' }}">
          View Record
        </a>
      </li>
      <li>
        <a href="/cabinet" class="block py-2 px-4 bg-gray-200 hover:bg-gray-100 text-gray-900 hover:text-gray-800 {{ request()->is('cabinet') ? 'bg-blue-100':'' }}">
          Cabinet
        </a>
      </li>

      @if (Auth::user()->type == 'Super Admin')
      <li>
        <a href="/add-user" class="block py-2 px-4 bg-gray-200 hover:bg-gray-100 text-gray-900 hover:text-gray-800 {{ request()->is('add-user') ? 'bg-blue-100':'' }}">
          Add Admin
        </a>
      </li>
      @elseif (Auth::user()->type == 'Admin')
      <li hidden>
        <a href="/add-user" class="block py-2 px-4 bg-gray-200 hover:bg-gray-100 text-gray-900 hover:text-gray-800 {{ request()->is('add-user') ? 'bg-blue-100':'' }}">
          Add Admin
        </a>
      </li>
      @endif

      <li>
        <a href="#" class="block py-2 px-4 bg-gray-200 hover:bg-gray-100 text-gray-900 hover:text-gray-800">
          Model
        </a>
      </li>
    </ul>
</nav>

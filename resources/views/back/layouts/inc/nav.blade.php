

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
        <a href="#" class="block py-2 px-4 bg-gray-200 hover:bg-gray-100 text-gray-900 hover:text-gray-800">
          Cabinet
        </a>
      </li>
      <li>
        <a href="#" class="block py-2 px-4 bg-gray-200 hover:bg-gray-100 text-gray-900 hover:text-gray-800">
          Model
        </a>
      </li>
      <li>
        <a href="#" class="block py-2 px-4 bg-gray-200 hover:bg-gray-100 text-gray-900 hover:text-gray-800">
          E-copy update
        </a>
      </li>
    </ul>
</nav>

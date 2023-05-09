@extends('back.layouts.page-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Dashboard')
@section('content')

<main class="flex-1 p-10">

  <div class="grid grid-cols-6">
    <div class="col-start-1 col-end-3">
      <h1 class="text-2xl font-bold mb-5">Dashboard</h1>
    </div>
    <div class="col-end-7 col-span-2 px-7 grid justify-items-end">
      <button class="text-lg mb-5 px-3 bg-gray-900 shadow-sm rounded-sm text-white">
        <span class="font-bold">Mike Pitao | </span>
        <span class="text-sm">Super Admin</span>
      </button>
    </div>
  </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
      <div class="bg-gray-200 rounded-lg shadow-lg p-5">
        <h2 class="text-lg font-bold mb-3">Total Sales</h2>
        <p class="text-3xl font-bold">$50,000</p>
      </div>
      <div class="bg-gray-200 rounded-lg shadow-lg p-5">
        <h2 class="text-lg font-bold mb-3">New Users</h2>
        <p class="text-3xl font-bold">250</p>
      </div>
      <div class="bg-gray-200 rounded-lg shadow-lg p-5">
        <h2 class="text-lg font-bold mb-3">Orders Pending</h2>
        <p class="text-3xl font-bold">15</p>
      </div>
    </div>
    <div class="mt-10">
      <h2 class="text-lg font-bold mb-5">Recent Orders
        </h2>
      <div class="overflow-x-auto">
        <table class="table-auto w-full">
          <thead>
            <tr class="bg-gray-200 text-gray-700">
              <th class="px-4 py-2">#</th>
              <th class="px-4 py-2">Customer</th>
              <th class="px-4 py-2">Product</th>
              <th class="px-4 py-2">Date</th>
              <th class="px-4 py-2">Total</th>
            </tr>
          </thead>
          <tbody class="text-gray-900">
            <tr>
              <td class="border px-4 py-2">1</td>
              <td class="border px-4 py-2">John Doe</td>
              <td class="border px-4 py-2">Product A</td>
              <td class="border px-4 py-2">May 6, 2023</td>
              <td class="border px-4 py-2">$500</td>
            </tr>
            <tr>
              <td class="border px-4 py-2">2</td>
              <td class="border px-4 py-2">Jane Smith</td>
              <td class="border px-4 py-2">Product B</td>
              <td class="border px-4 py-2">May 5, 2023</td>
              <td class="border px-4 py-2">$750</td>
            </tr>
            <tr>
              <td class="border px-4 py-2">3</td>
              <td class="border px-4 py-2">Bob Johnson</td>
              <td class="border px-4 py-2">Product C</td>
              <td class="border px-4 py-2">May 4, 2023</td>
              <td class="border px-4 py-2">$1,000</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </main>

@endsection
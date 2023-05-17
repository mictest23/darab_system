@extends('back.layouts.page-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Dashboard | Darab')
@section('pagePart', isset($pagePart) ? $pagePart : 'Dashboard')
@section('content')

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
      <div class="bg-white rounded-lg shadow-lg p-5">
        <h2 class="text-lg font-bold mb-3">Total Cases</h2>
        <p class="text-3xl font-bold">133</p>
      </div>
      <div class="bg-white rounded-lg shadow-lg p-5">
        <h2 class="text-lg font-bold mb-3">New Users</h2>
        <p class="text-3xl font-bold">2</p>
      </div>
      <div class="bg-white rounded-lg shadow-lg p-5">
        <h2 class="text-lg font-bold mb-3">Pending</h2>
        <p class="text-3xl font-bold">15</p>
      </div>
    </div>
    <div class="mt-10">
      <h2 class="text-lg font-bold mb-5">Recent Orders
        </h2>
      <div class="overflow-x-auto">
        <table class="table-auto w-full bg-white">
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

@endsection
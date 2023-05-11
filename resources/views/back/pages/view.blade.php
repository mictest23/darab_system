@extends('back.layouts.page-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'View Record | Darab')
@section('pagePart', isset($pagePart) ? $pagePart : 'View Record')
@section('content')

<div class="overflow-x-auto">
    <table class="table-auto w-full bg-white">
      <thead>
        <tr class="bg-yellow-200 text-gray-700 text-sm">
          <th class="px-4 py-2">Docket No.</th>
          <th class="px-4 py-2">Date Filed</th>
          <th class="px-4 py-2">Cabinet</th>
          <th class="px-4 py-2">Nature</th>
          <th class="px-4 py-2">Petitioners</th>
          <th class="px-4 py-2">Lessors</th>
          <th class="px-4 py-2">Lessee</th>
          <th class="px-4 py-2">Location</th>
          <th class="px-4 py-2">Date ALHC</th>
          <th class="px-4 py-2">Area</th>
          <th class="px-4 py-2">Crops</th>
          <th class="px-4 py-2">Counsel</th>
          <th class="px-4 py-2">E-Copy</th>
        </tr>
      </thead>
      <tbody class="text-gray-900">
        <tr>
          <td class="border px-4 py-2">sfasdf skljdhfkajshdf dfksd are dfhk yioa dfhdkf eksdfha dfl</td>
          <td class="border px-4 py-2">John Doe</td>
          <td class="border px-4 py-2">Product A</td>
          <td class="border px-4 py-2">a skjdfhlaksdhfklajsdfhlkajsdfhlkjasdfhakjs faskjdh falkjsdfhlkjasd hfakjsdfhaksjd flksdhfkh</td>
          <td class="border px-4 py-2">$500</td>
          <td class="border px-4 py-2">$500</td>
          <td class="border px-4 py-2">$500</td>
          <td class="border px-4 py-2">$500</td>
          <td class="border px-4 py-2">$500</td>
          <td class="border px-4 py-2">$500</td>
          <td class="border px-4 py-2">$500</td>
          <td class="border px-4 py-2">$500</td>
          <td class="border px-4 py-2">$500</td>
        </tr>
        <tr>
          <td class="border px-4 py-2">2</td>
          <td class="border px-4 py-2">Jane Smith</td>
          <td class="border px-4 py-2">Product B</td>
          <td class="border px-4 py-2">May 5, 2023</td>
          <td class="border px-4 py-2">$500</td>
          <td class="border px-4 py-2">$500</td>
          <td class="border px-4 py-2">$500</td>
          <td class="border px-4 py-2">$500</td>
          <td class="border px-4 py-2">$500</td>
          <td class="border px-4 py-2">$500</td>
          <td class="border px-4 py-2">$500</td>
          <td class="border px-4 py-2">$500</td>
          <td class="border px-4 py-2">$750</td>
        </tr>
        <tr>
          <td class="border px-4 py-2">3</td>
          <td class="border px-4 py-2">Bob Johnson</td>
          <td class="border px-4 py-2">Product C</td>
          <td class="border px-4 py-2">May 4, 2023</td>
          <td class="border px-4 py-2">$1,000</td>
          <td class="border px-4 py-2">$1,000</td>
          <td class="border px-4 py-2">$1,000</td>
          <td class="border px-4 py-2">$1,000</td>
          <td class="border px-4 py-2">$1,000</td>
          <td class="border px-4 py-2">$1,000</td>
          <td class="border px-4 py-2">$1,000</td>
          <td class="border px-4 py-2">$1,000</td>
          <td class="border px-4 py-2">$1,000</td>
        </tr>
      </tbody>
    </table>
  </div>

@endsection
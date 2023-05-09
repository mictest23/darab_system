@extends('back.layouts.page-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Add Record')
@section('pagePart', isset($pagePart) ? $pagePart : 'Add Record')
@section('content')


<form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="post">
    <div class="mb-4">
      <label class="block text-gray-700 font-bold mb-2" for="full_name">Docket number</label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="BOH-VII-">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 font-bold mb-2" for="email">Date filed</label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="date" placeholder="Enter your email">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 font-bold mb-2" for="phone">Cabinet</label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="tel" placeholder="Enter your phone number">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 font-bold mb-2" for="message">Nature of case</label>
      <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="message" placeholder="Enter Nature of case"></textarea>
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 font-bold mb-2" for="phone">Petitioner</label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Enter petitioner">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 font-bold mb-2" for="phone">Respondent lessor</label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Enter lessor">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 font-bold mb-2" for="phone">Respondent lessee</label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Enter lessee">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 font-bold mb-2" for="phone">Location</label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Enter location situated">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 font-bold mb-2" for="phone">Date of alhc</label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="date" placeholder="Enter your phone number">
    </div>

    <div class="grid grid-cols-2 gap-8">
        <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="phone">Area</label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" placeholder="Enter area of land">
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="phone">Crop</label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="What crop being cultivated">
        </div>
    </div>

    <div class="mb-4">
      <label class="block text-gray-700 font-bold mb-2" for="phone">Counsel</label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="tel" placeholder="Enter Counsels">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 font-bold mb-2" for="phone">E-copy</label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="file" placeholder="Enter your phone number">
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Add record
      </button>
    </div>
  </form>
  

@endsection
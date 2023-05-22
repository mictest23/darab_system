<div>

  <input class="appearance-none border py-2 px-3 text-gray-700 leading-tight focus:outline-none mb-2 w-72" type="text" placeholder="Search">
  <table class="table-auto w-full bg-white">
    <thead>
      <tr class="bg-yellow-200 text-gray-700 text-sm">
        <th class="px-4 py-2">Docket No.</th>
        <th class="px-4 py-2">Cabinet</th>
        <th class="px-4 py-2">Petitioners</th>
        <th class="px-4 py-2">Lessors</th>
        <th class="px-4 py-2">Lessee</th>
        <th class="px-4 py-2">E-Copy</th>
      </tr>
    </thead>
    <tbody class="text-gray-900">
        @foreach ($record_specs as $record_spec)
      <tr>
        <td class="border px-4 py-2 w-72">{{ $record_spec->docket_number }}</td>
        <td class="border px-4 py-2 w-28">{{ $record_spec->cabinet }}</td>
        <td class="border px-4 py-2 w-45">{{ $record_spec->petitioners }}</td>
        <td class="border px-4 py-2 w-40">{{ $record_spec->lessor }}</td>
        <td class="border px-4 py-2 w-40">{{ $record_spec->lessee }}</td>
        <td class="border px-4 py-2 w-60"><a href="../storage/files/{{ $record_spec->name }}" target="_blank">{{ $record_spec->name }}</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>

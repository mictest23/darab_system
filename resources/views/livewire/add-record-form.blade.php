<div>

    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="post" wire:submit.prevent="AddRecord()">
        <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="full_name">Docket number</label>
          <input class="shadow-md appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="BOH-VII-" wire:model="docket_number">
          <p class="text-red-500 text-sm">@error('docket_number'){{ $message }}@enderror</p>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="email">Date filed</label>
          <input class="shadow-md appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="date" placeholder="Enter your email" wire:model="date_filed">
          <p class="text-red-500 text-sm">@error('date_filed'){{ $message }}@enderror</p>
        </div>


        <label class="block text-gray-700 font-bold mb-2" for="phone">Cabinet</label>
        <div class="relative inline-block w-full mb-4">
          <select class="shadow-md appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model="cabinet">
            @foreach ($cab_select as $cab_selects)
            <option value="" selected hidden>Select a cabinet</option>
            <optgroup label="Cab {{ $cab_selects->cab_number }}">
              <option value="Cab {{ $cab_selects->cab_number }}-{{ $cab_selects->row1 }}" @if (empty( $cab_selects->row1 ))disabled hidden @endif >Cab {{ $cab_selects->cab_number }}-{{ $cab_selects->row1 }}</option>
              <option value="Cab {{ $cab_selects->cab_number }}-{{ $cab_selects->row2 }}" @if (empty( $cab_selects->row2 ))disabled hidden @endif >Cab {{ $cab_selects->cab_number }}-{{ $cab_selects->row2 }}</option>
              <option value="Cab {{ $cab_selects->cab_number }}-{{ $cab_selects->row3 }}" @if (empty( $cab_selects->row3 ))disabled hidden @endif >Cab {{ $cab_selects->cab_number }}-{{ $cab_selects->row3 }}</option>
              <option value="Cab {{ $cab_selects->cab_number }}-{{ $cab_selects->row4 }}" @if (empty( $cab_selects->row4 ))disabled hidden @endif >Cab {{ $cab_selects->cab_number }}-{{ $cab_selects->row4 }}</option>
              <option value="Cab {{ $cab_selects->cab_number }}-{{ $cab_selects->row5 }}" @if (empty( $cab_selects->row5 ))disabled hidden @endif >Cab {{ $cab_selects->cab_number }}-{{ $cab_selects->row5 }}</option>
              <option value="Cab {{ $cab_selects->cab_number }}-{{ $cab_selects->row6 }}" @if (empty( $cab_selects->row6 ))disabled hidden @endif >Cab {{ $cab_selects->cab_number }}-{{ $cab_selects->row6 }}</option>
              <option value="Cab {{ $cab_selects->cab_number }}-{{ $cab_selects->row7 }}" @if (empty( $cab_selects->row7 ))disabled hidden @endif >Cab {{ $cab_selects->cab_number }}-{{ $cab_selects->row7 }}</option>
              <option value="Cab {{ $cab_selects->cab_number }}-{{ $cab_selects->row8 }}" @if (empty( $cab_selects->row8 ))disabled hidden @endif >Cab {{ $cab_selects->cab_number }}-{{ $cab_selects->row8 }}</option>
              <option value="Cab {{ $cab_selects->cab_number }}-{{ $cab_selects->row9 }}" @if (empty( $cab_selects->row9 ))disabled hidden @endif >Cab {{ $cab_selects->cab_number }}-{{ $cab_selects->row9 }}</option>
              <option value="Cab {{ $cab_selects->cab_number }}-{{ $cab_selects->row10 }}" @if (empty( $cab_selects->row10 ))disabled hidden @endif >Cab {{ $cab_selects->cab_number }}-{{ $cab_selects->row10 }}</option>
            </optgroup>
            @endforeach
          </select>
          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
            <svg class="fill-current h-4 w-4" viewBox="0 0 20 20">
              <path d="M10 12l-6-6 1.41-1.41L10 9.17l4.59-4.58L16 6z"/>
            </svg>
          </div>
          <p class="text-red-500 text-sm">@error('cabinet'){{ $message }}@enderror</p>
        </div>
        


        <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="message">Nature of case</label>
          {{-- <textarea class="shadow-md appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="message" placeholder="Enter Nature of case" wire:model="nature"></textarea> --}}

          <select class="shadow-md appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model="nature">
            <option value="" selected hidden>Select nature of case</option>
            <option value="Review of an Agricultural Leasehold ALHC">Review of an Agricultural Leasehold ALHC</option>
            <option value="Correction of Entry">Correction of Entry</option>
            <option value="Ejectment">Ejectment</option>
            <option value="Reinstatement with Damages">Reinstatement with Damages</option>
            <option value="Inclusion and Exclusion on Transfer Certificate">Inclusion and Exclusion on Transfer Certificate</option>
            <option value="cancellation of entry">Cancellation of entry</option>
            <option value="Summary Administrative Proceeding to Determine Just Compensation">Summary Administrative Proceeding to Determine Just Compensation</option>
            <option value="Inclusion and Exclusion on Transfer Certificate">Inclusion and Exclusion on Transfer Certificate</option>
          </select>
          
          <p class="text-red-500 text-sm">@error('nature'){{ $message }}@enderror</p>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="phone">Petitioner</label>
          <input class="shadow-md appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Enter petitioner" wire:model="petitioners">
          <p class="text-red-500 text-sm">@error('petitioners'){{ $message }}@enderror</p>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="phone">Respondent lessor</label>
          {{-- <input class="shadow-md appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Enter lessor" wire:model="lessor"> --}}
          <textarea class="shadow-md appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="message" placeholder="Enter Lessors" wire:model="lessor">
          </textarea>
          <p class="text-red-500 text-sm">@error('lessor'){{ $message }}@enderror</p>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="phone">Respondent lessee</label>
          {{-- <input class="shadow-md appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Enter lessee" wire:model="lessee"> --}}
          <textarea class="shadow-md appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="message" placeholder="Enter Lessee" wire:model="lessee">
          </textarea>
          <p class="text-red-500 text-sm">@error('lessee'){{ $message }}@enderror</p>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="phone">Location</label>
          <input class="shadow-md appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Enter location situated" wire:model="location">
          <p class="text-red-500 text-sm">@error('location'){{ $message }}@enderror</p>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="phone">Date of alhc</label>
          <input class="shadow-md appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="date" placeholder="Enter your phone number" wire:model="date_alhc">
          <p class="text-red-500 text-sm">@error('date_alhc'){{ $message }}@enderror</p>
        </div>
    
        <div class="grid grid-cols-2 gap-8">
            <div class="mb-4">
              <label class="block text-gray-700 font-bold mb-2" for="phone">Area</label>
              <input class="shadow-md appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Enter area of land" wire:model="area">
              <p class="text-red-500 text-sm">@error('area'){{ $message }}@enderror</p>
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 font-bold mb-2" for="phone">Crop</label>
              {{-- <input class="shadow-md appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="What crop being cultivated" wire:model="crops"> --}}

              <select class="shadow-md appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model="crops">
                <option value="" selected hidden>Crop being cultivated</option>
                <option value="rice">Rice</option>
                <option value="corn">Corn</option>
                <option value="banana">Banana</option>
                <option value="camote">Kamote</option>
                <option value="balanghoy">Balanghoy</option>
                <option value="coconut">Coconut</option>
                <option value="Mango">Mango</option>
                <option value="abaca">Abaca</option>
                <option value="cofee/cacao">Coffee/Cacao</option>
                <option value="Commercial Trees/Orchard">Commercial Trees/Orchard</option>
                <option value="Palm Trees">Palm Trees</option>
                <option value="Pineapple">Pineapple</option>
                <option value="Rootcrops">Rootcrops</option>
                <option value="Vegetables">Vegetables</option>
                <option value="Others">Others</option>
              </select>

              <p class="text-red-500 text-sm">@error('crops'){{ $message }}@enderror</p>
            </div>
        </div>
    
        <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="phone">Counsel</label>
          {{-- <input class="shadow-md appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="tel" placeholder="Enter Counsels" wire:model="counsel"> --}}
          <textarea class="shadow-md appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="message" placeholder="Enter Counsels" wire:model="counsel">
          </textarea>
          <p class="text-red-500 text-sm">@error('counsel'){{ $message }}@enderror</p>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="phone">E-copy</label>
          <input class="shadow-md appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="file" placeholder="Enter your phone number" wire:model="file">
          <p class="text-red-500 text-sm">@error('file'){{ $message }}@enderror</p>
        </div>
        <div class="flex items-center justify-between">
          <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
            Add record
          </button>
        </div>
      </form>

</div>

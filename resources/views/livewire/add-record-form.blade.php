<div>
    
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="post" wire:submit.prevent="AddRecord()">
        <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="full_name">Docket number</label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="BOH-VII-" wire:model="docket_number">
          <p class="text-red-500">@error('docket_number'){{ $message }}@enderror</p>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="email">Date filed</label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="date" placeholder="Enter your email" wire:model="date_filed">
          <p class="text-red-500">@error('date_filed'){{ $message }}@enderror</p>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="phone">Cabinet</label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="tel" placeholder="Enter your phone number" wire:model="cabinet">
          <p class="text-red-500">@error('cabinet'){{ $message }}@enderror</p>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="message">Nature of case</label>
          <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="message" placeholder="Enter Nature of case" wire:model="nature"></textarea>
          <p class="text-red-500">@error('nature'){{ $message }}@enderror</p>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="phone">Petitioner</label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Enter petitioner" wire:model="petitioners">
          <p class="text-red-500">@error('petitioners'){{ $message }}@enderror</p>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="phone">Respondent lessor</label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Enter lessor" wire:model="lessor">
          <p class="text-red-500">@error('lessor'){{ $message }}@enderror</p>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="phone">Respondent lessee</label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Enter lessee" wire:model="lessee">
          <p class="text-red-500">@error('lessee'){{ $message }}@enderror</p>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="phone">Location</label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Enter location situated" wire:model="location">
          <p class="text-red-500">@error('location'){{ $message }}@enderror</p>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="phone">Date of alhc</label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="date" placeholder="Enter your phone number" wire:model="date_alhc">
          <p class="text-red-500">@error('date_alhc'){{ $message }}@enderror</p>
        </div>
    
        <div class="grid grid-cols-2 gap-8">
            <div class="mb-4">
              <label class="block text-gray-700 font-bold mb-2" for="phone">Area</label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" placeholder="Enter area of land" wire:model="area">
              <p class="text-red-500">@error('area'){{ $message }}@enderror</p>
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 font-bold mb-2" for="phone">Crop</label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="What crop being cultivated" wire:model="crops">
              <p class="text-red-500">@error('crops'){{ $message }}@enderror</p>
            </div>
        </div>
    
        <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="phone">Counsel</label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="tel" placeholder="Enter Counsels" wire:model="counsel">
          <p class="text-red-500">@error('counsel'){{ $message }}@enderror</p>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="phone">E-copy</label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="file" placeholder="Enter your phone number" wire:model="file">
          <p class="text-red-500">@error('file'){{ $message }}@enderror</p>
        </div>
        <div class="flex items-center justify-between">
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
            Add record
          </button>
        </div>
      </form>

</div>

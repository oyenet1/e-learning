<div>
  <div class="max-w-7xl my-4">
    {{-- <h1 class="text-2xl font-bold my-4">Class</h1> --}}

    <div class="w-full py-4 px-2 rounded bg-white">
      <form wire:submit.prevent="save" class="w-ful row overflow-y-auto h-72 " enctype="multipart/form-data">
        <div class="p-3 w-full grid grid-cols-1 space-x-2 lg:grid-cols-2 text-gray-500  font-bold items-center align-middle">
          <div class="mb-3">
            <label for="" class="capitalize mb-1 font-normal text-gray-600 text-sm">Department</label>
            <select wire:model.defer="course" class="px-2 py-2 text-sm rounded focus-within: focus:outline-none focus:border-green-600 w-full border-2 placeholder-gray-400 font-semibold">
              <option value="select">Select Department</option>
              @foreach (['Mathematics', 'Statistics', 'Geology', 'Chemistry', 'Physics', 'Computer Science', 'biology'] as $state)
              <option value="{{ $state}}" class="capitalize p-2">{{ $state }}</option>
              @endforeach
            </select>
            @error('course')
            <span class="text-xs text-red-600 font-normal">{{ $message }}</span>
            @enderror
          </div>
          <div class="mb-3">
            <label for="" class="capitalize mb-1 font-normal text-gray-600 text-sm">Name</label>
            <input type="text" wire:model.defer="name" class="p-2 rounded focus-within: focus:outline-none focus:border-green-600 w-full border-2 placeholder-gray-400 font-medium ">
            @error('name')
            <span class="text-xs text-red-600 font-normal">{{ $message }}</span>
            @enderror
          </div>
          <div class="mb-3">
            <label for="" class="mb-1 font-normal text-gray-600 text-sm">Level</label>
            <input type="number" step="100" min="100" max="500" wire:model.defer="level" class="p-2 rounded focus-within: focus:outline-none focus:border-green-600 w-full border-2 placeholder-gray-400 font-medium ">
            @error('level')
            <span class="text-xs text-red-600 font-normal">{{ $message }}</span>
            @enderror
          </div>
          <div class="mb-3">
            <label for="" class="mb-1 font-normal text-gray-600 text-sm">Registration Number</label>
            <input type="text" wire:model.defer="reg_no" class="p-2 rounded focus-within: focus:outline-none focus:border-green-600 w-full border-2 placeholder-gray-400 font-medium ">
            @error('reg_no')
            <span class="text-xs text-red-600 font-normal">{{ $message }}</span>
            @enderror
          </div>
          <div class="mb-3 my-auto align-middle text-right lg:col-span-2">
            <button type="submit" class="rounded align-middle border-2 border-green-500 bg-green-600 hover:opacity-80 text-white py-2 text-center px-3 text-sm  font-medium">Save</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="max-w-7xl my-4">
    <table class="table w-full border-collapse">
      <thead class="">
        <tr class="font-normal border p-2">
          <th class="font-medium p-2 text-left">No</th>
          <th class="font-medium p-2 text-left">Name</th>
          <th class="font-medium p-2 text-left">Reg No</th>
          <th class="font-medium p-2 text-left">Email</th>
          <th class="font-medium p-2 text-left">Department</th>
          <th class="font-medium p-2 text-left">Level</th>
          <th class="font-medium p-2 text-left">Action</th>
        </tr>
      </thead>
      <tbody class="bg-white">
        @for($i = 0; $i < 10; $i++)
        <tr class="border">
            <td class="p-2">{{ $i + 1 }}</td>
            <td class="p-2">{{ \Faker\Factory::create()->name }}</td>
            <td class="p-2">CSC/TYUS/301</td>
            <td class="p-2">{{ \Faker\Factory::create()->email }}</td>
            <td class="p-2 flex place-items-center space-x-2">
              Mathematics
            </td>
            <td class="p-2">
              <a href="/staff" class="text-xs text-white px-2 py-1 rounded bg-green-500" data-toggle="tooltip" title="View staff full details" data-placement="top">
               {{ random_int(1, 5) . '00'}}
              </a>
            </td>
            <td class="p-2">
              <a href="/staff" class="text-xs text-white px-2 py-1 rounded bg-red-500" data-toggle="tooltip" title="View staff full details" data-placement="top">
                Delete
              </a>
            </td>
          </tr>
        @endfor
      </tbody>
    </table>
  </div>
</div>

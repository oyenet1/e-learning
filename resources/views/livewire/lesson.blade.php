<div>
  @if (auth()->user()->hasRole('lecturer'))
  <div class="max-w-7xl my-4">
    {{-- <h1 class="text-2xl font-bold my-4">Class</h1> --}}
    <div class="w-full py-4 px-2 rounded bg-white">
      <form wire:submit.prevent="save" class="w-ful row overflow-y-auto h-72 " enctype="multipart/form-data">
        <div class="p-3 w-full grid grid-cols-1 space-x-2 lg:grid-cols-2 text-gray-500  font-bold items-center align-middle">
          <div class="mb-3">
            <label for="" class="capitalize mb-1 font-normal text-gray-600 text-sm">Course</label>
            <select wire:model.defer="course" class="px-2 py-2 text-sm rounded focus-within: focus:outline-none focus:border-green-600 w-full border-2 placeholder-gray-400 font-semibold">
              <option value="select">Select Course</option>
              @foreach (['Mathematics', 'Statistics', 'Geology', 'Chemistry'] as $state)
              <option value="{{ $state}}" class="capitalize">{{ $state }}</option>
              @endforeach
            </select>
            @error('course')
            <span class="text-xs text-red-600 font-normal">{{ $message }}</span>
            @enderror
          </div>
          <div class="mb-3">
            <label for="" class="mb-1 font-normal text-gray-600 text-sm">Date</label>
            <input type="date" wire:model.defer="date" class="p-2 rounded focus-within: focus:outline-none focus:border-green-600 w-full border-2 placeholder-gray-400 font-medium ">
            @error('date')
            <span class="text-xs text-red-600 font-normal">{{ $message }}</span>
            @enderror
          </div>
          <div class="mb-3">
            <label for="" class="mb-1 font-normal text-gray-600 text-sm">Start time</label>
            <input type="time" wire:model.defer="start" class="p-2 rounded focus-within: focus:outline-none focus:border-green-600 w-full border-2 placeholder-gray-400 font-medium ">
            @error('start')
            <span class="text-xs text-red-600 font-normal">{{ $message }}</span>
            @enderror
          </div>
          <div class="mb-3">
            <label for="" class="mb-1 font-normal text-gray-600 text-sm">End Time</label>
            <input type="time" wire:model.defer="end" class="p-2 rounded focus-within: focus:outline-none focus:border-green-600 w-full border-2 placeholder-gray-400 font-medium ">
            @error('end')
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
  @endif
  <div class="max-w-7xl my-4">
    <table class="table w-full border-collapse">
      <thead class="">
        <tr class="font-normal border p-2">
          <th class="font-medium p-2 text-left">No</th>
          <th class="font-medium p-2 text-left">Lecturer</th>
          <th class="font-medium p-2 text-left">Class</th>
          <th class="font-medium p-2 text-left">Date</th>
          <th class="font-medium p-2 text-left">Time</th>
          <th class="font-medium p-2 text-left">Status</th>
          <th class="font-medium p-2 text-left">Action</th>
        </tr>
      </thead>
      <tbody class="bg-white">
        @foreach($lessons as $lesson) 
        <tr class="border">
          <td class="p-2">{{ $loop->iteration }}</td>
          <td class="p-2">{{ $lesson->user->name }}</td>
          <td class="p-2">{{ $lesson->course }}</td>
          <td class="p-2">{{ $lesson->date }}</td>
          <td class="p-2 flex place-items-center space-x-2">
            <a href="/staff" class="text-xs text-white px-2 py-1 rounded bg-red-500" data-toggle="tooltip" title="View staff full details" data-placement="top">
              3pm
            </a>
            <span> - </span>
            <a href="/staff" class="text-xs text-white px-2 py-1 rounded bg-red-500" data-toggle="tooltip" title="View staff full details" data-placement="top">
              5pm
            </a>
          </td>
          <td class="p-2">
            <a href="/staff" class="text-xs text-white px-2 py-1 rounded bg-green-500" data-toggle="tooltip" title="View staff full details" data-placement="top">
              ongoing
            </a>
          </td>
          <td class="p-2">
            <a href="/staff" class="text-xs text-white px-2 py-1 rounded bg-blue-500" data-toggle="tooltip" title="View staff full details" data-placement="top">
              Attend
            </a>
          </td>
          </tr>
          @endfor
      </tbody>
    </table>
  </div>
</div>

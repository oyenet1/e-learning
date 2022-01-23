<div>
  <div class="w-full max-w-7xl">
    {{-- <iframe src="https://www.youtube.com/embed/live_stream?channel=UCRpdvxZCunV8ODAAfVBB_lw&autoplay=1" class="w-full " height="500px"></iframe> --}}
    <iframe src="https://www.youtube.com/embed/live_stream?channel=UC6uccCA1wS13cWnifAmLHnA&autoplay=1" class="w-full " height="500px"></iframe>
  </div>
  <div class="w-full max-w-7xl my-4">
    <div class="w-full">
      <h1 class="font-medium text-xl my-2">Students in Attendances</h1>
    </div>
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
        @for($i = 0; $i < 10; $i++) <tr class="border">
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

<div>
  <div class="max-w-7xl">
    <table class="table w-full border-collapse">
      <thead class="">
        <tr class="font-normal border p-2">
          <th class="font-medium p-2 text-left">No</th>
          <th class="font-medium p-2 text-left">Course</th>
          <th class="font-medium p-2 text-left">Date</th>
          <th class="font-medium p-2 text-left">No of students</th>
          <th class="font-medium p-2 text-left">Percentage</th>
          <th class="font-medium p-2 text-left">Action</th>
        </tr>
      </thead>
      <tbody class="bg-white">
        {{-- @foreach ($collection as $item)

        @endforeach --}}
        @for($i = 0; $i < 10; $i++) 
        <tr class="border">
          <td class="p-2">{{ $i + 1 }}</td>
          <td class="p-2">CSC 301</td>
          <td class="p-2">{{ \Carbon\Carbon::now()->format('d m, Y') }}</td>
          <td class="p-2">{{ random_int(25, 98) }}</td>
          <td class="p-2 ">
            <span href="/staff" class="text-xs text-white px-2 py-1 rounded bg-pink-500" data-toggle="tooltip" title="View staff full details" data-placement="top">
              78%
            </span>
          </td>
          <td class="p-2 flex place-items-center space-x-2">
            <a href="/staff" class="text-xs text-white px-2 py-1 rounded bg-blue-500" data-toggle="tooltip" title="View staff full details" data-placement="top">
              See Attended Students
            </a>
          </td>
          </tr>
          @endfor
      </tbody>
    </table>
  </div>
</div>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Books List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           <div class="block mb-8">
                <a href="{{route('books.create')}}" class="bg-green-500 hover:bg-green-700">Add Task
           </div>
<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Books
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Actions
              </th>
              <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Edit</span>
              </th>
            </tr>
          </thead>

          <tbody class="bg-white divide-y divide-gray-200">
           @foreach($books as $book)
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                {{$book->name}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                
                <a href="{{route('books.show',$book->id)}}" class="text-blue-600 hover:text-blue-900 mb-2 mr-2">View
                <!-- <a href="{{route('books.edit',$book->id)}}" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">Edit -->
                <form class="inline-block" action="{route('books.destroy',$book->id)}">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                </form>
            </td>
            </tr>
            @endforeach

            <!-- More items... -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

        </div>
    </div>
</x-app-layout>
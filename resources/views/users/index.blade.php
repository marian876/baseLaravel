<x-app-layout>
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            Listado de usuarios
            <div class="px-4 py-6 sm:px-0">
                @foreach ($users as $user)
                    <li>
                        {{$user->name}}
                    </li>
                @endforeach
            <div class="h-96 rounded-lg border-4 border-dashed border-gray-200"></div>
          </div>
          <!-- /End replace -->
        </div>
      </main>
</x-app-layout>
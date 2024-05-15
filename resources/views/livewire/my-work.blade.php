<div class="w-full max-w-md mx-auto mt-6">
   <ul class="w-full max-w-md mx-auto mt-6 space-y-4">
    @foreach ($travaux as $travail)
    <li class="p-4 bg-white rounded-lg shadow-md">
        <h2 class="mb-2 text-xl font-bold">{{ $travail->titre }}</h2>
        <p class="text-gray-700">{{ $travail->description }}</p>
        <div class="mt-4">
            <a href="" class="text-blue-500 hover:underline">Voir plus</a>
        </div>
    </li>
    @endforeach
</ul>
</div>



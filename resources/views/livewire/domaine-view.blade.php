<div class="m-3">
    <div class="mb-6 text-center">
        <h1 class="text-2xl font-bold">Voici un aperçu de tous les domaines disponibles</h1>
        <p> :</p>
    </div>

    <div class="grid grid-cols-3 gap-4">
        @foreach ($domaines as $domaine)
        <a href="{{route('WorkDomaines',$domaine->id)}}">
        <div class="p-6 bg-white rounded shadow-md">
            <img class="object-cover w-full h-64 mb-4 rounded" src="{{Storage::disk('local')->url($domaine->image) }}"alt="{{ $domaine->intitule }}">
            <h2 class="text-xl font-bold">{{ $domaine->intitule }}</h2>
        </div>
        </a>
        @endforeach
    </div>
</div>

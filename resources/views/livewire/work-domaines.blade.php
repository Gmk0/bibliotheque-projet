<div class="p-4">

    <div class="mb-6 text-center">
        <h1 class="text-2xl font-bold">Voici un aperçu de tous les travaux disponibles pour le domaine :<strong> {{$domain->intitule}}</strong></h1>

    </div>

    <div class="grid grid-cols-1 gap-4 lg:grid-cols-3">
        @forelse ($works as $travails)
        <div class="overflow-hidden bg-white rounded-lg shadow-lg">
            <div class="relative bg-slate-300">
                <div class="p-4">
                    <img class="object-cover object-center w-full h-40 rounded-md" src="/images/travaux.png"
                        alt="Image d'illustration">
                </div>
            </div>
            <div class="p-4">
                <div class="flex justify-between">
                    <p>{{$travails->auteur}}</p>
                    <span
                        class="inline-block px-2 py-1 text-xs font-semibold tracking-wide text-white uppercase bg-gray-400 rounded-full">{{$travails->viewCount}}
                        vues</span>
                </div>
                <h3 class="mt-2 text-xl font-bold">{{$travails->titre}}</h3>
                <p class="mt-1 text-gray-600">Domaine:{{$travails->domain->intitule}}</p>
            </div>
            <div class="px-4 py-2 text-center bg-gray-100">
                <a href="{{route('worksOne',[$travails->matricule])}}" class="font-semibold text-blue-500">Voir</a>
            </div>
        </div>
        @empty
        <p>Aucun travail n'a été trouvé pour les domaines sélectionnés.</p>
        @endforelse
    </div>
</div>

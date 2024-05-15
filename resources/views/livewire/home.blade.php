<div class="">
   <section
        class="bg-white  dark:bg-gray-900 bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] dark:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')]">
        <div class="relative z-10 max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16">

            <h1
                class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                Découvrez notre bibliothèque numérique!</h1>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-200">Plongez
                dans un
                univers de connaissances infini! Explorez notre collection de travaux universitaires et découvrez des
                idées
                fascinantes, des perspectives inspirantes et des recherches novatrices.</p>
            <form class="w-full max-w-md mx-auto">
                <label for="default-email" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">
                    Recherche</label>

            </form>
        </div>
        <div
            class="absolute top-0 left-0 z-0 w-full h-full bg-gradient-to-b from-blue-50 to-transparent dark:from-blue-900">
        </div>
    </section>

    <div class="py-10 bg-gray-100">
        <div class="max-w-6xl px-4 mx-auto sm:px-6 lg:px-8">
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-2xl font-bold">Domaines de recherche</h2>
                <a href="{{route('domaines')}}" class="px-4 py-2 text-white bg-blue-500 rounded-lg">Voir tous</a>
            </div>

            <div id="splide" class="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <!-- Carte 1 -->

                        @forelse ($domains as $domaine)
<li class="splide__slide">
                        <a href="{{route('WorkDomaines',$domaine->id)}}">



                            <div class="p-4 mx-2 bg-gray-300 rounded-lg">
                                <div class="h-48 mb-4 bg-center bg-cover"
                                    style="background-image: url('{{Storage::disk('local')->url($domaine->image)}}')"></div>
                                <h3 class="text-lg font-bold">{{$domaine->intitule}}</h3>
                                <p class="text-sm">{{count($domaine->works??0)}} travaux</p>
                            </div>
                            </a>
                        </li>
                        @empty

                        @endforelse




                        <!-- Ajoutez plus de cartes ici -->

                    </ul>
                </div>
            </div>
        </div>
    </div>


    <script>
        new Splide('#splide', {
            type: 'loop',
            perPage: 4,
            perMove: 1,
            gap: '1rem',
            breakpoints: {
              768: {
                perPage: 2
              },
              640: {
                perPage: 1
              }
            }
          }).mount();
    </script>

    <section class="max-w-6xl px-4 mx-auto sm:px-6 lg:px-8">

        <h2 class="mb-4 text-2xl font-bold">Dernières publications</h2>
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-3">
            @forelse ($works as $travail)

            <div class="overflow-hidden bg-white rounded-lg shadow-lg">
            <a href="{{route('worksOne',[$travail->matricule])}}">


                <div class="relative">
                    <img class="object-cover object-center w-full h-40 rounded-t-lg"
                        src="/images/domaines2.png" alt="Image d'illustration">
                    <div class="absolute inset-0 bg-black rounded-t-lg opacity-25"></div>
                </div>
                <div class="p-4">
                    <span
                        class="inline-block px-2 py-1 text-xs font-semibold tracking-wide text-white uppercase bg-blue-500 rounded-full">{{$travail->viewCount}}
                        vues</span>
                    <h3 class="mt-2 text-xl font-bold">{{$travail->titre}}</h3>
                    <p class="mt-1 text-gray-600">{{$travail->domain->intitule}}</p>
                </div>
                <div class="px-4 py-2 text-center bg-gray-100">
                    <a href="#" class="font-semibold text-blue-500">Voir</a>
                </div>

            </a>
            </div>

            @empty



            @endforelse


            <!-- Ajouter d'autres cartes ici selon vos besoins -->
        </div>
        <a href="#" class="inline-block mt-4 text-blue-500">Voir toutes</a>
    </section>


    <x-footer />
</div>

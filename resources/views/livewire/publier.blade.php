<div>

<div class="mb-6 text-center">
    <h1 class="text-2xl font-bold">Veuillze joindre votre travail ici il sera consulter avant d'etre publier</h1>
    <p> :</p>
</div>
    <div>
        <form class="px-24" wire:submit.prevent="create">
            {{ $this->form }}

         <div class="mt-4 center">
           <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">ENVOYER</button>
         </div>
        </form>

        <x-filament-actions::modals />
    </div>
</div>

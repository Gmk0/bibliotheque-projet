<div class="flex w-full my-4 min-h-72">
    <div class="lg:w-[20%] m-2">
        <h1 class="text-lg">
            Mes travaux
        </h1>
    </div>
    <div class="lg: w-[80%]">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Sujet
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Auteur
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($works as $work)
                    <tr class="border-b odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$work->titre}}
                        </th>
                        <td class="px-6 py-4">
                            {{$work->auteur}}
                        </td>


                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                    </tr>

                    @empty
                    <tr>
                        <td class="px-6 py-4 text-center">
                            <p>Aucun travaux </p>
                        </td>

                    </tr>

                    @endforelse


                </tbody>
            </table>
        </div>
    </div>

</div>

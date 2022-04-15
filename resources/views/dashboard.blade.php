<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex">

                {{-- Dashboard Cards --}}
                <div class="shadow-lg rounded-2xl px-6 py-4 bg-white dark:bg-gray-800">
                    <div class="flex items-center">
                        <span class="rounded-xl relative p-3 bg-green-200">
                            <i class="text-green-500 fas fa-leaf"></i>
                        </span>
                        <p class="text-md text-black dark:text-white ml-2">
                            Tanaman
                        </p>
                    </div>
                    <div class="flex flex-col justify-start">
                        <p class="text-gray-700 dark:text-gray-100 text-4xl text-left font-bold my-4">
                            {{ $plantsCount }}
                        </p>
                    </div>
                </div>


                <div class="ml-4 shadow-lg rounded-2xl px-6 py-4 bg-white dark:bg-gray-800">
                    <div class="flex items-center">
                        <span class="rounded-xl relative p-3 bg-green-200">
                            <i class="text-green-500 fas fa-disease"></i>
                        </span>
                        <p class="text-md text-black dark:text-white ml-2">
                            Penyakit
                        </p>
                    </div>
                    <div class="flex flex-col justify-start">
                        <p class="text-gray-700 dark:text-gray-100 text-4xl text-left font-bold my-4">
                            {{ $diseasesCount }}
                        </p>
                    </div>
                </div>

                {{-- End Dashboard Cards --}}


            </div>
        </div>
    </div>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="container mx-auto px-4 sm:px-8 max-w-3xl">
                        <div class="py-8">
                            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                                    <h2>Disease Table</h2>
                                    <table class="min-w-full leading-normal" id="table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    #
                                                </th>
                                                <th>
                                                    Tanaman
                                                </th>
                                                <th>
                                                    Penyakit
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            $(document).ready(function() {

                let table = $('#table').DataTable({
                    responsive: true,
                    dom: 'Blfrtip',
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('dashboard') }}",
                    columns: [
                        {
                            data: 'DT_RowIndex',
                            orderable: false,
                            searchable: false,
                        },
                        {
                            data: 'plant_name',
                            name: 'plant_name',
                            searhable: false,
                        },
                        {
                            data: 'disease_name',
                            name: 'disease_name',
                        }
                    ]
                }).columns.adjust().responsive.recalc();

            });
        </script>
    @endpush
</x-app-layout>



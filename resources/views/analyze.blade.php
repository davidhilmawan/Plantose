<x-app-layout>
    @yield('pageScripts')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Analyze') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">
                        <div class="flex">
                            <div class="flex-1">
                                <div class="progress progress-bar progress-bar-striped progress-bar-animated mb-2">
                                    Loading Model
                                </div>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="flex-1">
                                <input id="image-selector" class="form-control border-0" type="file" />
                            </div>
                            <div class="flex-1">
                                <button id="predictBtn" class="px-4 py-2 text-base font-semibold text-white bg-green-600 rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 focus:ring-offset-green-200">
                                    Predict
                                </button>
                            </div>
                        </div>
                        <br>
                        <div class="flex">
                            <div class="flex-1">
                                <h2 class="text-2xl leading-tight">Image</h2>
                                <img id="selected-image" class="text-md text-black dark:text-white ml-3" width="224" height="224" alt="" />
                            </div>
                            <div class="flex-1">
                                <h2 class="text-2xl leading-tight">Predictions</h2>
                                <ol id="prediction-list"></ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

@section('pageScripts')
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@2.0.0/dist/tf.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/model.js') }}"></script>
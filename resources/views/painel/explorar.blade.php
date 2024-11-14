<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Explorar') }}
        </h2>
    </x-slot>
    @section('content')
        <div class="py-3 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900 dark:text-gray-100">
                    <h3>{{ $title }}</h3>
                </div>

                <div class="ms-md-auto pe-md-3 d-flex justify-content-end">

                    <div class="input-group input-group-outline w-25">
                        <label class="form-label">Type here...</label>
                        <input type="text" class="form-control">
                    </div>
                    <a class="btn btn-primary mb-0 me-2 px-py-2" target="" href="">Pesquisa</a>

                </div>

                <div class="row">
                    <div class="col-4 mt-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Gênero</h5>
                                <a href="#" class="btn btn-primary">Gênero</a>
                            </div>
                        </div>

                    </div>

                    <div class="col-4 mt-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Gênero</h5>
                                <a href="#" class="btn btn-primary">Gênero</a>
                            </div>
                        </div>

                    </div>

                    <div class="col-4 mt-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Gênero</h5>
                                <a href="#" class="btn btn-primary">Gênero</a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-4 mt-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Gênero</h5>
                                <a href="#" class="btn btn-primary">Gênero</a>
                            </div>
                        </div>

                    </div>

                    <div class="col-4 mt-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Gênero</h5>
                                <a href="#" class="btn btn-primary">Gênero</a>
                            </div>
                        </div>

                    </div>

                    <div class="col-4 mt-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Gênero</h5>
                                <a href="#" class="btn btn-primary">Gênero</a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-4 mt-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Gênero</h5>
                                <a href="#" class="btn btn-primary">Gênero</a>
                            </div>
                        </div>

                    </div>

                    <div class="col-4 mt-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Gênero</h5>
                                <a href="#" class="btn btn-primary">Gênero</a>
                            </div>
                        </div>

                    </div>

                    <div class="col-4 mt-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Gênero</h5>
                                <a href="#" class="btn btn-primary">Gênero</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>




        </div>
    @endsection
</x-app-layout>

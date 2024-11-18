<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Meus Livros') }}
        </h2>
    </x-slot>
    @section('content')
        <div class="py-3 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3>{{ $title }}</h3>
                </div>

                <div class="nav-wrapper position-relative end-0">
                    <ul class="nav nav-pills nav-fill p-1" role="tablist">
                       <li class="nav-item">
                          <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="" role="tab" aria-controls="profile" aria-selected="true">
                          Publicados
                          </a>
                       </li>
                       <li class="nav-item">
                          <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="" role="tab" aria-controls="dashboard" aria-selected="false">
                          Rascunhos
                          </a>
                       </li>
                     </ul>
                 </div>

                <div class="d-flex justify-content-center align-items-center">

                    <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
                        <div class="card mb-4">
                            <div class="card-header p-2 ps-3">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="text-small mb-0 text-capitalize">Livro</p>
                                        <h4 class="mb-0">Descrição</h4>
                                    </div>

                                </div>
                            </div>
                            <hr class="dark horizontal my-0">
                            <div class="card-footer p-2 ps-3">
                                <p class="mb-0 text-small"><span class="text-success font-weight-bolder">Tags</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
                        <div class="card mb-4">
                            <div class="card-header p-2 ps-3">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="text-small mb-0 text-capitalize">Livro</p>
                                        <h4 class="mb-0">Descrição</h4>
                                    </div>

                                </div>
                            </div>
                            <hr class="dark horizontal my-0">
                            <div class="card-footer p-2 ps-3">
                                <p class="mb-0 text-small"><span class="text-success font-weight-bolder">Tags</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endsection
</x-app-layout>

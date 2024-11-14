<x-app-layout>
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Página Inicial') }}
        </h2>
    </x-slot>

    @section('content')
        <div class="py-3 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900 dark:text-gray-100">
                    <h3>{{$title}}</h3>
                </div>
                <div class="container-fluid py-0">
                    <div class="row">
                        <div class="ms-3">
                            <h3 class="mb-0 h4 font-weight-bolder">Trending</h3>
                        </div>

                        <div class="col-4 mt-4 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="mb-0 ">Livro</h6>
                                    <p class="text-small ">Descrição</p>
                                    <div class="pe-2">
                                        <div class="chart">
                                            <canvas id="chart-bars" class="chart-canvas" height="170" width="494"
                                                style="display: block; box-sizing: border-box; height: 170px; width: 494px;"></canvas>
                                        </div>
                                    </div>
                                    <hr class="dark horizontal">
                                    <div class="d-flex ">
                                        <i class="material-symbols-rounded text-small my-auto me-1">tag</i>
                                        <p class="mb-0 text-small"> tags </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mt-4 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="mb-0 ">Livro</h6>
                                    <p class="text-small">Descrição </p>
                                    <div class="pe-2">
                                        <div class="chart">
                                            <canvas id="chart-line" class="chart-canvas" height="170" width="494"
                                                style="display: block; box-sizing: border-box; height: 170px; width: 494px;"></canvas>
                                        </div>
                                    </div>
                                    <hr class="dark horizontal">
                                    <div class="d-flex ">
                                        <i class="material-symbols-rounded text-small my-auto me-1">tag</i>
                                        <p class="mb-0 text-small"> tags </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mt-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="mb-0 ">Livro</h6>
                                    <p class="text-small ">Descrição</p>
                                    <div class="pe-2">
                                        <div class="chart">
                                            <canvas id="chart-line-tasks" class="chart-canvas" height="170"
                                                width="494"
                                                style="display: block; box-sizing: border-box; height: 170px; width: 494px;"></canvas>
                                        </div>
                                    </div>
                                    <hr class="dark horizontal">
                                    <div class="d-flex ">
                                        <i class="material-symbols-rounded text-small my-auto me-1">tag</i>
                                        <p class="mb-0 text-small">tags</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="ms-3">
                            <h3 class="mb-0 h4 font-weight-bolder">Para Você</h3>
                        </div>

                        <div id="carouselExampleControls2" class="carousel carousel-dark slide" data-bs-interval="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">

                                        <div class="col-xl-2 col-sm-3 mb-xl-0 mb-4">
                                            <div class="card">
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

                                        <div class="col-xl-2 col-sm-3 mb-xl-0 mb-4">
                                            <div class="card">
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

                                        <div class="col-xl-2 col-sm-3 mb-xl-0 mb-4">
                                            <div class="card">
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

                                        
                                        <div class="col-xl-2 col-sm-3 mb-xl-0 mb-4">
                                            <div class="card">
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

                                        <div class="col-xl-2 col-sm-3 mb-xl-0 mb-4">
                                            <div class="card">
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

                                        <div class="col-xl-2 col-sm-3 mb-xl-0 mb-4">
                                            <div class="card">
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
                                <div class="carousel-item">



                                    <div class="row">

                                        <div class="col-xl-2 col-sm-3 mb-xl-0 mb-4">
                                            <div class="card">
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

                                        <div class="col-xl-2 col-sm-3 mb-xl-0 mb-4">
                                            <div class="card">
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

                                        <div class="col-xl-2 col-sm-3 mb-xl-0 mb-4">
                                            <div class="card">
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

                                        
                                        <div class="col-xl-2 col-sm-3 mb-xl-0 mb-4">
                                            <div class="card">
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

                                        <div class="col-xl-2 col-sm-3 mb-xl-0 mb-4">
                                            <div class="card">
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

                                        <div class="col-xl-2 col-sm-3 mb-xl-0 mb-4">
                                            <div class="card">
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
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="ms-3">
                            <h3 class="mb-0 h4 font-weight-bolder">Gênero 1</h3>
                        </div>
                        
                        <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-interval="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">

                                        <div class="col-xl-2 col-sm-3 mb-xl-0 mb-4">
                                            <div class="card">
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

                                        <div class="col-xl-2 col-sm-3 mb-xl-0 mb-4">
                                            <div class="card">
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

                                        <div class="col-xl-2 col-sm-3 mb-xl-0 mb-4">
                                            <div class="card">
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

                                        
                                        <div class="col-xl-2 col-sm-3 mb-xl-0 mb-4">
                                            <div class="card">
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

                                        <div class="col-xl-2 col-sm-3 mb-xl-0 mb-4">
                                            <div class="card">
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

                                        <div class="col-xl-2 col-sm-3 mb-xl-0 mb-4">
                                            <div class="card">
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
                                <div class="carousel-item">



                                    <div class="row">

                                        <div class="col-xl-2 col-sm-3 mb-xl-0 mb-4">
                                            <div class="card">
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

                                        <div class="col-xl-2 col-sm-3 mb-xl-0 mb-4">
                                            <div class="card">
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

                                        <div class="col-xl-2 col-sm-3 mb-xl-0 mb-4">
                                            <div class="card">
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

                                        
                                        <div class="col-xl-2 col-sm-3 mb-xl-0 mb-4">
                                            <div class="card">
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

                                        <div class="col-xl-2 col-sm-3 mb-xl-0 mb-4">
                                            <div class="card">
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

                                        <div class="col-xl-2 col-sm-3 mb-xl-0 mb-4">
                                            <div class="card">
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
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <footer class="footer py-4  ">
                        <div class="container-fluid">
                            <div class="row align-items-center justify-content-lg-between">
                                <div class="col-lg-6 mb-lg-0 mb-4">
                                    <div class="copyright text-center text-small text-muted text-lg-start">
                                        ©
                                        <script>
                                            document.write(new Date().getFullYear())
                                        </script> -> 2024,
                                        made with &#10084 by
                                        <a href="https://www.github.com/jiotajoia" class="font-weight-bold"
                                            target="_blank">Jiotajoia</a>
                                        omaga.
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                                        <li class="nav-item">
                                            <a href="https://www.github.com/jiotajoia" class="nav-link text-muted"
                                                target="_blank">Jiotajoia</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="" class="nav-link text-muted" target="_blank">About Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="" class="nav-link pe-0 text-muted"
                                                target="_blank">License</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    @endsection

</x-app-layout>

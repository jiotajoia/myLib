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

                {{-- back/sett --}}
                <div class="row">
                    <a class="col-md-2" href="javascript:history.go(-1);">Voltar</a>

                    <div class="col-md-10 d-flex justify-content-end">
                        <a class="btn btn-primary mb-0 me-2 px-py-2" target="" href="">Configuração</a>
                    </div>
                </div>

                {{-- img/title/desc --}}
                <div class="row">
                    <form>
                        <div>
                            <input id="img-input" type="file" name="imagem">
                        </div>
                        <div id="img-container">
                            <img id="file-preview" src="">
                        </div>
                        <div>
                            <input type="submit" value="Selecionar">
                        </div>
                    </form>

                    <label for="titulo">Título</label>
                    <input type="text" name="" id="titulo">

                    <label for="sinopse">Descrição</label>
                    <input type="text" name="" id="sinopse">
                </div>

                {{-- settings title --}}
                <div class="row">
                    <div class="col-xl-6 mb-4">
                        <select name="" id="status">
                            <option value="">Status</option>
                            <option value="1">Em andamento</option>
                            <option value="2">Concluído</option>
                        </select>
                    </div>

                    <div class="col-xl-6 mb-4">
                        <h4>tags</h4>
                    </div>

                    <div class="col-xl-4">
                        <select name="" id="genero">
                            <option value="">Gênero</option>
                            @foreach ($category_all as $item)
                                <option value="">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-xl-4">
                        <select name="" id="visibilidade">
                            <option value="">Visibilidade</option>
                            <option value="1">Publicado</option>
                            <option value="2">Rascunho</option>
                        </select>
                    </div>

                    <div class="col-xl-4">
                        <select name="" id="classificacao">
                            <option value="">Classificação</option>
                            <option value="1">Livre</option>
                            <option value="2">12</option>
                            <option value="3">16</option>
                            <option value="4">18</option>
                        </select>
                    </div>



                    <a href="">Estatísticas</a>
                </div>

                {{-- chapters --}}
                <div class="row">

                    <div class="col-md-2">
                        <h3>Capítulos</h3>
                    </div>

                    <div class="col-md-10 d-flex justify-content-end">
                        <a class="btn btn-primary mb-0 me-2 px-py-2" target="" href="">Criar Novo Capítulo</a>
                    </div>

                </div>


            </div>

        </div>
    @endsection
</x-app-layout>

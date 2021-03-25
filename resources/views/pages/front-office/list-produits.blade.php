<x-master-layout>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3>Liste des produits</h3>
            @if (session('statut'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                {{session('statut')}}
            </div>
            @endif
            @if ($lesproduits->count() > 0)
                
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td>Désignation</td>
                            <td>Prix</td>
                            <td>Pays d'origine</td>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($lesproduits as $produit)
                            <tr>
                                <td> {{ $produit->designation }} </td>
                                <td> {{ $produit->prix }} XOF</td>
                                <td> {{ $produit->pays_source }} </td>
                                <td>
                                     <a href="{{route('delete',$produit->id)}}"  class="btn btn-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" style='width:25px'>
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"  />
                                          </svg>
                                    </a> 
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    
                </table>
            @else
                <p>
                    Aucun produit n'a été retrouvé !
                </p>
            @endif

        </div>
        <div class="col-md-6"></div>
    </div>
</div>

</x-master-layout>
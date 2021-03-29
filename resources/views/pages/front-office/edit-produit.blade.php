<x-master-layout>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1 class="text-center"> Modification d'un produit </h1>
            <form action="{{ route('produits.update', $produit->id) }}" method="post">
                @method("PUT")
                @csrf
                <div class="form-group">
                  <label for="">Designation</label>
                  <input value="{{ $produit->designation }}" type="text" name="designation" id="" class="form-control" placeholder="" aria-describedby="helpId">
                @error('designation')
                  <small class="text-danger" > {{ $message }} </small>
                @enderror
                </div>
                <div class="form-group">
                    <label for="">Prix</label>
                    <input value="{{ $produit->prix }}" type="number" name="prix" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    @error('prix')
                        <small class="text-danger" > {{ $message }} </small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <input value="{{ $produit->description }}" type="text" name="description" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    @error('description')
                    <small class="text-danger" > {{ $message }} </small>
                    @enderror
                </div>

                <div class="form-group">
                  <label for="">Pays Source</label>
                  <select class="form-control" name="pays_source" id="">
                    <option value="{{ $produit->pays_source }}" selected >{{ $produit->pays_source }}</option>
                    <option value="Burkina Faso"  >Burkina Faso</option>
                    <option value="Sénégal"  >Sénégal</option>
                    <option value="Mali"  >Mali</option>
                  </select>
                  @error('pays_source')
                    <small class="text-danger" > {{ $message }} </small>
                    @enderror
                    <small></small>
                </div>
                <div class="form-group">
                    <label for="">Poids</label>
                    <input value="{{ $produit->poids }}" type="number" name="poids" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    @error('poids')
                    <small class="text-danger" > {{ $message }} </small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Like</label>
                    <input value="{{ $produit->like }}" type="number" name="like" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    @error('like')
                    <small class="text-danger" > {{ $message }} </small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success btn-block btn-lg">Valider</button>
            </form>
        </div>
    </div>
</div>

</x-master-layout>

<x-master-layout>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1 class="text-center"> Ajout d'un nouveau produit </h1>
            <form action="{{ route('produits.enregister') }}" method="post">
                @method("POST")
                @csrf
                <div class="form-group">
                  <label for="">Designation</label>
                  <input value="{{ old('designation') }}" type="text" name="designation" id="" class="form-control" placeholder="" aria-describedby="helpId">
                @error('designation')
                  <small class="text-danger" > {{ $message }} </small>
                @enderror
                </div>
                <div class="form-group">
                    <label for="">Prix</label>
                    <input value="{{ old('prix') }}" type="number" name="prix" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    @error('prix')
                        <small class="text-danger" > {{ $message }} </small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <input value="{{ old('description') }}" type="text" name="description" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    @error('description')
                    <small class="text-danger" > {{ $message }} </small>
                    @enderror
                </div>

                <div class="form-group">
                  <label for="">Pays Source</label>
                  <select class="form-control" name="pays_source" id="">
                    <option value="Burkina Faso" {{ old('pays_source')=='Burkina Faso' ? "selected" : ''  }} >Burkina Faso</option>
                    <option value="Sénégal" {{ old('pays_source')=='Sénégal' ? "selected" : ''  }} >Sénégal</option>
                    <option value="Mali"  {{ old('pays_source')=='Mali' ? "selected" : ''  }} >Mali</option>
                  </select>
                    @error('pays_source')
                    <small class="text-danger" > {{ $message }} </small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Poids</label>
                    <input value="{{ old('poids') }}" type="number" name="poids" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    @error('poids')
                    <small class="text-danger" > {{ $message }} </small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Like</label>
                    <input value="{{ old('like') }}" type="number" name="like" id="" class="form-control" placeholder="" aria-describedby="helpId">
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

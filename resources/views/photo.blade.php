<h1>Test sur le sauvegarde de fichier</h1>
<form action="{{ url('photo') }}" method="POST"  enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="file" class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}" name="image" id="image"  value="{{ old('image') }}">
                        {!! $errors->first('image', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                    <button type="submit" class="btn btn-secondary">Envoyer !</button>
</form>
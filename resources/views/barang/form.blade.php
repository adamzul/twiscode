<div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
    <label for="nama" class="control-label">Nama</label>
    <input class="form-control" name="nama" type="text" id="nama" value="{{ $barang->nama or ''}}" >
    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('deskripsi') ? 'has-error' : ''}}">
    <label for="deskripsi" class="control-label">Deskripsi</label>
    <textarea class="form-control" rows="5" name="deskripsi" type="textarea" id="deskripsi" >{{ $barang->deskripsi or ''}}</textarea>
    {!! $errors->first('deskripsi', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>

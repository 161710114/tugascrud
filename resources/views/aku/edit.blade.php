@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Barang
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Back</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('aku.update',$aku->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama_pakaian') ? ' has-error' : '' }}">
			  			<label class="control-label">nama_pakaian</label>	
			  			<input type="text" name="nama_pakaian" class="form-control" value="{{ $aku->nama_pakaian }}"  required>
			  			@if ($errors->has('nama_pakaian'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_pakaian') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('ukuran') ? ' has-error' : '' }}">
			  			<label class="control-label">ukuran</label>	
			  			<input type="text" name="ukuran" class="form-control" value="{{ $aku->ukuran }}"  required>
			  			@if ($errors->has('ukuran'))
                            <span class="help-block">
                                <strong>{{ $errors->first('ukuran') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
			  			<label class="control-label">harga</label>	
			  			<input type="text" name="harga" class="form-control" value="{{ $aku->harga }}"  required>
			  			@if ($errors->has('harga'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection
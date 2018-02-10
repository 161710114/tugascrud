@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Obat
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Back</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('aku1.update',$aku1->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama_obat') ? ' has-error' : '' }}">
			  			<label class="control-label">nama_obat</label>	
			  			<input type="text" name="nama_obat" class="form-control" value="{{ $aku1->nama_obat }}"  required>
			  			@if ($errors->has('nama_obat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_obat') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('jenis_obat') ? ' has-error' : '' }}">
			  			<label class="control-label">jenis_obat</label>	
			  			<input type="text" name="jenis_obat" class="form-control" value="{{ $aku1->jenis_obat }}"  required>
			  			@if ($errors->has('jenis_obat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jenis_obat') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('harga_jual') ? ' has-error' : '' }}">
			  			<label class="control-label">harga_jual</label>	
			  			<input type="text" name="harga_jual" class="form-control" value="{{ $aku1->harga_jual }}"  required>
			  			@if ($errors->has('harga_jual'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga_jual') }}</strong>
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
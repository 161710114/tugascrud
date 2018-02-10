@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Obat
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Back</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">nama_obat</label>	
			  			<input type="text" name="nama_obat" class="form-control" value="{{ $aku1->nama_obat }}"  readonly>
			  		</div>

			  		<div class="form-group {{ $errors->has('jenis_obat') ? ' has-error' : '' }}">
			  			<label class="control-label">jenis_obat</label>	
			  			<input type="text" name="jenis_obat" class="form-control" value="{{ $aku1->jenis_obat }}"  readonly>
			  		</div>

			  		<div class="form-group {{ $errors->has('harga_jual') ? ' has-error' : '' }}">
			  			<label class="control-label">harga_jual</label>	
			  			<input type="text" name="harga_jual" class="form-control" value="{{ $aku1->harga_jual }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection
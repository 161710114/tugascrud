@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Pembelian Tiket Pesawat
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Back</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">nama_penumpang</label>	
			  			<input type="text" name="nama_penumpang" class="form-control" value="{{ $aku2->nama_penumpang }}"  readonly>
			  		</div>

			  		<div class="form-group {{ $errors->has('tanggal_pembelian') ? ' has-error' : '' }}">
			  			<label class="control-label">tanggal_pembelian</label>	
			  			<input type="text" name="tanggal_pembelian" class="form-control" value="{{ $aku2->tanggal_pembelian }}"  readonly>
			  		</div>

			  		<div class="form-group {{ $errors->has('tujuan') ? ' has-error' : '' }}">
			  			<label class="control-label">tujuan</label>	
			  			<input type="text" name="tujuan" class="form-control" value="{{ $aku2->tujuan }}"  readonly>
			  		</div>

			  		<div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
			  			<label class="control-label">harga</label>	
			  			<input type="text" name="harga" class="form-control" value="{{ $aku2->harga }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection
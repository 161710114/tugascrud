@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
	<div class="col-md-12">
		<div class="panel panel-primary">
		<div class="panel-heading">Data Pembelian Tiket Pesawat
			<div class="panel-title pull-right"><a href="{{ route('aku2.index') }}">Back</a>
			</div>
		</div>
			<div class="panel-body">
				<form action="{{ route('aku2.store') }}" method="post" >
					{{ csrf_field()}}
					<div class="form-group {{ $errors->has('nama_penumpang') ? ' has-error':''}}">
					<label class="control-label">nama_penumpang</label>
					<input type="text"  class="form-control" name="nama_penumpang" required>
					@if ($errors->has('nama_penumpang'))
						<span class="help-block">
							<strong>{{ $errors->first('nama_penumpang') }}</strong>
						</span>
						@endif
						</div>

						<div class="form-group {{ $errors->has('tanggal_pembelian') ? ' has-error':'' }}">
						<label class="control-label">tanggal_pembelian</label>
						<input type="text"  class="form-control" name="tanggal_pembelian" required>
						@if ( $errors->has('tanggal_pembelian'))
							<span class="help-block">
								<strong>{{ $errors->first('tanggal_pembelian') }}</strong>			
							</span>
							@endif
							</div>

							<div class="form-group {{ $errors->has('tujuan') ? ' has-error':'' }}">
						<label class="control-label">tujuan</label>
						<input type="text"  class="form-control" name="tujuan" required>
						@if ( $errors->has('tujuan'))
							<span class="help-block">
								<strong>{{ $errors->first('tujuan') }}</strong>			
							</span>
							@endif

							<div class="form-group {{ $errors->has('harga') ? ' has-error':'' }}">
						<label class="control-label">harga</label>
						<input type="text"  class="form-control" name="harga" required>
						@if ( $errors->has('harga'))
							<span class="help-block">
								<strong>{{ $errors->first('harga') }}</strong>			
							</span>
							@endif
							<div class="form-group">
								<button type="submit" class="btn btn-primary" >Tambah</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				</div>
				@endsection


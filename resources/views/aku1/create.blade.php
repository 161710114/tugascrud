@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
	<div class="col-md-12">
		<div class="panel panel-primary">
		<div class="panel-heading">Data Obat
			<div class="panel-title pull-right"><a href="{{ route('aku1.index') }}">Back</a>
			</div>
		</div>
			<div class="panel-body">
				<form action="{{ route('aku1.store') }}" method="post" >
					{{ csrf_field()}}
					<div class="form-group {{ $errors->has('nama_obat') ? ' has-error':''}}">
					<label class="control-label">nama_obat</label>
					<input type="text"  class="form-control" name="nama_obat" required>
					@if ($errors->has('nama_obat'))
						<span class="help-block">
							<strong>{{ $errors->first('nama_obat') }}</strong>
						</span>
						@endif
						</div>

						<div class="form-group {{ $errors->has('jenis_obat') ? ' has-error':'' }}">
						<label class="control-label">jenis_obat</label>
						<input type="text"  class="form-control" name="jenis_obat" required>
						@if ( $errors->has('jenis_obat'))
							<span class="help-block">
								<strong>{{ $errors->first('jenis_obat') }}</strong>			
							</span>
							@endif
							</div>

							<div class="form-group {{ $errors->has('harga_jual') ? ' has-error':'' }}">
						<label class="control-label">harga_jual</label>
						<input type="text"  class="form-control" name="harga_jual" required>
						@if ( $errors->has('harga_jual'))
							<span class="help-block">
								<strong>{{ $errors->first('harga_jual') }}</strong>			
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


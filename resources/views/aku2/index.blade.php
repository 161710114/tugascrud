@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data Pembelian Tiket Pesawat
			  	<div class="panel-title pull-right"><a href="{{ route('aku2.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>nama_penumpang</th>
					  <th>tanggal_pembelian</th>
					  <th>tujuan</th>
					  <th>harga</th>
					  <center><th colspan="3">Action</th></center>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($aku2 as $kamu2)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $kamu2->nama_penumpang }}</td>
				    	<td><p>{{ $kamu2->tanggal_pembelian }}</p></td>
				    	<td><p>{{ $kamu2->tujuan }}</p></td>
				    	<td><p>{{ $kamu2->harga }}</p></td>
						<td>
							<a class="btn btn-warning" href="{{ route('aku2.edit',$kamu2->id) }}">Edit</a>
						</td>
						<td>
							<a href="{{ route('aku2.show',$kamu2->id) }}" class="btn btn-success">Show</a>
						</td>
						<td>
							<form method="post" action="{{ route('aku2.destroy',$kamu2->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini??')">Delete</button>
							</form>
						</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection
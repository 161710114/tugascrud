@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data Barang
			  	<div class="panel-title pull-right"><a href="{{ route('aku.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>nama_pakaian</th>
					  <th>ukuran</th>
					  <th>harga</th>
					  <center><th colspan="3">Action</th></center>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($aku as $kamu)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $kamu->nama_pakaian }}</td>
				    	<td><p>{{ $kamu->ukuran }}</p></td>
				    	<td><p>{{ $kamu->harga }}</p></td>
						<td>
							<a class="btn btn-warning" href="{{ route('aku.edit',$kamu->id) }}">Edit</a>
						</td>
						<td>
							<a href="{{ route('aku.show',$kamu->id) }}" class="btn btn-success">Show</a>
						</td>
						<td>
							<form method="post" action="{{ route('aku.destroy',$kamu->id) }}">
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
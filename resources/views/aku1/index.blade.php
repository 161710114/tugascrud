@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data Obat
			  	<div class="panel-title pull-right"><a href="{{ route('aku1.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>nama_obat</th>
					  <th>jenis_obat</th>
					  <th>harga_jual</th>
					  <center><th colspan="3">Action</th></center>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($aku1 as $kamu1)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $kamu1->nama_obat }}</td>
				    	<td><p>{{ $kamu1->jenis_obat }}</p></td>
				    	<td><p>{{ $kamu1->harga_jual }}</p></td>
						<td>
							<a class="btn btn-warning" href="{{ route('aku1.edit',$kamu1->id) }}">Edit</a>
						</td>
						<td>
							<a href="{{ route('aku1.show',$kamu1->id) }}" class="btn btn-success">Show</a>
						</td>
						<td>
							<form method="post" action="{{ route('aku1.destroy',$kamu1->id) }}">
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
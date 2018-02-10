@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data Sepatu
			  	<div class="panel-title pull-right"><a href="{{ route('aku3.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>merk_sepatu</th>
					  <th>ukuran</th>
					  <th>harga</th>
					  <center><th colspan="3">Action</th></center>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($aku3 as $kamu3)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $kamu3->merk_sepatu }}</td>
				    	<td><p>{{ $kamu3->ukuran }}</p></td>
				    	<td><p>{{ $kamu3->harga }}</p></td>
						<td>
							<a class="btn btn-warning" href="{{ route('aku3.edit',$kamu3->id) }}">Edit</a>
						</td>
						<td>
							<a href="{{ route('aku3.show',$kamu3->id) }}" class="btn btn-success">Show</a>
						</td>
						<td>
							<form method="post" action="{{ route('aku3.destroy',$kamu3->id) }}">
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
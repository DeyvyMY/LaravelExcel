@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Export Excel With Laravel Excel</div>

				<div class="panel-body">
					Click to Export¡¡
				</div>
			</div>
			<form action="/export" method="GET">
				<button class="btn btn-success">
					Export Excel
				</button>
			</form>
		</div>
	</div>
</div>
@endsection

<!DOCTYPE html>
<html>
<head>
	<title>All</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
</head>
<body>
	<div class="container">
		<h2>All Product</h2>
		<table class="table table-bordered" id="xyz">
			<thead>
				<th>Product</th>
				<th>Category</th>
				<th>Price</th>
				<th>Update</th>
				<th>Remove</th>
			</thead>
			<tbody>
				@if($products)
					@foreach($products as $p)
						<tr>
							<td>{{ $p->product }}</td>
							<td>{{ $p->category }}</td>
							<td>{{ $p->price }}</td>
							<td class="noExport"><button>Update</button></td>
							<td><button>Remove</button></td>
						</tr>
					@endforeach
				@endif
			</tbody>
		</table>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
	<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
	
	<script>
		$(document).ready(function(){
			$("#xyz").DataTable({
				"columnDefs": [{
					"targets":[3,4],
					"orderable": false,
				}],
				 dom: 'Blfrtip',
		        buttons: [
		       {
		           extend: 'pdf',
		           footer: true,
		    	   exportOptions: {
                    columns: [ 0,1,2]
          		}
		       },
		       {
		           extend: 'csv',
		           footer: false,
		           exportOptions: {
                    columns: [ 0,1,2]
          		}
		       },
		       {
		           extend: 'excel',
		           footer: false,
		           exportOptions: {
                   columns: [ 0,1,2]
          		}
		       }         
		    ] 
			});
		});
	</script>
</body>

</html>
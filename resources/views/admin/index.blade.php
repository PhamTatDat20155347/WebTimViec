@extends('admin.layout.index')
@section('content')
	<div id="page-wrapper">
        <div class="container-fluid">
        	<div id="container">
			</div>
        </div>
    </div>
@endsection
@section('script')
	<script type="text/javascript">
        $(function() {
          $('#container').highcharts( <?php echo json_encode($chart) ?>)
        });
    </script>
@endsection
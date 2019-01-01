@section('header_styles')

<link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/Buttons/css/buttons.min.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/buttons.css')}}"/>

@stop
<div class="container text-center">
    <br> <br> <br><br> <br>
    <div class="list-group social_dashboard_margin_top">

	<button class="btn btn-mint " type="button"  id="up3"  aria-haspopup="true" onclick="window.location.href = '/'"
		aria-expanded="true"  title=" {{ __('general.Please log in') }}" >
	    {{ __('general.Please log in') }}&nbsp;&nbsp; <i class="fa fa-caret-right"> </i>
	</button>

    </div>
</div>




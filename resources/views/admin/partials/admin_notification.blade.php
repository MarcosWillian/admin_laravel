@if (session('status'))
	<div class="alert alert-{{ session('status') }} alert-dismissible notification-manager">
		<strong><i class="fa fa-bell" aria-hidden="true"></i></strong> &nbsp;
		{{ session('message') }}
	</div>
@endif

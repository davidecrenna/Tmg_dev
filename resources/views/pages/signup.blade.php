@extends('master')

@section('content')

<nav class="navbar navbar-fixed-top navbar-tmg">
	<div class="container-fluid">

		<div class="navbar-header">
			<a class="navbar-brand" href="{{url('/')}}"><img src="../../img/logobrown.png" alt=""></a>
		</div>

		<div class="navbar-master">

			<ul class="nav navbar-nav">
				<li><button type="button" class="btn btn-default navbar-btn btn-lg"><a href="javascript:void(0)"><i class="fa fa-sign-in"></i> Accedi</a> </button></li>
				<li><button type="button" class="btn btn-primary navbar-btn btn-lg"><a href="{{url('/')}}"><i class="fa fa-sign-in"></i> Home</a> </button></li>
			</ul>

		</div>
	</div>
</nav>

<section class="home__slider__container">

	<ul class="home__slider">
		<li><span></span></li>
		<li><span></span></li>
		<li><span></span></li>
		<li><span></span></li>
		<li><span></span></li>
		<li><span></span></li>
	</ul>

	<div class="signup__intro">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<form class="form-horizontal" action="" method="POST">
						<fieldset>

							<div class="control-group">
								<label class="control-label" for="email">E-mail</label>
								<div class="controls">
									<input type="email" id="email" name="email" placeholder="" class="form-control input-lg">
									<p class="help-block"></p>
								</div>
							</div>

						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>

</section>



@stop
@extends('master')

@section('content')

<nav class="navbar navbar-fixed-top navbar-tmg">
	<div class="container-fluid">

		<div class="navbar-header">
			<a class="navbar-brand" href="{{ url('/') }}"><img src="../../img/logobrown.png" alt=""></a>
			<span> sono il logo e Faccio schifo</span>
		</div>

		<div class="navbar-master">

			<ul class="nav navbar-nav">
				<li><button type="button" class="btn btn-default navbar-btn btn-lg"><a href="javascript:void(0)"><i class="fa fa-sign-in"></i> Accedi</a> </button></li>
				<li><button type="button" class="btn btn-primary navbar-btn btn-lg"><a href="{{ url('/signup') }}"><i class="fa fa-user-plus"></i> Registrati</a></button></li>
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

	<div class="home__intro">
		<h1>Top Manager Group</h1>
		<p>Sto pensando a un cazzo di motto che spacchi il culo Tipo:</p>
		<h3>Costruiamo la tua identità digitale</h3>
		<h3>Un nuovo modo di farsi conoscere</h3>
		<p>io rifarei subito il logo, deve essere un qualcosa che ricordi una carta, per riferirsi alla web identity card</p>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<p>Accedi:</p>
				</div>
				<div class="col-xs-12 col-sm-4"><button type="button" class="btn btn-facebook btn-block btn-lg"><a href="javascript:void(0)"><i class="fa fa-facebook"></i> Facebook</a> </button></div>
				<div class="col-xs-12 col-sm-4"><button type="button" class="btn btn-google btn-block btn-lg"><a href="javascript:void(0)"><i class="fa fa-google"></i> Google</a> </button></div>
				<div class="col-xs-12 col-sm-4"><button type="button" class="btn btn-mail btn-block btn-lg"><a href="javascript:void(0)"><i class="fa fa-envelope-o"></i> Mail</a> </button></div>
			</div>
		</div>
	</div>
	
</section>

		
@stop
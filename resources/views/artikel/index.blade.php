@extends('layouts.master')

@section('banner')


{{-- <div class="pageheader-content row">
	<div class="col-full">

		<div class="featured">

			<div class="featured__column featured__column--big">
				<div class="entry" style="background-image:url('images/thumbs/featured/featured-guitarman.jpg');">

					<div class="entry__content">
						<span class="entry__category"><a href="#0">Music</a></span>

						<h1><a href="#0" title="">What Your Music Preference Says About You and Your
								Personality.</a></h1>

						<div class="entry__info">
							<a href="#0" class="entry__profile-pic">
								<img class="avatar" src="images/avatars/user-03.jpg" alt="">
							</a>

							<ul class="entry__meta">
								<li><a href="#0">John Doe</a></li>
								<li>December 29, 2017</li>
							</ul>
						</div>
					</div> <!-- end entry__content -->

				</div> <!-- end entry -->
			</div> <!-- end featured__big -->

			<div class="featured__column featured__column--small">

				<div class="entry" style="background-image:url('images/thumbs/featured/featured-watch.jpg');">

					<div class="entry__content">
						<span class="entry__category"><a href="#0">Management</a></span>

						<h1><a href="#0" title="">The Pomodoro Technique Really Works.</a></h1>

						<div class="entry__info">
							<a href="#0" class="entry__profile-pic">
								<img class="avatar" src="images/avatars/user-03.jpg" alt="">
							</a>

							<ul class="entry__meta">
								<li><a href="#0">John Doe</a></li>
								<li>December 27, 2017</li>
							</ul>
						</div>
					</div> <!-- end entry__content -->

				</div> <!-- end entry -->

				<div class="entry" style="background-image:url('images/thumbs/featured/featured-beetle.jpg');">

					<div class="entry__content">
						<span class="entry__category"><a href="#0">LifeStyle</a></span>

						<h1><a href="#0" title="">Throwback To The Good Old Days.</a></h1>

						<div class="entry__info">
							<a href="#0" class="entry__profile-pic">
								<img class="avatar" src="images/avatars/user-03.jpg" alt="">
							</a>

							<ul class="entry__meta">
								<li><a href="#0">John Doe</a></li>
								<li>December 21, 2017</li>
							</ul>
						</div>
					</div> <!-- end entry__content -->

				</div> <!-- end entry -->

			</div> <!-- end featured__small -->
		</div> <!-- end featured -->

	</div> <!-- end col-full -->
</div> --}}
@endsection

@section('content')
<section class="s-content">

	<div class="row masonry-wrap">
		<div class="masonry">
			@foreach($data as $d)
			<article class="masonry__brick entry format-standard" data-aos="fade-up">

				<div class="entry__thumb">
					<a href="/artikel/{{$d->slug}}" class="entry__thumb-link">
						<img src="foto-artikel/{{$d->gambar}}" alt="">
					</a>
				</div>

				<div class="entry__text">
					<div class="entry__header">

						<div class="entry__date">
							<a href="/artikel/{{$d->slug}}">{{$d->created_at}}</a>
						</div>
						<h1 class="entry__title"><a href="/artikel/{{$d->slug}}">{{$d->judul}}</a></h1>

					</div>
					<div class="entry__meta">
						<span class="entry__meta-links">
							<a>{{$d->kategori}}</a>
							@auth
							<a href="{{url('/edit-artikel')}}/{{$d->id}}" class="btn btn--primary"
								style="display: {{Auth::user()->id == $d->user->id ? "block" : "none"}}">
								Edit
							</a>
							@endauth
						</span>
					</div>
				</div>

			</article> <!-- end article -->
			@endforeach
		</div> <!-- end masonry -->
	</div> <!-- end masonry-wrap -->

	<div class="row">
		<div class="col-full">
			<nav class="pgn">
				<ul>
					<li><a class="pgn__prev" href="#0">Prev</a></li>
					<li><a class="pgn__num" href="#0">1</a></li>
					<li><span class="pgn__num current">2</span></li>
					<li><a class="pgn__num" href="#0">3</a></li>
					<li><a class="pgn__num" href="#0">4</a></li>
					<li><a class="pgn__num" href="#0">5</a></li>
					<li><span class="pgn__num dots">…</span></li>
					<li><a class="pgn__num" href="#0">8</a></li>
					<li><a class="pgn__next" href="#0">Next</a></li>
				</ul>
			</nav>
		</div>
	</div>

</section>
@endsection
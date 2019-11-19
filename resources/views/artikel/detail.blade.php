@extends('layouts.master')

@section('content')
<section class="s-content s-content--narrow s-content--no-padding-bottom">

	<article class="row format-standard">

		<div class="s-content__header col-full">
			<h1 class="s-content__header-title">
				{{$data->judul}}
			</h1>
			<ul class="s-content__header-meta">
				<li class="date">{{$data->created_at}}</li>
				<li class="cat">
					In
					<a href="#">{{$data->kategori}}</a>
				</li>
			</ul>
		</div> <!-- end s-content__header -->

		<div class="s-content__media col-full">
			<div class="s-content__post-thumb">
				<img src="../foto-artikel/{{$data->gambar}}" sizes="(max-width: 2000px) 100vw, 2000px"
					style="text-align: center;" alt="">
			</div>
		</div> <!-- end s-content__media -->

		<div class="col-full s-content__main">

			{!! $data->deskripsi !!}

			<p class="s-content__tags">
				<span>Post Tags</span>

				<span class="s-content__tag-list">
					<p>{{$data->kategori}}</p>
				</span>
			</p> <!-- end s-content__tags -->

			<div class="s-content__author">
				<img src="{{asset('blog/images/avatars/user-03.jpg')}}" alt="">
				<div class="s-content__author-about">
					<span>Author Name</span>
					<h4 class="s-content__author-name">
						<p>{{$data->user->name}}</p>
					</h4>
				</div>

			</div> <!-- end s-content__main -->

	</article>


	<!-- comments
			================================================== -->
	<div class="comments-wrap">

		<div id="comments" class="row">
			<div class="col-full">

				<h3 class="h2">Comments</h3>

				<!-- commentlist -->
				<ol class="commentlist">
					@foreach($data->komen as $dk)
					<li class="depth-1 comment">

						<div class="comment__avatar">
							<img width="50" height="50" class="avatar" src="{{asset('blog/images/avatars/user-01.jpg')}}"
								alt="">
						</div>

						<div class="comment__content">

							<div class="comment__info">
								<cite>{{$dk->user->name}}</cite>

								<div class="comment__meta">
									<time
										class="comment__time">{{ date('M d, Y h:i A', strtotime($dk->created_at)) }}</time>
								</div>
							</div>

							<div class="comment__text">
								<p>{{$dk->commenttext}}</p>
							</div>

						</div>

					</li> <!-- end comment level 1 -->
					@endforeach
				</ol> <!-- end commentlist -->


				<!-- respond
						================================================== -->
				<div class="respond">

					<h3 class="h2">Add Comment</h3>

					@auth
					<form action="{{url('/buat-komen')}}" method="POST">
						{{ csrf_field()}}
						<fieldset>
							<input type="hidden" value="{{$data->id}}" name="artikel_id">

							<div class="message form-field">
								<textarea name="commenttext" id="commenttext" class="full-width"
									placeholder="Your Message"></textarea>
							</div>

							<button type="submit" class="submit btn--primary btn--large full-width">Submit</button>

						</fieldset>
					</form> <!-- end form -->
					@endauth

				</div> <!-- end respond -->

			</div> <!-- end col-full -->

		</div> <!-- end row comments -->
	</div> <!-- end comments-wrap -->

</section> <!-- s-content -->
@stop
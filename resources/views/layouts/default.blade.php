<!--
______                            _              _                                     _
| ___ \                          | |            | |                                   | |
| |_/ /___ __      __ ___  _ __  | |__   _   _  | |      __ _  _ __  __ _ __   __ ___ | |
|  __// _ \\ \ /\ / // _ \| '__| | '_ \ | | | | | |     / _` || '__|/ _` |\ \ / // _ \| |
| |  | (_) |\ V  V /|  __/| |    | |_) || |_| | | |____| (_| || |  | (_| | \ V /|  __/| |
\_|   \___/  \_/\_/  \___||_|    |_.__/  \__, | \_____/ \__,_||_|   \__,_|  \_/  \___||_|
                                          __/ |
                                         |___/
  ========================================================
                                           phphub.org

  --------------------------------------------------------
  Laravel: v5.1 LTS
-->

<!DOCTYPE html>
<html lang="zh">
	<head>

		<meta charset="UTF-8">

		<title>
			@section('title')
				重庆-零二三IT圈
			@show
		</title>


		  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

		<meta name="keywords" content="重庆互联网,重庆PHP,重庆互联网招聘,PHP论坛,IT社区" />
		<meta name="author" content="The PHP China Community." />
		<meta name="description" content="@section('description') 零二三it圈是重庆的一个专业的互联网论坛，集合专业技术讨论，招聘，尤其在PHP方面。 @show" />
        <meta name="_token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="{{ elixir('assets/css/styles.css') }}">

        <link rel="shortcut icon" href="{{ cdn('favicon.ico') }}"/>

        <script>
            Config = {
                'cdnDomain': '{{ get_cdn_domain() }}',
                'user_id': {{ $currentUser ? $currentUser->id : 0 }},
                'routes': {
                    'notificationsCount' : '{{ route('notifications.count') }}',
                    'upload_image' : '{{ route('upload_image') }}'
                },
                'token': '{{ csrf_token() }}',
                'following_users': @if($currentUser) {!!$currentUser->present()->followingUsersJson()!!} @else [] @endif
            };

			var ShowCrxHint = '{{isset($show_crx_hint) ? $show_crx_hint : 'no'}}';
        </script>

	    @yield('styles')

	</head>
	<body id="body">

		<div id="wrap">

			@include('layouts.partials.nav')

			<div class="container main-container">

				@if(\Auth::check() && !\Auth::user()->verified && !Request::is('email-verification-required'))
				<div class="alert alert-warning">
		            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		            邮箱未激活，请前往 {{ \Auth::user()->email }} 查收激活邮件，激活后才能完整地使用社区功能，如发帖和回帖。未收到邮件？请前往 <a href="{{ route('email-verification-required') }}">重发邮件</a> 。
		        </div>
				@endif

				@include('flash::message')

				@yield('content')

			</div>

@include('layouts.partials.footer')

		</div>



        <script src="{{ elixir('assets/js/scripts.js') }}"></script>

	    @yield('scripts')

        @if (App::environment() == 'production')
		<script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', '{{ getenv('GA_Tracking_ID') }}', 'auto');
          ga('send', 'pageview');

        </script>
        @endif

		@if ( config('app.debug') )
	    <script type="text/javascript">
	        document.write('<script src="//localhost:35729/livereload.js?snipver=1" type="text/javascript"><\/script>')
	    </script>
	    @endif

	</body>
</html>

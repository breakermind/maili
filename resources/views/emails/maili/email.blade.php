<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{ $mail->subject }}</title>
	<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<style type="text/css">
		body {background: #fff; padding: 0px; margin: 0px;}
		a {font-weight: 600;}
		a:hover {color: #f25}
		.bg {font-size: 16px; font-weight: 400; width: 100%; min-height: 100vh;}
		.bg * {color: #003399; font-family: 'Outfit', sans-serif; text-decoration: none; box-sizing: border-box; transition: all .6s; max-width: 100%; box-sizing: border-box;}
		.box {margin: 50px auto; padding: 10px; width: 90%; max-width: 625px; background: #00339906; border-radius: 6px;}
		.msg {background: #fff; padding: 20px;}
		.nobg {color: #00339933; padding: 20px; text-align: center;}
		.btn {color: #003399; border: 2px solid #003399; padding: 12px 32px; display: inline-block;}
		.btn:hover {background: #00339922; color: #003399 !important; cursor: pointer;}
		.code {padding: 12px 20px; margin: 10px 0px; border: 1px dotted #003399; text-align: center;}
		.logo {max-height: 90px;}
		.content {font-weight: 400;}
		.company {margin: 10px 0px; font-weight: 700; font-size: 18px;}
		.link {color: #00339966; font-size: 14px;}
	</style>
</head>
<body>
	<div class="bg">
		<div class="box">
			<div class="msg">
				<img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/45/Badge_of_the_European_Border_and_Coast_Guard.svg/1200px-Badge_of_the_European_Border_and_Coast_Guard.svg.png">
				<h1>@lang('Hello') {{ $mail->name ?? '' }}</h1>
				<p class="content">{!! $mail->message !!}</p>

				@if(!empty($mail->btn_href))
					<a href="{{ $mail->btn_href }}" class="btn">{{ __($mail->btn_text) }}</a>
				@endif

				@if(!empty($mail->code))
					<div class="code">{{ $mail->code }}</div>
				@endif

				<p class="content">{!! $mail->bye ?? __('Regards') !!}</p>

				<div class="regards">
					<div class="company">Company Ltd.</div>
					<div>00-000 Warsaw</div>
					<div>Kolorowa 256</div>
					<div>email@example.com</div>
					<div>+00 100 200 300</div>
				</div>
			</div>

			@if(!empty($mail->unsubscribe))
				<div class="nobg">
					<a href="{{ $mail->unsubscribe }}" class="link" target="__blank">@lang('Unsubscribe')</a>
				</div>
			@endif

		</div>
	</div>
</body>
</html>

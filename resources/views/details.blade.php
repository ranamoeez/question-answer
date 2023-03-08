<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>COURSE</title>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
	<div class="container">
		<div class="row justify-content-center mt-3">
			<div class="col-md-7">
				<form>
					@if(!empty(@$list))
						@foreach(@$list as $k => $v)
							@php
								$questions = json_decode(@$v->questions);
							@endphp
							@foreach($questions as $key => $value)
								<div class="form-group border rounded shadow mb-3">
									<div class="form-row px-3 py-2">
										<div class="col-sm-10 col-9">
											<label class="label-1">{{@$value->question}}</label>
											@php
												$answers = explode(",", @$value->answer);
											@endphp
											@foreach($answers as $ke => $val)
												<div class="form-check">
													<input class="form-check-input" type="radio" name="option_{{$ke}}" id="" value="">
													<label class="form-check-label new-label" for="option_{{$ke}}">
														{{@$val}}
													</label>
												</div>
											@endforeach
										</div>
										<div class="col-sm-2 col-3">
											<div class="text-center">
												<span class="mt-2 badge badge-pill badge-purp">Mandatory</span>
											</div>
										</div>
									</div>
								</div>
							@endforeach
							<div class="form-group text-right">
								<button class="btn btn-purp text-white">To Send</button>
							</div>
						@endforeach
					@endif
				</form>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Md. Bokhtiar Nadeem Shawon">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="">
	<title>Login Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
	<section class="h-100 p-5" style="margin-top:-5%">
		<div class="container h-100">
            {{-- <h1 style="text-align: center">Login #2001</h1> --}}
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-2 col-xl-5 col-lg-3 col-md-7 col-sm-9">
					<div class="card shadow-lg" style="margin-top:10%">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQclFgCXr6SY3g5N-1INskobw1tFVcbvmafGQ&s" alt="logo" height="200">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Sign in</h1>
                            
							<form method="POST" class="needs-validation" novalidate="" autocomplete="off" action="/login">
                                @csrf
								<div class="mb-3">
									<input id="username" type="text" class="form-control" placeholder="Username" name="username" value="" required autofocus>
									
								</div>
                                

								<div class="mb-3">
									<input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
								    <div class="invalid-feedback">
								    	Password is required
							    	</div>
								</div>

                                <div class="d-grid gap-2" style="margin-bottom:5px">
                                    <button class="btn btn-success" type="button">Sign in</button>
                                  </div>

								<div class="d-flex align-items-center ">
									<div class="form-check mt-2 col-md-12">
										<input type="checkbox" name="remember" id="remember" class="form-check-input">
										<label for="remember" class="form-check-label " style="color:green">Remember Me</label>
                                        <a href="" class="float-end text-gray-500 text-decoration-none" style="color: gray;">
											Forgot Password?
										</a>
									</div>
								</div>
							</form>
                            <div class=" py-3 border-0">
                                <div class="text-center">
                                    Not a member? <a href="register.html" class="text-decoration-none" style="color: green;">Sign up</a>
                                </div>
                            </div>
						</div>
                        
					</div>

				</div>
			</div>
		</div>
	</section>

	<script src="{{ asset('js/login.js') }}"></script>
</body>
</html>
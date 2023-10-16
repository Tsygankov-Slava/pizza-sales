 <div class="container h-50">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-primary text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
                    <h2 class="fw-bold mb-1 pb-4 text-uppercase">Sign-in</h2>
                    <p class="text-white-50 mb-5">Please enter your login and password!</p>
                    <form action="{{ route('login-form') }}" method="post">
                        @csrf
                        <div class="form-outline form-white mb-5">
                            <input type="text" name="login" id="login" placeholder="Email or Login" class="form-control form-control-lg" />
                        </div>

                        <div class="form-outline form-white mb-5">
                            <input type="password" name="password" id="password" placeholder="Password" class="form-control form-control-lg"/>
                        </div>

                        <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

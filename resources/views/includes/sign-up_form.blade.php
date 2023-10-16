 <div class="container h-50">
    <div class="row justify-content-center align-items-center h-50">
        <div class="col-12 col-lg-9 col-xl-7">
            <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <div class="card-body p-4 p-md-5">
                    <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
                    <form action="{{ route('register-form') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="text" name="first_name" id="first_name" placeholder="First Name" class="form-control form-control-lg" />
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="text" name="last_name" id="last_name" placeholder="Last Name" class="form-control form-control-lg" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="text" name="login" id="login" placeholder="Login" class="form-control form-control-lg" />
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="password" name="password" id="password" placeholder="Password" class="form-control form-control-lg" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4 d-flex align-items-center">
                                <div class="form-outline datepicker w-100">
                                    <input type="text" name="birthday" id="birthday" placeholder="Birthday" class="form-control form-control-lg" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4 pb-2">
                                <div class="form-outline">
                                    <input type="email" name="mail" id="mail" placeholder="Email" class="form-control form-control-lg" />
                                </div>
                            </div>
                            <div class="col-md-6 mb-4 pb-2">
                                <div class="form-outline">
                                    <input type="phone" name="phone" id="phone" placeholder="Phone" class="form-control form-control-lg" />
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 pt-2">
                            <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

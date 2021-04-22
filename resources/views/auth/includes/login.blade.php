<div class="animate form login_form">
    <section class="login_content">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1>Login Form</h1>
            <div>
                <input name="email" type="email" class="form-control" placeholder="E-mail" required="" />
            </div>
            <div>
                <input name="password" type="password" class="form-control" placeholder="Password" required="" />
            </div>
            <div>
                <button type="submit" class="btn btn-default submit">submit</button>
                <a class="reset_pass" href="#">Lost your password?</a>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
                <p class="change_link">New to site?
                    <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                    <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                    <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and
                        Terms</p>
                </div>
            </div>
        </form>
    </section>
</div>
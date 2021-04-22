<div id="register" class="animate form registration_form">
    <section class="login_content">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h1>Create Account</h1>
            <div>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            </div>
            <div>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email">
            </div>
            <div>
                <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
            </div>
            <div>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password">
            </div>
            <div>
                <button type="submit" class="btn btn-default submit">submit</button>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
                <p class="change_link">Already a member ?
                    <a href="#signin" class="to_register"> Log in </a>
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
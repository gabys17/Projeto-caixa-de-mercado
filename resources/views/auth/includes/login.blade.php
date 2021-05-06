<div class="animate form login_form">
    <section class="login_content">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1>Cadastre-se aqui</h1>
            <div>
                <input name="email" type="email" class="form-control" placeholder="E-mail" required="" />
            </div>
            <div>
                <input name="password" type="password" class="form-control" placeholder="Password" required="" />
            </div>
            <div>
                <button type="submit" class="btn btn-default submit">enviar</button>
                <a class="reset_pass" href="#">Nao lembra a senha?</a>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
                <p class="change_link">Novo na empresa?
                    <a href="#signup" class="to_register">Registre-se aqui</a>
                </p>
                <div class="clearfix"></div>
                <br/>
            </div>
        </form>
    </section>
</div>

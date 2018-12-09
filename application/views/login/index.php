<main class="login">
    <div class="mdc-card login-card">
        <h1 class="login-title">Iniciar sesión</h1>
        <form action="/login" class="login-form">
            <fieldset>
                <div class="mdc-text-field mdc-text-field--outlined login-form__input--container">
                    <input type="email" name="username" class="mdc-text-field__input" required>
                    <div class="mdc-notched-outline">
                        <div class="mdc-notched-outline__leading"></div>
                        <div class="mdc-notched-outline__notch">
                        <label for="tf-outlined" class="mdc-floating-label">Correo electrónico</label>
                        </div>
                        <div class="mdc-notched-outline__trailing"></div>
                    </div>
                </div>
                <div class="mdc-text-field mdc-text-field--outlined login-form__input--container">
                    <input type="password" name="password" class="mdc-text-field__input" required>
                    <div class="mdc-notched-outline">
                        <div class="mdc-notched-outline__leading"></div>
                        <div class="mdc-notched-outline__notch">
                        <label for="tf-outlined" class="mdc-floating-label">Contraseña</label>
                        </div>
                        <div class="mdc-notched-outline__trailing"></div>
                    </div>
                </div>
            </fieldset>
            <button type="submit" class="mdc-button mdc-button--raised login-form__button">Iniciar sesión</button>
        </form>
    </div>
</main>
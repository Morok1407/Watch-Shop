<?php require_once "../template/header.php" ?>

<main class="main">
    <section class="main__create create">
        <div class="container">
            <div class="create-inner">
                <div class="create__switch">
                    <div class="create__switch-login">
                        <a href="#">Login</a>
                    </div>
                    <div class="create__switch-registrar">
                        <a href="#">Create Account</a>
                    </div>
                </div>
                <div class="create__switch-line"></div>
                <div class="create__login">
                    <div class="create__welcome">
                        <h1>WELCOME BACK</h1>
                        <p>Sign into your existing account to earn rewards, check existing orders and more</p>
                    </div>
                    <form action="" class="create__form">
                        <input type="email" name="email" placeholder="Email">
                        <input type="password" name="password" placeholder="Password">
                        <div class="create__form-checkbox">
                            <input type="checkbox">
                            <p>Remember me</p>
                        </div>
                        <div class="create__form-button">
                            <button class="button">Sing Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="main__footer-bg">
    </section>
</main>

<?php require_once "../template/footer.php" ?>
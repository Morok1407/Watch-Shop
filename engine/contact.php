<?php require_once "../template/header.php" ?>

<main class="main">
    <section class="main__сonnection">
        <div class="container">
            <div class="connection-inner">
                <div class="connection__left">
                    <div class="connection__left-head">
                        <h1>Contact Us</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim facilisi elementum commodo ipsum. Aenean aenean adipiscing lect</p>
                    </div>
                    <form action="" class="connection__left-form">
                        <input type="text" name="name" placeholder="Full Name" required>
                        <input type="email" name="email" placeholder="Email" required>
                        <textarea name="Message" placeholder="Message"></textarea>
                        <div class="connection__left-button">
                            <button class="button">Send Message</button>
                        </div>
                    </form>
                </div>
                <div class="connection__right">
                    <img class="connection__right-img" src="/assets/img/bg-connection.png" alt="">
                    <img class="connection__right-send" src="/assets/img/icon/send-contact.svg" alt="">
                </div>
            </div>
        </div>
    </section>
</main>

<?php require_once "../template/footer.php" ?>
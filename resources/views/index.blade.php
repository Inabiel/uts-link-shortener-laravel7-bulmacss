<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <div class="wrapper">
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand pl-5">
                <a class="navbar-item" href="https://bulma.io">
                    Pendek.in
                </a>

                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false"
                    data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-end">
                    <a class="navbar-item">
                        Home
                    </a>

                    <a class="navbar-item">
                        Kenapa Pendek.in?
                    </a>

                    <a class="navbar-item">
                        Lihat Lebih Lanjut
                    </a>
                </div>

                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons">
                            <a class="button is-primary">
                                <strong>Sign up</strong>
                            </a>
                            <a class="button is-light">
                                Log in
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="hero-body">
            <div class="container">
                <section class="first-element">
                    <div class="columns is-vcentered top-margin is-centered">
                        <div class="column is-two-fifths">
                            <h1 class="bigger top-margin">Pendek.in</h1>
                            <h2 class="is-size-4">Karena yang panjang tidak tentu bagus.</h2>
                            <p class="body has-text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Tempore nisi ut
                                deleniti exercitationem dolor aperiam atque omnis, error officia inventore.</p>
                            <button class="button button-white is-medium mt-4"><span class="has-text-weight-bold">Daftar
                                    sekarang</span></button>
                        </div>
                        <div class="column is-narrow">
                            <img src='{{ asset('/img/front-image.jpg') }}' class="" width="450px" height="450px"
                                alt="image">
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <section class="has-background-link-dark">
        <div class="container">
            <div class="columns is-vcentered pt-3">
                <div class="column is-three-quarters-desktop is-full-mobile px-5">
                    <input class="input is-info is-medium" type="text" placeholder="Info input">
                </div>
                <div class="column">
                    <button class="button is-info is-medium is-fullwidth-mobile">Pendekin sekarang!</button>
                </div>
            </div>
            <div class="class column">
                <p class="has-text-white has-text-centered pb-3">Note: Untuk user tidak terdaftar, data tidak akan disimpan. jadi catat sendiri link mu :)</p>
            </div>
        </div>
    </section>
</body>
<script>
    document.addEventListener('DOMContentLoaded', () => {

        // Get all "navbar-burger" elements
        const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

        // Check if there are any navbar burgers
        if ($navbarBurgers.length > 0) {

            // Add a click event on each of them
            $navbarBurgers.forEach(el => {
                el.addEventListener('click', () => {

                    // Get the target from the "data-target" attribute
                    const target = el.dataset.target;
                    const $target = document.getElementById(target);

                    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                    el.classList.toggle('is-active');
                    $target.classList.toggle('is-active');

                });
            });
        }

    });

</script>

</html>

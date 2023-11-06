<?php include('components/header.php') ?>

<section class="auth py-5" style="width: 40%; margin-left: auto; margin-right: auto;">
    <div class="container">
        <h2 class="text-primary text-center mb-4">Register</h2>

        <form action="php/register.php" method="post">
            <div class="form-group mb-3">
                <label for="name">Full Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name">
            </div>
            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email">
            </div>
            <div class="form-group mb-3">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password"></input>

            </div>
            <div class="form-group mb-3">
                <label for="password2">Password2</label>
                <input type="password2" name="password2" id="password2" class="form-control" placeholder="Enter your password2"></input>

            </div>
            <button type="submit" class="btn btn-primary w-100" name="submit">Register</button>
            <p class="mt-3 text-secondary text-center">Aleady have account? <a href="login.php" class="text-primary">Login</a></p>
        </form>
    </div>
</section>
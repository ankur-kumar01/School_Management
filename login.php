<?php include('header.php') ?>
<section class="bg-light vh-100 d-flex">
    <div class="col-6 m-auto">
        <div class="card">
            <div class="card-body">
                <div class="text-center"><i class="fa fa-user fa-3x py-2"></i></div>
                <form action="actions/login.php" method="POST">
                    <div class="md-form">
                        <input type="email" id="typeText" name="email" class="form-control" />
                        <label class="form-label" for="typeText">Email</label>
                    </div>
                    <div class="md-form">
                        <input type="password" id="typeText" name="password" class="form-control vh-10" />
                        <label class="form-label" for="typeText">Password</label>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary" name="login">Login</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>

<?php include('footer.php') ?>
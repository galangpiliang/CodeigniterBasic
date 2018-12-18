<div class="jumbotron align-items-center bg-light">
        <div class="login" data-login="<?= $this->session->flashdata('flash') ?>">
            <!-- nothing -->
        </div>
        <div class="col-md-3 shadow p-3 bg-white rounded m-auto">
            <form class="form-signin" action="<?php echo base_url().'index.php/login/auth'?>" method="post">
                <h2 class="form-signin-heading mb-3">Please sign in</h2>
                <label for="username" class="sr-only">Username</label>
                <input type="text" id="username" name="username" class="form-control mb-3" placeholder="Username" required autofocus>
                <label for="password" class="sr-only">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                <div class="checkbox mb-2">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </form>
        </div>
</div>
<?php
class Forms {
    private function submit_button($value, $class = "btn btn-primary") {
        echo "<button type='submit' class='{$class}'>{$value}</button>";
    }

    public function signup() {
?>
        <h2>Sign Up</h2>
        <form action="signup.php" method="post" class="mt-3" style="max-width:500px;">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" id="username" name="username" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>

            <?php $this->submit_button('Sign Up'); ?>
            <p class="mt-2">Already have an account? <a href="signin.php">Log in</a></p>
        </form>
<?php
    }

    public function login() {
?>
        <h2>Sign In</h2>
        <form action="signin.php" method="post" class="mt-3" style="max-width:500px;">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>

            <?php $this->submit_button('Log In', 'btn btn-success'); ?>
            <p class="mt-2">Don’t have an account? <a href="signup.php">Sign up</a></p>
        </form>
<?php
    }
}

<div>
    <h1>Create Account</h1>
    <form>
        <label for="register-firstname">Firstname:</label>
        <input type="text" name="firstname" id="register-firstname" require>
        <br>

        <label for="register-lastname">Lastname:</label>
        <input type="text" name="lastname" id="register-lastname" require>
        <br>

        <label for="register-email">Email:</label>
        <input type="email" name="email" id="register-email" require>
        <br>

        <label for="form-password">Password:</label>
        <input type="password" name="password" id="form-password" require>
        <br>

        <label for="form-phone">Phone:</label>
        <input type="tel" name="phone" id="form-phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" require>
        <br>
        
        <p>Already have an account? <a href="<?php echo SERVERURL; ?>login/">Login</a></p>

        <input type="submit" value="Create">
    </form>
</div>
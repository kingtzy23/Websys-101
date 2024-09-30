<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Registration Form</h2>
    <form action="process.php" method="POST" class="needs-validation" novalidate>
    
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required pattern="[A-Za-z\s]+">
            <div class="invalid-feedback">Please enter a valid name (letters and spaces only).</div>
        </div>
        
      
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
            <div class="invalid-feedback">Please enter a valid email.</div>
        </div>
        
        
        <div class="mb-3">
            <label for="facebook" class="form-label">Facebook URL</label>
            <input type="url" class="form-control" id="facebook" name="facebook" required>
            <div class="invalid-feedback">Please enter a valid URL.</div>
        </div>
        
        
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
            <div class="invalid-feedback">Password must be at least 8 characters long and include at least one uppercase letter and a number.</div>
        </div>
        
        
        <div class="mb-3">
            <label for="confirm_password" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
            <div class="invalid-feedback">Passwords do not match.</div>
        </div>
        
       
        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="phone" name="phone" required pattern="\d+">
            <div class="invalid-feedback">Please enter a valid phone number.</div>
        </div>
        
        
        <div class="mb-3">
            <label class="form-label">Gender</label>
            <select class="form-select" name="gender" required>
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
            <div class="invalid-feedback">Please select your gender.</div>
        </div>
        
        
        <div class="mb-3">
            <label class="form-label">Country</label>
            <select class="form-select" name="country" required>
                <option value="">Select Country</option>
                <option value="USA">USA</option>
                <option value="Canada">Canada</option>
                <option value="UK">UK</option>
                
            </select>
            <div class="invalid-feedback">Please select your country.</div>
        </div>
        
       
        <div class="mb-3">
            <label class="form-label">Skills</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="skills[]" value="HTML"> HTML
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="skills[]" value="CSS"> CSS
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="skills[]" value="JavaScript"> JavaScript
            </div>
            <div class="invalid-feedback d-block">Please select at least one skill.</div>
        </div>
        
       
        <div class="mb-3">
            <label for="bio" class="form-label">Biography</label>
            <textarea class="form-control" id="bio" name="bio" maxlength="200" required></textarea>
            <div class="invalid-feedback">Please provide a biography (max 200 characters).</div>
        </div>
        
       
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>

<script>

(function () {
    'use strict';
    var forms = document.querySelectorAll('.needs-validation');
    Array.prototype.slice.call(forms).forEach(function (form) {
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });
})();


document.getElementById('confirm_password').addEventListener('input', function () {
    const password = document.getElementById('password').value;
    const confirmPassword = this.value;
    if (confirmPassword !== password) {
        this.setCustomValidity("Passwords do not match");
    } else {
        this.setCustomValidity("");
    }
});
</script>

</body>
</html>

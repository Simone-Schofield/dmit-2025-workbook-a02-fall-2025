<?php

require '../private/validation-functions.php';
require '../private/process-form.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Evil Corp.&trade; Henchman Application</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- JS for Range Slider -->
     <script src="js/main.js" defer></script>
  </head>
  <body class="bg-black container px-3 py-5">
    <main class="row justify-content-center align-items-center min-vh-100">
        <section class="col-md-10 p-5 rounded border bg-black border-secondary text-light">
            <h1 class="fw-light text-center">Evil Corp.&trade; Henchman Application</h1>
            <p class="lead text-center">Welcome to Evil Corp.&trade;, where dastardly dream meet career opportunities!</p>
            <p class="mb-5">We understand that being a henchperson is more than a job - it's a calling. Whether you're a master of mischief, a pro at pushing big red buttons, or someone who just wants to look cool guarding a secret lair, we want you on our team.</p>

            <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

            <section class="my-5">
                <h2 class="fw-light">Account Creation</h2>
                <!-- Text Input (Name) -->
                <div class="mb-4">
                    <!-- If there's an error message, we'll display right by the input the user needs to fix. -->
                    <?php if ($message_name != '') echo $message_name; ?>
                    <label for="name" class="form-label">Full Name:</label>
                    <input type="text" name="name" id="name" placeholder="Robin Banks" class="form-control" value="<?= $name; ?>">
                    <p class="form-text text-light">Enter your full name as it appears on your evil henchperson license or birth certificate. Pseudonyms (e.g. "The Crusher", "Brutal Brutus", or "Dave") can be added later.</p>
                </div>

                <!-- Email Input -->
                <div class="mb-4">
                    <?php if ($message_email != '') echo $message_email; ?>
                    <label for="email" class="form-label">Email Address:</label>
                    <input type="email" name="email" id="email" placeholder="example@evilcorp.com" class="form-control" value="<?= $email; ?>">
                    <p class="form-text text-light">Enter a valid email address that you check frequently - evil plans wait no one.</p>
                </div>

                <!-- Phone Input -->
                <div class="mb-4">
                    <?php if ($message_phone != '') echo $message_phone; ?>
                    <label for="phone" class="form-label">Phone Number:</label>
                    <input type="tel" name="phone" id="phone" placeholder="123 456 7890" class="form-control" value="<?= $phone; ?>">
                    <p class="form-text text-light">Provide a valid ten-digit number where we can reach you. Carrier pigeons are no longer accepted after the law suit.</p>
                </div>

                <!-- Date Input -->
                <div class="mb-4">
                    <?php if ($message_dob != '') echo $message_dob; ?>
                    <label for="dob" class="form-label">Date of Birth:</label>
                    <input type="date" name="dob" id="dob" class="form-control" value="<?= $dob; ?>" aria-describedby="dob-help">
                    <p class="form-text text-light" id="dob-help">Enter your date of birth. This helps us confirm you're old enough for hazardous henching.</p>
                </div>

                <!-- Password Creation -->
                <div class="mb-4">
                    <?php if ($message_password != '') echo $message_password; ?>
                    <label for="password" class="form-label">Secret Password:</label>
                    <input type="text" name="password" id="password" class="form-control" value="<?= $password; ?>">
                    <p class="form-text text-light">Choose a strong password, with:</p>
                    <ul class="form-text text-light">
                        <li>a minimum of 8 characters</li>
                        <li>at least one lowercase letter</li>
                        <li>at least one uppercase letter</li>
                        <li>at least one number</li>
                        <li>at least one of the following characters !@#$%^&*</li>
                    </ul>
                    <p class="form-text text-light">Avoid using easy-to-guess passwords, like "password123" or "evil4life".</p>
                </div>

                <!-- Password Check -->
                <div class="mb-4">
                    <?php if ($message_password_check != '') echo $message_password_check; ?>
                    <label for="" class="form-label"></label>
                    <input type="text" name="" id="" class="form-control" value="<?= $password_check; ?>">
                    <p class="form-text text-light"></p>
                </div>
                
            </section>

            <section class="my-5">
                <h2 class="fw-light">Qualifications</h2>

                <!-- Number Input (Years of Experience) -->
                <div class="mb-4">
                    <label for="" class="form-label"></label>
                    <input type="text" name="" id="" class="form-control" value="<?= $message_experience; ?>">
                    <p class="form-text text-light"></p>
                </div>

                <!-- Datalist (Location Preference) -->

                <!-- Radio Buttons (Department) -->

                <!-- Checkboxes (Training) -->

                <!-- Range Slider (Likert) -->

                <!-- Dropdown (How did you hear about us?) -->

                <!-- Textarea (Long Answer Question) -->
            </section>
                
            <!-- Submission -->
            <div class="my-4">
                <input type="submit" id="submit" name="submit" value="Create Account &amp; Apply" class="btn btn-warning">
            </div>
            <p class="form-text text-light">Evil Corp.&trade; prides itself on being an equal opportunity employer. All goons, mooks, minions, lackeys, grunts, and flunkies are encouraged to apply. Remember: just because we're evil doesn't mean we can't be equal.</p>
            </form>
        </section>
    </main>
  </body>
</html>
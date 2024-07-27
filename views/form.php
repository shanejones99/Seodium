<form id="form" method="post" action="" class="card w-50 border-top" onsubmit="event.preventDefault(); validateMyForm()">
    <div class="card-body border border-secondary border-4 p-4 w-100 rounded">
        <h3 class="card-title text-center">Enter Our Raffle </h3>
        <div class="mb-3 d-flex flex-column">
            <label for="name" class="form-label">Name:</label>
            <span class="text-danger" id="name_error"></span>
            <input type="text" id="name" name="name" class="form-control" value="<?php echo htmlspecialchars($_POST['name'] ?? '', ENT_QUOTES); ?>">
            <?php if (isset($errors['name'])) echo '<span class="error text-danger">' . $errors['name'] . '</span>'; ?>
        </div>
        <div class="mb-3 d-flex flex-column">
        <span class="text-danger" id="email_error"></span>
            <label for="email" class="form-label">Email:</label>
            <span class="text-danger" id="email_error"></span>
            <input type="text" id="email" name="email" class="form-control" value="<?php echo htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES); ?>">
            <?php if (isset($errors['email'])) echo '<span class="error text-danger">' . $errors['email'] . '</span>'; ?>
        </div>
        <div class="mb-3 d-flex flex-column">
            <span class="text-danger" id="date_of_birth_error"></span>
            <label for="email" class="form-label">Date of Birth:</label>
            <input type="date" id="date_of_birth" name="date_of_birth" class="form-control" value="<?php echo htmlspecialchars($_POST['date_of_birth'] ?? '', ENT_QUOTES); ?>">
            <?php if (isset($errors['date_of_birth'])) echo '<span class="error text-danger">' . $errors['email'] . '</span>'; ?>
        </div>
        <button type="submit" class="btn btn-primary text-white w-25 fw-bold">Submit</button>
    </div>
</form>
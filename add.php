<?php

// if (isset($_GET['submit'])) {
//     echo $_GET['email'];
//     echo $_GET['title'];
//     echo $_GET['ingredients'];
// }

$title = $email = $ingredients = '';

$errors = array(
    'email' => '',
    'title' => '',
    'ingredients' => ''
);

if (isset($_POST['submit'])) {

    //check email
    if (empty($_POST['email'])) {
        $errors['email'] = 'An email is required <br />';
    } else {
        $email = $_POST['email']; //htmlspecialchars security icin js kodu gomulmemesi icin
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            # code...
            $errors['email'] = 'email must be a valid email address';
        }
    }
    //check title
    if (empty($_POST['title'])) {
        $errors['title'] = 'An title is required <br />';
    } else {
        $title = $_POST['title'];
        if (!preg_match('/^[a-zA-Z\s]+$/', $title)) { //if false
            # code...
            $errors['title'] = ' Title must be letters and spaces only';
        }
        // echo htmlspecialchars($_POST['title']); //htmlspecialchars security icin js kodu gomulmemesi icin
    }
    //check ingredients
    if (empty($_POST['ingredients'])) {
        $errors['ingredients'] =  'An ingredients is required <br />';
    } else {
        // echo htmlspecialchars($_POST['ingredients']); //htmlspecialchars security icin js kodu gomulmemesi icin
        $ingredients = $_POST['ingredients'];
        if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
            # code...
            $errors['ingredients'] = ' Ingredients must be a comma seperated list';
        }
    }

    if (array_filter($errors)) {
        # code...
        // echo 'errors in the form';
    } else {
        header('Location: index.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<?php
include('./templates/header.php');
?>


<section class="container grey-text">
    <h4 class="center">Add a Pizza</h4>
    <form class="white" action="add.php" method="POST">
        <label>Your Email:</label>
        <input type="text" name="email" id="" value="<?php echo htmlspecialchars($email) ?>">
        <div class="red-text">
            <?php
            echo $errors['email'];
            ?>
        </div>
        <label>Pizza Title</label>
        <input type="text" name="title" id="" value="<?php echo htmlspecialchars($title) ?>">
        <div class="red-text">
            <?php
            echo $errors['title'];
            ?>
        </div>
        <label>Ingredients (comma seperated):</label>
        <input type="text" name="ingredients" id="" value="<?php echo htmlspecialchars($ingredients) ?>">
        <div class="red-text">

            <?php
            echo $errors['ingredients'];
            ?>
        </div>
        <div class="center">
            <input name='submit' type="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>


<?php
include('./templates/footer.php');
?>




</html>
<?php
$required = ['name', 'section', 'cardnumber', 'cardtype'];

foreach ($required as $field) {
    if (!isset($_POST[$field]) || trim($_POST[$field]) === '') {
        echo "<h1>Sorry</h1>";
        echo "<p>You did not fill out the form completely. ";
        echo "<a href='buyagrade.html'>Try again?</a></p>";
        exit;
    }
}
?>

<?php
// Exercise 5: Basic Validation
$required = ['name', 'section', 'cardnumber', 'cardtype'];

foreach ($required as $field) {
    if (!isset($_POST[$field]) || trim($_POST[$field]) === '') {
        echo "<h1>Sorry</h1>";
        echo "<p>You did not fill out the form completely. ";
        echo "<a href='buyagrade.html'>Try again?</a></p>";
        exit;
    }
}


// Exercise 4: Save Form Data

$name = trim($_POST['name']);
$section = trim($_POST['section']);
$cardnumber = trim($_POST['cardnumber']);
$cardtype = trim($_POST['cardtype']);

$line = $name . ';' . $section . ';' . $cardnumber . ';' . $cardtype . PHP_EOL;

// Append to file
file_put_contents('suckers.html', $line, FILE_APPEND);

// Read full file for display
$all = file_get_contents('suckers.html');
?>

<!DOCTYPE html>
<html>
<head>
  <title>Submission Confirmation</title>
</head>
<body>

<!-- Exercise 3: Display Input Data-->

<h1>Raw Form Data</h1>
<pre>
<?php print_r($_POST); ?>
</pre>

<h1>Form Input Values</h1>

<p>Your Name: <?= htmlspecialchars($name) ?></p>
<p>Section: <?= htmlspecialchars($section) ?></p>
<p>Card Number: <?= htmlspecialchars($cardnumber) ?></p>
<p>Card Type: <?= htmlspecialchars($cardtype) ?></p>

<!-- Stored Data Output-->

<h2>The current database contains:</h2>
<pre>
<?= htmlspecialchars($all) ?>
</pre>

</body>
</html>
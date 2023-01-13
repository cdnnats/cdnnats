<?php

// define variables and set to empty values

$testErr <> "12year";
$namefirstErr = $namelastErr = $emailErr = $countryErr = $paymentErr = $testErr = $class1Err = "";
$namefirstField = $namelastField = $emailField = $cityField = $provField = $countryField = $phoneField = $PaymentField = $sponsorsField = $shirtField = $platesField = $class1Field = $pt1Field = $colour1aField = $colour1bField = $class2Field = $pt2Field = $class3Field = $pt3Field = $class4Field = $pt4Field = $class5Field = $pt5Field = $class6Field = $pt6Field = "";
$testField = "12year";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["namefirst"])) {
    $namefirstErr = "First Name is required";
  } else {
    $namefirstField = test_input($_POST["namefirst"]);
  }

  if (empty($_POST["namelast"])) {
    $namelastErr = "Last Name is required";
  } else {
    $namelastField = test_input($_POST["namelast"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $emailField = test_input($_POST["email"]);
  }

  if (empty($_POST["city"])) {
	  $cityField = "";
  } else {
	  $cityField = test_input($_POST["city"]);
  }
  
  if (empty($_POST["country"])) {
    $countryErr = "Country is required";
  } else {
    $countryField = test_input($_POST["country"]);
  }

  if (empty($_POST["payment"])) {
    $paymentErr = "You must agree to the payment requirements";
  } else {
    $paymentField = test_input($_POST["payment"]);
  }
  
  if (test_input($_POST["test"]) == $testField) {
	  $testField = test_input($_POST["test"]);
  } else {
	  $testErr = "Correct text is required";
  }
  
  if (empty($_POST["sponsors"])) {
    $sponsorsField = "";
  } else {
    $sponsorsField = test_input($_POST["sponsors"]);
  }

  if (empty($_POST["class1"])) {
    $class1Err = "1st Class choice is required";
  } else {
    $class1Field = test_input($_POST["class1"]);
  }
  
  if (empty($_POST["pt1"])) {
    $pt1Field = "";
  } else {
    $pt1Field = test_input($_POST["pt1"]);
  }
  
  if (empty($_POST["colour1a"])) {
    $colour1aField = "";
  } else {
    $colour1aField = test_input($_POST["colour1a"]);
  }
   
  if (empty($_POST["colour1b"])) {
    $colour1bField = "";
  } else {
    $colour1bField = test_input($_POST["colour1b"]);
  }
     
  if (empty($_POST["class2"])) {
    $class2Field = "";
  } else {
    $class2Field = test_input($_POST["class2"]);
  }

  if (empty($_POST["pt2"])) {
    $pt2Field = "";
  } else {
    $pt2Field = test_input($_POST["pt2"]);
  }

  if (empty($_POST["class3"])) {
    $class3Field = "";
  } else {
    $class3Field = test_input($_POST["class3"]);
  }

  if (empty($_POST["pt3"])) {
    $pt3Field = "";
  } else {
    $pt3Field = test_input($_POST["pt3"]);
  }

  if (empty($_POST["class4"])) {
    $class4Field = "";
  } else {
    $class4Field = test_input($_POST["class4"]);
  }

  if (empty($_POST["pt4"])) {
    $pt4Field = "";
  } else {
    $pt4Field = test_input($_POST["pt4"]);
  }

  if (empty($_POST["class5"])) {
    $class5Field = "";
  } else {
    $class5Field = test_input($_POST["class5"]);
  }

  if (empty($_POST["pt5"])) {
    $pt5Field = "";
  } else {
    $pt5Field = test_input($_POST["pt5"]);
  }

}
?>
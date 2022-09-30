<?php
  class InvoiceController {
    //var $name="bonobo";
    //var $number="bonobo1";

    function __construct() {}

    //$invoice = new Invoice();

    function Create(Invoice $invoice){
      $name = $invoice->name;
      $number = $invoice->number;

      $sql = "INSERT INTO
          invoices
          (name, number)
          VALUES
          ('$name', '$number')";

      $conn = new mysqli(getHost(), getDBUser(), getPass(), getDB());

      if ($conn->connect_errno) {
        echo "Failed to connect to MySQL: " . $conn->connect_error;
        exit();
      }

      $result = $conn->query($sql);

      if (!($result)){
        if ($conn->errno){
          echo("query error " . $conn->error);
        } else {
          echo("unknown error");
        }
      }

      $conn->close();

      $result = runSQL($sql);
      echo $result;
    }
  }
?>

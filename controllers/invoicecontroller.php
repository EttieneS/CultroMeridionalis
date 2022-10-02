<?php
  class InvoiceController {

    function __construct() {}

    function Create(Invoice $invoice){
      $name = $invoice->name;
      $number = $invoice->number;

      $sql = "INSERT INTO
          invoices
          (name, number)
          VALUES
          ('$name', '$number')";

      $result = runSQL($sql);
      echo $result;
    }
  }
?>

<?php
  require "../../config.php";
  require_once "../../controllers/invoicecontroller.php";
  require_once "../../models/invoice_model.php";
  require "../../libraries/connections.php";

  if ($_POST['action'] == "create"){
    $name = $_POST['name'];
    $number = $_POST['number'];

    $invoice = new Invoice();

    $invoice->name = $name;
    $invoice->number = $number;

    $invoiceController = new InvoiceController();
    $result = $invoiceController->Create($invoice);

    echo $result;
  }
?>

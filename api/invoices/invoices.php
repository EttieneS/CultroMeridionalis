<?php
  require "../../config.php";
  require_once "../../controllers/invoicecontroller.php";
  require_once "../../models/invoice_model.php";
  require "../../libraries/connections/connections.php";

  header('Access-Control-Allow-Origin: http://localhost:4200');
  header('Access-Control-Allow-Methods: *');
  header("Content-Type: application/x-www-form-urlencoded; charset=utf-8");
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
  header('Access-Control-Allow-Credentials: true');
  header('Access-Control-Max-Age: 86400');

  $postdata = file_get_contents("php://input");
  $request = json_decode($postdata);
  $name = $request->name;

  // $data = json_decode($_POST);
  //
  // $name = $data->name;

  // $name = $_POST['name'];
  $number = "D006";//$_POST['number'];

  $invoice = new Invoice();

  $invoice->name = $name;
  $invoice->number = $number;

  $invoiceController = new InvoiceController();
  $result = $invoiceController->Create($invoice);

  echo $result;
  // if (!isset($_POST['api'])){
  //   echo "action not set";
  // }
  //
  // if (isset($_POST['api'])){
  //   if ($_POST['api'] == "create"){
  //     $name = $_POST['name'];
  //     $number = "D006";//$_POST['number'];
  //
  //     $invoice = new Invoice();
  //
  //     $invoice->name = $name;
  //     $invoice->number = $number;
  //
  //     $invoiceController = new InvoiceController();
  //     $result = $invoiceController->Create($invoice);
  //
  //     // header('Location: invoices.php');
  //     //return $post;
  //     echo $result;
  //   }
  // }
?>

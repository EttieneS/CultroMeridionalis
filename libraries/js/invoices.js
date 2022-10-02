function CreateInvoice() {
  var name = $("#name").val();

  $.ajax({
    url: "http://localhost/meridionalis/api/invoices/invoices.php",
    method: "POST",
    //dataType: 'json',
    type: "application/json",
    data: {
      action: "create",
      name: name
      //number: number
    },
    success: function(data) {
      alert("function success " + data);
      window.location.href = "http://localhost/meridionalis/api/invoices/index.php"
    },
    error: function(jqXHR, textStatus, errorThrown){
      alert("error");
    }
  });
}

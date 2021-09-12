$(document).ready(function(){
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
    $("#updateButton").click(function(){
        $("#updateClick").click();
    })
    $("#myInput1").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable1 tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
      $("#myInput2").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable2 tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
      $("#employeeSelect").change(function(){
          let ele = document.getElementById("d"+$(this).val());
          ele.style.setProperty ('display', 'block', 'important');
          $('d'+$(this).attr('id')).css("display", 'block !important');
          if($('#oldValues').val()){
            let elem = document.getElementById("d"+$(this).val());
            elem.style.setProperty ('display', 'none', 'important');
          }
          $('#oldValues').val($(this).val());
      });
      $(".pdelete").click(function(){
          $.post(
              "/project/employee_delete.php",
              {
                  employee_id: $(this).attr('id')
              },
              function(data){
                  location.reload();
              }
          )
      })
  });
  

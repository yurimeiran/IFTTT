$(".w3-btn").click(function() {
    var row = $(this).closest("tr");    // Find the row
    var id = row.find(".id").text(); // Find the text
    var text = row.find(".add_inf").val(); // Find the text
	var column = row.find(".add_inf").attr('name'); // Find the text
	var post = $(this).attr('name');
	var label = row.find("label").text();
	var reg = row.find(".editable").val();
	var path = row.find("img").attr('src');
	
	
 if (post != 'edit')
 {	 
   $('.loader').show();
   
    //this is for the test
   //alert(id+"  "+text + "  "+ column+ "  "+ post + "  "+ label + "  "+ reg);
   
	
	// AJAX: Send values
					$.ajax({
						url: "ajax-update.php",
						type: "POST",
						data: {
							id: id,
							col: column,
							val: text,
							post: post,
							reg: reg,
							path: path
							
						},
						cache: false,
						timeout: 10000,
						success: function(data) {
							// Alert the status of query
							if (data) {		
								$('.loader').hide();//once data is back hide spinning element							
								alert(data); //show the reply from ajax-update
								
								$(".add_inf").val(""); //clear the input field
								if (text != ''){
	                            row.find(".label").text(text); // update notes area with the users input
								}
								
								if (post == 'save'){					
								row.find(".reg").text(reg);
								}
								
								//hide the record that user chose to remove
								if (post == "remove"){
								$(row).closest("tr").hide();
								}	
							}
							
						}
					});
					
					
					
	
	
 }

});

//when Edit button is clicked
$(".edit").click(function(){
	
	$(this).text(function(i, v){
               return v === 'Hide ' ? 'Edit' : 'Hide '
            })
	//find closest table row 
	var row = $(this).closest("tr"); 
	//find element with class "editable" 
	row.find(".editable").toggle(); //show or hide element
	row.find(".save").toggle(); //show or hide element
	row.find(".save1").toggle(); //show or hide element
	row.find(".select").toggle(); //show or hide element
	row.find("#access").toggle(); //show or hide element
	$(".access1").toggle(); //show or hide element
	
	var reg = row.find(".editable").val();
	//alert(reg);
	
	
});

function test1()
{  


alert("works!!");
 var post = 'add';
 var dataString = 'post='+post;
 $.ajax ({
   type:"post",
   url: "functions.php",
   data:dataString,
   cache:false,
   success: function(html){
   $('#s').html(html);
}

  });
 return false;

}
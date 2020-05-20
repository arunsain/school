$(document).ready(function(){
	var i=1;
  $("#addQualification").click(function(){
    $("#addQualificationField").append('<div id="row'+i+'" ><div class="col-sm-4" ><label ><i class="fa fa-graduation-cap"></i>HIGHEST DEGREE</label><input required type="text" name="degree[]" placeholder="Degree" /></div><div class="col-sm-2"><label ><i class="fa fa-building"></i>UNIVERSITY/COLLEGE</label><select required name="university[]"><option value="">-- Select --</option><option value="IIT">IIT</option><option value="Harvard">Harvard</option></select></div><div class="col-sm-2"><label ><i class="fa fa-calaendar"></i>YEAR PASSED</label><select required name="yearPassed[]"><option value="">-- Select --</option><option value="2005">2005</option><option value="2005">2006</option></select></div><div class="col-sm-2"><label><i class="fa fa-puzzle-piece"></i>CGPA</label><input required name="CGPA[]" type="text" placeholder="CGPA" /></div><div class="col-sm-2"><button class="btn_remv" data-id="'+i+'" type="button"><i class="fa fa-paper-plane"></i>Remove</button></div><div class="clearfix"></div></div>');
  // alert('arun');
   i ++
  });


   $(document).on('click', '.btn_remv', function(){  
           var button_id = $(this).data("id");  
       
           $('#row'+button_id+'').remove();  
      });


 $(".removeBtnFetch").click(function(){
  //alert('axbs');
   

   var removeBtnFetch = $(this).data("id");  
       
           $('#newRow'+removeBtnFetch+'').remove(); 

 });


  var k=1;
  $("#addEventSchudle").click(function(){
    $("#eventSchudleDiv").append('<div id="addEventSchudleRow'+k+'"> <div class="col-sm-5"> <label ><i class="fa fa-graduation-cap"></i>SCHEDULE HEADING</label> <textarea required name="sheduleHead[]" rows="5"></textarea> </div> <div class="col-sm-5"> <label ><i class="fa fa-graduation-cap"></i>SCHEDULE CONTENT</label> <textarea name="sheduleContent[]" required rows="5"></textarea> </div> <div class="col-sm-2"><button class="removeSchedule" data-id="'+k+'" type="button"><i class="fa fa-paper-plane"></i>Remove</button></div> <div class="clearfix"></div></div>');
  // alert('arun');
    k++;
  });


  $(document).on('click', '.removeSchedule', function(){  
           var button_get_id = $(this).data("id");  
       
           $('#addEventSchudleRow'+button_get_id+'').remove();  
      });




   var m=1;
  $("#addQuestionButton").click(function(){
    $("#quertionDiv").append('<div id="addQuestionRow'+m+'"> <div class="col-sm-5"> <label ><i class="fa fa-graduation-cap"></i>QUESTION</label> <textarea required name="question[]" rows="2"></textarea> </div> <div class="col-sm-5"> <label ><i class="fa fa-graduation-cap"></i>ANSWERE</label> <textarea name="answere[]" required rows="2"></textarea> </div> <div class="col-sm-2"><button class="removeQuestion" data-id="'+m+'" type="button"><i class="fa fa-paper-plane"></i>Remove</button></div> <div class="clearfix"></div></div>');
  // alert('arun');
    k++;
  });

$(document).on('click', '.removeQuestion', function(){  
           var question_id = $(this).data("id");  
       
           $('#addQuestionRow'+question_id+'').remove();  
      });





 $(".removeQuestionEdit").click(function(){
  //alert('axbs');
   

   var removeBtnFetched = $(this).data("id");  
       
           $('#addQuestionRowEdit'+removeBtnFetched+'').remove(); 

 });


//   $('#submit').on('submit', function(event){
//   event.preventDefault();


//   console.log($(this).serialize());


// //   $.each([ 52, 97 ], function( index, value ) {
// //   alert( index + ": " + value );
// // });


// });

// $(".selectSubject").change(function(){
//   alert($(this).val());
// });



  




});
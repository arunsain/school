		 <script src="{{ asset('admincss/assets/js/jQuery_v3_2_0.min.js') }}"></script>
		<script src="{{ asset('admincss/assets/js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('admincss/assets/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('admincss/assets/plugins/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('admincss/assets/plugins/Chart.min.js') }}"></script>
		<script src="{{ asset('admincss/assets/plugins/jquery.dataTables.min.js') }}"></script>
		<script src="{{ asset('admincss/assets/plugins/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('admincss/assets/js/js.js') }}"></script>
         <script src="{{ asset('admincss/assets/js/customWebsite.js') }}"></script>
         <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
         <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
         <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

         <!-------validation cdn links-------->
         <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.0/jquery.validate.min.js"></script>
         <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.0/additional-methods.js"></script>

          <script src="{{ asset('admincss/assets/js/formValidation.js') }}"></script>
         <!-------validation cdn links-------->


           <script>
                        CKEDITOR.replace( 'editor1' );
                        setTimeout(function() { $(".hideFlash").hide(); },3000);


   @if(Session::has('message'))
    var type="{{Session::get('alert-type','info')}}"

    switch(type){
      case 'info':
             toastr.info("{{ Session::get('message') }}");
             break;
          case 'success':
              toastr.success("{{ Session::get('message') }}");
              break;
          case 'warning':
              toastr.warning("{{ Session::get('message') }}");
              break;
          case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
  @endif

  toastr.options = {
  "closeButton": false,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-top-right-full-width",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}



$('#newTimeTable').click(function(){
      alert("dscdscsfskfjskfskhsc");

        $.ajax({
           type:'POST',
           url:"{{ route('getTimeTable') }}",
           data:{id:4},
           success:function(data){
             alert(data);

              $("#dynamicTimeTable").html(data);
           }
        });
       
    });

 </script>


                <script type="text/javascript">
        Dropzone.options.dropzone =
         {
            maxFilesize: 1,
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
               return time+file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 5000,
            success: function(file, response) 
            {
                $('#user_table').DataTable().ajax.reload();
                
                 this.removeFile(file);
            },
            error: function(file, response)
            {
               return false;
            }
};


$('#user_table').DataTable({
           processing: true,
           serverSide: true,
           ajax: "{{ route('gallery.index') }}",
           columns:[
  {
    data: 'image',
    name: 'IMAGE',
    render: function(data, type, full, meta){
     return "<img src='{{ asset('storage/') }}"+'/'+data+"' width='150' height=120' class='img-thumbnail' />";
    },
    orderable: false
   },
   {
    data: 'action',
    name: 'ACTION',
    orderable: false
   }
  ]
        });





 $(document).on('click', '.deleteGallery', function(){
  user_id = $(this).data('id');

  swal({
  title: "Are You Want To Delete Image?",
  text: "Once deleted, you will not be able to recover this Image!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {

     $.ajax({
           url:"{{ url('admin/gallery-delete') }}"+"/"+user_id,
           beforeSend:function(){
          
           },
           success:function(data)
           {
           swal("Image has been deleted!", {
      icon: "success",
    });
             $('#user_table').DataTable().ajax.reload();
           }
    });


    
  } else {
    swal("Your Image is safe!");
  }
});
  
 });

  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

$(".selectSubject").change(function(){
  var id = $(this).val();


   $.ajax({
           type:'POST',
           url:"{{ route('ajax.getTeacher') }}",
           data:{id:id},
           success:function(data){
             // alert(data);

              $(".dynamicTeacher").html(data);
           }
        });
});

fill_datatable();

 function fill_datatable(classId = '', day = '')
    {
        var dataTable = $('#attendenceDetailedTable').DataTable({
            processing: true,
            serverSide: true,
            ajax:{
                url: "{{ route('show.timetable') }}",
                data:{classId:classId, day:day}
            },
            columns: [
                {
                    data:'day',
                    name:'day'
                },
                // {
                //     data:'Gender',
                //     name:'Gender'
                // },
                {
                    data:'time_slot',
                    name:'time_slot'
                },
                {
                    data:'class_id',
                    name:'class_id'
                },
                {
                    data:'subject_id',
                    name:'subject_id'
                },
                {
                    data:'teacher_id',
                    name:'teacher_id'
                }
            ]
        });
    }


     $('#filter').click(function(){
      //alert("dscdschsc");
        var classId = $('#classId').val();
        var day = $('#day').val();

        if(day != '' ||  classId != '')
        {
           alert("dscdschsc");
            $('#attendenceDetailedTable').DataTable().destroy();
            fill_datatable(classId, day);
        }
        else
        {
            alert('Select Both filter option');
        }
    });



</script>
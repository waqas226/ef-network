<a class="flex items-center text-theme-6" href="javascript:;" data-toggle="modal" data-target="#delete-modal-preview"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                        <div class="modal" id="delete-modal-preview">
                                        <div class="modal__content">
                                            <div class="p-5 text-center">
                                                <i data-feather="x-circle" class="w-16 h-16 text-theme-6 mx-auto mt-3"></i> 
                                                <div class="text-3xl mt-5">Are you sure?</div>
                                                <div class="text-gray-600 mt-2">Do you really want to delete these records? This process cannot be undone.</div>
                                            </div>
                                            <div class="px-5 pb-8 text-center">
                                                <button type="button" data-dismiss="modal" class="button w-24 border text-gray-700 mr-1">Cancel</button>
                                                <button type="button"  onclick="getConfirmation('id','tablename')" class="button w-24 bg-theme-6 text-white">Delete</button>
                                            </div>
                                        </div>
                                        </div>
                                        <script type="text/javascript">
                                            function getConfirmation(id,tablename) {
                                               
                                            if(id)
 {
  $.ajax({
  type: 'post',
  url: 'server/deletetabledata.php',
  data: {
   id:id,
   tablename:tablename,

  },
  success: function (response) {
 //alert(response);
  location.reload(); 
  
  }
  });
 }
    
 else
 {
   
   location.reload(); 
  
 }
}
    
                                        </script>


<?php
$pagename="articles";
?>
@include('layouts.header')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <div class="intro-y flex items-center mt-8">
            <h2 class="text-lg font-medium ml-3">
            Article
            </h2>
        </div>
                
        <div class="intro-y box pb-10">
            <div class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200">
                   <form  action="" class="validate-form" method="post">
                   <div class="intro-y col-span-12 px-2">
                            <div class="mb-2">Article Title</div>
                            <input type="text" name="name" class="input w-full border flex-1" placeholder="Enter Title..." required >
                        </div>    
                   
                   <div class="intro-y col-span-12  px-2">
                                <div class="mb-2">Article Description</div>
                                 <textarea data-feature="all" class="summernote" data-height="200" name="description"></textarea>
                        </div>
                      
 <div class="intro-y col-span-12 items-center justify-center sm:justify-end mt-5">
                                <button class="button w-30 justify-center block bg-theme-1 text-white ml-2">Save</button>
                            </div>
                    </form>
            </div>
        </div>
      <script>
          $(document).ready(function() {
  $('.summernote').summernote();
});
      </script>
     
@include('layouts.footer')
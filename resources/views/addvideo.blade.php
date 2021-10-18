<?php
$pagename="videos";
?>
@include('layouts.header')
<div class="intro-y flex items-center mt-8">
            <h2 class="text-lg font-medium ml-3">
               Add New Video
            </h2>
        </div>
                
        <div class="intro-y box pb-10">
            <div class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200">
                   <form  action="server/addcat.php" class="validate-form" method="post"  enctype="multipart/form-data">
                     
                      <div class="intro-y box col-span-12 lg:col-span-8 p-5">
                    <div class="grid grid-cols-12 gap-4 row-gap-5 mt-5">
                        
                        <div class="intro-y col-span-12 sm:col-span-6 px-2">
                            <div class="mb-2">Video Title</div>
                            <input type="text" name="name" class="input w-full border flex-1" placeholder="Enter Title..." required >
                        </div>
                        <div class="intro-y col-span-12 sm:col-span-6 px-2">
                            <div class="mb-2">Video Link</div>
                            <input type="link" name="name" class="input w-full border flex-1" placeholder="Enter Link..." required >
                        </div>
                        
                        <div class="intro-y col-span-12 sm:col-span-6 px-2">
                            <div class="mb-2">Video Thumbnail</div>
                            <input type="file" name="pic" accept="image/*" class="input w-full border flex-1"  >
                        </div>
                        
                    

                    </div>

                        
                   
                      <div class="intro-y col-span-12 items-center justify-center sm:justify-end mt-5">
                        <button class="button w-30 justify-center block bg-theme-1 text-white ml-2">Save</button>
                    </div>
                     </div>
                    </form>
            </div>
        </div>
        @include('layouts.footer')
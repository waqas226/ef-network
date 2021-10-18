<?php
$pagename="articles";
?>
@include('layouts.header')
                <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
                    <h2 class="text-lg font-medium mr-auto ml-2">
                        Articles List
                    </h2>
                    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                        <button class="button text-white bg-theme-1 shadow-md mr-2"><a href="add-article">Add New</a></button>
                    </div>
                </div>
                <!-- BEGIN: Datatable -->
                <div class="intro-y datatable-wrapper box p-5 mt-5">
                    <table class="table table-report table-report--bordered display datatable w-full">
                        <thead>
                            <tr>    
                                <th class="border-b-2 whitespace-no-wrap">ID</th>
                                <th class="border-b-2 whitespace-no-wrap">Title</th>
                                
                             
                                <th class="border-b-2 text-center whitespace-no-wrap">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                          
                            <tr>
                                <td class="border-b">1</td>
                                <td class="border-b">
                                    <div class="font-medium whitespace-no-wrap">www No One Of</div>
                                </td>
                              
                               
                                <td class="border-b w-5">
                                    <div class="flex sm:justify-center items-center">
                                       
                                        @include('layouts.deletemodel')
                                        
                                    </div>
                                    
                                </td>
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
                <!-- END: Datatable -->
            </div>
            @include('layouts.footer')
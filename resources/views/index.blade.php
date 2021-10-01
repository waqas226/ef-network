<?php
$pagename="home";
?>
@include('layouts.header')
<?php
$pagetitle="Dashboard | ";

 	$tottrainer=$rowdoc['tot']=1;
 	
 	$tottrainee=$rowdoc2['tot']=2;
 	
 	$totfeedback=$rowdoc['tot']=3;
 	
?>
                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12 xxl:col-span-9 grid grid-cols-12 gap-6">
                        <!-- BEGIN: General Report -->
                        <div class="col-span-12 mt-8">
                            <div class="intro-y flex items-center h-10">
                                <h2 class="text-lg font-medium truncate mr-5">
                                    General Report
                                </h2>
                                <a href="" class="ml-auto flex text-theme-1 dark:text-theme-10"> <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a>
                            </div>
                            <div class="grid grid-cols-12 gap-6 mt-5">
                                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y" onclick="window.location.href='users'">
                                    <div class="report-box zoom-in">
                                        <div class="box p-5">
                                            <div class="flex">
                                                <i data-feather="user" class="report-box__icon text-theme-10"></i> 
                                               
                                            </div>
                                            <div class="text-3xl font-bold leading-8 mt-6"><?php echo $tottrainer; ?></div>
                                            <div class="text-base text-gray-600 mt-1">Users</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y" onclick="window.location.href='category'">
                                    <div class="report-box zoom-in">
                                        <div class="box p-5">
                                            <div class="flex">
                                                <i data-feather="user" class="report-box__icon text-theme-11"></i> 
                                                
                                            </div>
                                            <div class="text-3xl font-bold leading-8 mt-6"><?php echo $tottrainee; ?></div>
                                            <div class="text-base text-gray-600 mt-1">Category</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y" onclick="window.location.href='products'">
                                    <div class="report-box zoom-in">
                                        <div class="box p-5">
                                            <div class="flex">
                                                <i data-feather="list" class="report-box__icon text-theme-12"></i> 
                                                
                                            </div>
                                            <div class="text-3xl font-bold leading-8 mt-6"><?php echo $totfeedback; ?></div>
                                            <div class="text-base text-gray-600 mt-1">Products</div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                       
                    </div>
                   
                </div>
            
@include('layouts.footer')
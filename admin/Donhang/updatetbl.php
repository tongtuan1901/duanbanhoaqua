<?php
    if (is_array($tbl)) {
        extract($tbl);
    }
?>
<div class="ltr:flex flex-1 rtl:flex-row-reverse">
            <div class="page-wrapper relative ltr:ms-auto rtl:me-auto rtl:ms-0 w-[calc(100%-260px)] px-4 pt-[64px] duration-300">
                <div class="xl:w-full">        
                    <div class="flex flex-wrap">
                        <div class="flex items-center py-4 w-full">
                            <div class="w-full">                    
                                <div class="">
                                    <div class="flex flex-wrap justify-between">
                                        <div class="items-center ">
                                            <h1 class="font-medium text-3xl block dark:text-slate-100">Update TBL</h1>
                                            <ol class="list-reset flex text-sm">
                                                <li><a href="#" class="text-gray-500 dark:text-slate-400">Robotech</a></li>
                                                <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                                <li class="text-gray-500 dark:text-slate-400">Admin</li>
                                                <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                                <li class="text-primary-500 hover:text-primary-600 dark:text-primary-400">Update TBL</li>
                                            </ol>
                                        </div>
                                        <div class="flex items-center">
                                            <div class="today-date leading-5 mt-2 lg:mt-0 form-input w-auto rounded-md border inline-block border-primary-500/60 dark:border-primary-500/60 text-primary-500 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-primary-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                                <input type="text" class="dash_date border-0 focus:border-0 focus:outline-none" readonly  required="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end container-->
            
                <div class="xl:w-full  min-h-[calc(100vh-138px)] relative pb-14">
                    <form action="index.php?act=updatetbl" method="post" >
                    <!-- <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 justify-between">  -->
                        <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-6">
                        <div class="w-full relative mb-4">  
                                <div class="flex-auto p-0 md:p-4">                                   

                                    <div class="mb-2">
                                    <label for="trangthai" class="font-medium text-sm text-slate-600 dark:text-slate-400">(1.Đang chờ | 2. Đã xác nhận | 3. Đang vận chuyển)</label>
                                    <input type="text" name="trangthai" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" value="<?php if(isset($trangthai)&&($trangthai!="")) echo $trangthai;?>">
                                    </div>
                                    <div class="">
                                        <input type="hidden" name="id_order" value="<?php if(isset($id_order)&&($id_order>0)) echo $id_order;?>">
                                        <input type="submit" value="Cập Nhật" name="capnhat" class="px-2 py-2 lg:px-4 bg-brand  text-white text-sm  rounded hover:bg-brand-600 border border-brand-500">
                                        <input type="reset" class="px-2 py-2 lg:px-4 bg-transparent  text-brand text-sm  rounded transition hover:bg-brand-500 hover:text-white border border-brand font-medium">
                                        <!-- <button class="px-2 py-2 lg:px-4 bg-transparent  text-brand text-sm  rounded transition hover:bg-brand-500 hover:text-white border border-brand font-medium"><a href="donhang/listtbl.php">Danh sách</a></button> -->
                                    </div>
                                </div><!--end card-body--> 
                            </div><!--end card-->                               
                        <!--end col-->
                        </form>  
                        </div>
                        
                                      
</div> <!--end grid-->

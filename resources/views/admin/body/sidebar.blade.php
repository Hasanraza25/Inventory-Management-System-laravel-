 <div class="vertical-menu">

     <div data-simplebar class="h-100">

         <!-- User details -->


         <!--- Sidemenu -->
         <div id="sidebar-menu">
             <!-- Left Menu Start -->
             <ul class="metismenu list-unstyled" id="side-menu">
                 <li class="menu-title">Menu</li>

                 <li>
                     <a href="index.html" class="waves-effect">
                         <i class="ri-dashboard-line"></i>
                         <span>Dashboard</span>
                     </a>
                 </li>

                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="ri-mail-send-line"></i>
                         <span>Manage Suppliers</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="{{ route('supplier.all') }}">All Suppliers</a></li>
                     </ul>
                 </li>

                 <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Manage Customers</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('customer.all') }}">All Customers</a></li>
                    </ul>
                </li>


                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="ri-mail-send-line"></i>
                         <span>Portfolio Page Setup</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="{{ route('all.portfolio') }}">All Portfolio</a></li>
                         <li><a href="{{ route('add.portfolio') }}">Add Portfolio</a></li>

                     </ul>
                 </li>



                 <li class="menu-title">Pages</li>

                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="ri-account-circle-line"></i>
                         <span>Blog Category</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="{{ route('all.blog.category') }}">All Blog Category</a></li>
                         <li><a href="{{ route('add.blog.category') }}">Add Blog Category</a></li>
                     </ul>
                 </li>

                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="ri-profile-line"></i>
                         <span>Blog Page</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="{{ route('all.blog') }}">All Blog</a></li>
                         <li><a href="{{ route('add.blog') }}">Add Blog</a></li>

                     </ul>
                 </li>


                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="ri-profile-line"></i>
                         <span>Footer Page Setup</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="{{ route('footer.setup') }}">Footer Setup</a></li>


                     </ul>
                 </li>


                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="ri-profile-line"></i>
                         <span>Contact Message </span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="{{ route('contact.message') }}">Contact Message</a></li>


                     </ul>
                 </li>





             </ul>
         </div>
         <!-- Sidebar -->
     </div>
 </div>
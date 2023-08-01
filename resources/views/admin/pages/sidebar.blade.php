<div class="left-sidebar-pro">
    <nav id="sidebar" class="">


        <div class="sidebar-header">
            <a href="index.html"><img class="main-logo" src="{{asset('admin/img/logo/logo.png')}}" alt="" /></a>
            <strong><img src="{{asset('admin/img/logo/logosn.png')}}" alt="" /></strong>
        </div>
        <div class="nalika-profile">
            <div class="profile-dtl">
                <a href="#"><img src="{{asset('admin/img/notification/4.jpg')}}" alt="" /></a>
                <h2>Lakian <span class="min-dtn">Das</span></h2>
            </div>
            <div class="profile-social-dtl">
                <ul class="dtl-social">
                    <li><a href="#"><i class="icon nalika-facebook"></i></a></li>
                    <li><a href="#"><i class="icon nalika-twitter"></i></a></li>
                    <li><a href="#"><i class="icon nalika-linkedin"></i></a></li>
                </ul>
            </div>
        </div>



        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">

                    <li class="active">
                        <a class="has-arrow" href="">
                            <i class="icon nalika-home icon-wrap"></i>
                            <span class="mini-click-non">Dishes</span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="true">
                            <li><a title="Dashboard v.1" href="{{route('admin.dishes.index')}}"><span class="mini-sub-pro">Add Dish</span></a></li>
                        </ul>
                        <ul class="submenu-angle" aria-expanded="true">
                            <li><a title="Dashboard v.1" href=""><span class="mini-sub-pro">Add Dish</span></a></li>
                        </ul>
                    </li>

                    <li>
                        <a class="has-arrow" href="" aria-expanded="false"><i class="icon nalika-mail icon-wrap"></i> <span class="mini-click-non">People</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Inbox" href= "{{route('admin.add_people')}}" ><span class="mini-sub-pro">Add People</span></a></li>
                        </ul>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Inbox" href= "{{route('admin.table_people')}}" ><span class="mini-sub-pro">People Table</span></a></li>
                        </ul>
                    </li>

                    <li>
                        <a class="has-arrow" href="" aria-expanded="false"><i class="icon nalika-diamond icon-wrap"></i> <span class="mini-click-non">Contacts</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Google Map" href="{{route('admin.contact')}}"><span class="mini-sub-pro">Show Messages</span></a></li>

                        </ul>
                    </li>

                </ul>
            </nav>
        </div>
    </nav>
</div>

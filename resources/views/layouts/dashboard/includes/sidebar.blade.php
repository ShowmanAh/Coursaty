<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="nav-item active"><a href=""><i class="la la-mouse-pointer"></i><span
                class="menu-title" data-i18n="nav.add_on_drag_drop.main">الرئيسية </span></a>
            </li>

            <li class="nav-item"><a href=""><i class="la la-home"></i>
                <span class="menu-title" data-i18n="nav.dash.main"> الكورسات </span>
                <span
                    class="badge badge badge-info badge-pill float-right mr-2">{{App\Models\Course::count() }}</span>
            </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{route('admin.courses')}}"
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="" data-i18n="nav.dash.crypto">أضافة
                         كورس</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item"><a href=""><i class="la la-home"></i>
                <span class="menu-title" data-i18n="nav.dash.main"> الطلاب </span>
                <span
                    class="badge badge badge-info badge-pill float-right mr-2">{{App\User::count() }}</span>
            </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{route('admin.students')}}"
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>

                </ul>
            </li>

            <li class="nav-item"><a href=""><i class="la la-home"></i>
                <span class="menu-title" data-i18n="nav.dash.main">  الطلاب المسجلين بالكورسات </span>
                <span
                    class="badge badge badge-info badge-pill float-right mr-2"></span>
            </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{route('admin.students.enroll')}}"
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>

                </ul>
            </li>

        </ul>
    </div>
</div>

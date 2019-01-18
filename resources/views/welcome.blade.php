<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="{{ url('website/css/vendor/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ url('website/css/vendor/tooltipster.css') }}">
    <link rel="stylesheet" href="{{ url('website/css/vendor/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ url('website/css/style.css') }}">
    <!-- favicon -->
    <link rel="icon" href="favicon.ico">
    <title>منصة سريع</title>
</head>
<body>

<!-- HEADER -->
<div class="header-wrap">
    <header>
        <!-- LOGO -->
        <a href="index.html">
            <figure class="logo">
                <img src="{{ url('website/images/logo.png') }}" alt="logo">
            </figure>
        </a>
        <!-- /LOGO -->

        <!-- MOBILE MENU HANDLER -->
        <div class="mobile-menu-handler left primary">
            <img src="{{ url('website/images/pull-icon.png') }}" alt="pull-icon">
        </div>
        <!-- /MOBILE MENU HANDLER -->

        <!-- LOGO MOBILE -->
        <a href="index.html">
            <figure class="logo-mobile">
                <img src="{{ url('website/images/logo_mobile.png') }}" alt="logo-mobile">
            </figure>
        </a>
        <!-- /LOGO MOBILE -->

        <!-- MOBILE ACCOUNT OPTIONS HANDLER -->
        <div class="mobile-account-options-handler right secondary">
            <span class="icon-user"></span>
        </div>
        <!-- /MOBILE ACCOUNT OPTIONS HANDLER -->

        <!-- USER BOARD -->
        <div class="user-board">
            <!-- USER QUICKVIEW -->
            <div class="user-quickview">
                <!-- USER AVATAR -->
                <a href="author-profile.html">
                    <div class="outer-ring">
                        <div class="inner-ring"></div>
                        <figure class="user-avatar">
                            <img src="{{ url('website/images/avatars') }}/avatar_01.jpg" alt="avatar">
                        </figure>
                    </div>
                </a>
                <!-- /USER AVATAR -->

                <!-- USER INFORMATION -->
                <p class="user-name">أمين بدة</p>
                <!-- SVG ARROW -->
                <svg class="svg-arrow">
                    <use xlink:href="#svg-arrow"></use>
                </svg>
                <!-- /SVG ARROW -->
                <p class="user-money">$240.00</p>
                <!-- /USER INFORMATION -->

                <!-- DROPDOWN -->
                <ul class="dropdown small hover-effect closed">
                    <li class="dropdown-item">
                        <div class="dropdown-triangle"></div>
                        <a href="author-profile.html">الملف الشخصي</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="dashboard-settings.html">إعدادات الحساب</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="dashboard-purchases.html">مشترياتك</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="dashboard-statement.html">كشف المبيعات</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="dashboard-buycredits.html">شراء الرصيد</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="dashboard-withdrawals.html">السحب</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="dashboard-uploaditem.html">رفع منتج</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="dashboard-manageitems.html">إدارة المنتجات</a>
                    </li>
                </ul>
                <!-- /DROPDOWN -->
            </div>
            <!-- /USER QUICKVIEW -->

            <!-- ACCOUNT INFORMATION -->
            <div class="account-information">
                <a href="favourites.html">
                    <div class="account-wishlist-quickview">
                        <span class="icon-heart"></span>
                    </div>
                </a>
                <div class="account-cart-quickview">
						<span class="icon-present">
							<!-- SVG ARROW -->
							<svg class="svg-arrow">
								<use xlink:href="#svg-arrow"></use>
							</svg>
                            <!-- /SVG ARROW -->
						</span>

                    <!-- PIN -->
                    <span class="pin soft-edged secondary">7</span>
                    <!-- /PIN -->

                    <!-- DROPDOWN CART -->
                    <ul class="dropdown cart closed">
                        <!-- DROPDOWN ITEM -->
                        <li class="dropdown-item">
                            <a href="item-v1.html" class="link-to"></a>
                            <!-- SVG PLUS -->
                            <svg class="svg-plus">
                                <use xlink:href="#svg-plus"></use>
                            </svg>
                            <!-- /SVG PLUS -->
                            <div class="dropdown-triangle"></div>
                            <figure class="product-preview-image tiny">
                                <img src="{{ url('website/images/items') }}/pixel_s.jpg" alt="">
                            </figure>
                            <p class="text-header tiny">قالب شوبيفاي عربي</p>
                            <p class="category tiny primary">شوبيفاي</p>
                            <p class="price tiny"><span>$</span>86</p>
                        </li>
                        <!-- /DROPDOWN ITEM -->

                        <!-- DROPDOWN ITEM -->
                        <li class="dropdown-item">
                            <a href="item-v1.html" class="link-to"></a>
                            <!-- SVG PLUS -->
                            <svg class="svg-plus">
                                <use xlink:href="#svg-plus"></use>
                            </svg>
                            <!-- /SVG PLUS -->
                            <figure class="product-preview-image tiny">
                                <img src="{{ url('website/images/items') }}/monsters_s.jpg" alt="">
                            </figure>
                            <p class="text-header tiny">باقة أزرار فوتوشوب من 40 عنصر</p>
                            <p class="category tiny primary">الجرافيك</p>
                            <p class="price tiny"><span>$</span>10</p>
                        </li>
                        <!-- /DROPDOWN ITEM -->

                        <!-- DROPDOWN ITEM -->
                        <li class="dropdown-item">
                            <a href="item-v1.html" class="link-to"></a>
                            <!-- SVG PLUS -->
                            <svg class="svg-plus">
                                <use xlink:href="#svg-plus"></use>
                            </svg>
                            <!-- /SVG PLUS -->
                            <figure class="product-preview-image tiny">
                                <img src="{{ url('website/images/items') }}/flat_s.jpg" alt="">
                            </figure>
                            <p class="text-header tiny">إضافة الشحن لشوبيفاي</p>
                            <p class="category tiny primary">شوبيفاي</p>
                            <p class="price tiny"><span>$</span>12</p>
                        </li>
                        <!-- /DROPDOWN ITEM -->

                        <!-- DROPDOWN ITEM -->
                        <li class="dropdown-item">
                            <p class="text-header tiny">المجموع</p>
                            <p class="price"><span>$</span>108.00</p>
                            <a href="cart.html" class="button primary half">الذهاب للسلة</a>
                            <a href="checkout.html" class="button secondary half">الذهاب للدفع</a>
                        </li>
                        <!-- /DROPDOWN ITEM -->
                    </ul>
                    <!-- /DROPDOWN CART -->
                </div>
                <div class="account-email-quickview">
						<span class="icon-envelope">
							<!-- SVG ARROW -->
							<svg class="svg-arrow">
								<use xlink:href="#svg-arrow"></use>
							</svg>
                            <!-- /SVG ARROW -->
						</span>

                    <!-- PIN -->
                    <span class="pin soft-edged secondary">!</span>
                    <!-- /PIN -->

                    <!-- DROPDOWN NOTIFICATIONS -->
                    <ul class="dropdown notifications closed">
                        <!-- DROPDOWN ITEM -->
                        <li class="dropdown-item">
                            <div class="dropdown-triangle"></div>
                            <a href="dashboard-openmessage.html" class="link-to"></a>
                            <figure class="user-avatar">
                                <img src="{{ url('website/images/avatars') }}/avatar_06.jpg" alt="">
                            </figure>
                            <p class="text-header tiny"><span>حسين أحمد</span></p>
                            <p class="subject">سؤال عن منتج</p>
                            <p class="timestamp">18 ماي 2018</p>
                            <span class="notification-type secondary-new icon-envelope"></span>
                        </li>
                        <!-- /DROPDOWN ITEM -->

                        <!-- DROPDOWN ITEM -->
                        <li class="dropdown-item">
                            <a href="dashboard-openmessage.html" class="link-to"></a>
                            <figure class="user-avatar">
                                <img src="{{ url('website/images/avatars') }}/avatar_04.jpg" alt="">
                            </figure>
                            <p class="text-header tiny"><span>قالب ووردبريس</span></p>
                            <p class="subject">طلب دعم فني</p>
                            <p class="timestamp">5 ماي 2018</p>
                            <span class="notification-type icon-envelope-open"></span>
                        </li>
                        <!-- /DROPDOWN ITEM -->

                        <!-- DROPDOWN ITEM -->
                        <li class="dropdown-item">
                            <a href="dashboard-openmessage.html" class="link-to"></a>
                            <figure class="user-avatar">
                                <img src="{{ url('website/images/avatars') }}/avatar_07.jpg" alt="">
                            </figure>
                            <p class="text-header tiny"><span>إضافة جوملا</span></p>
                            <p class="subject">سؤال عن المنتج</p>
                            <p class="timestamp">2 فبراير 2018</p>
                            <span class="notification-type secondary-new icon-envelope"></span>
                        </li>
                        <!-- /DROPDOWN ITEM -->

                        <!-- DROPDOWN ITEM -->
                        <li class="dropdown-item">
                            <a href="dashboard-openmessage.html" class="link-to"></a>
                            <figure class="user-avatar">
                                <img src="{{ url('website/images/avatars') }}/avatar_08.jpg" alt="">
                            </figure>
                            <p class="text-header tiny"><span>أمين بدة</span></p>
                            <p class="subject">كيف أقوم بتنصيب القالب...</p>
                            <p class="timestamp">14 يناير 2018</p>
                            <span class="notification-type icon-action-undo"></span>
                            <a href="dashboard-inbox.html" class="button secondary">عرض جميع الرسائل</a>
                        </li>
                        <!-- /DROPDOWN ITEM -->
                    </ul>
                    <!-- /DROPDOWN NOTIFICATIONS -->
                </div>
                <div class="account-settings-quickview">
						<span class="icon-settings">
							<!-- SVG ARROW -->
							<svg class="svg-arrow">
								<use xlink:href="#svg-arrow"></use>
							</svg>
                            <!-- /SVG ARROW -->
						</span>

                    <!-- PIN -->
                    <span class="pin soft-edged primary">49</span>
                    <!-- /PIN -->

                    <!-- DROPDOWN NOTIFICATIONS -->
                    <ul class="dropdown notifications no-hover closed">
                        <!-- DROPDOWN ITEM -->
                        <li class="dropdown-item">
                            <div class="dropdown-triangle"></div>
                            <a href="author-profile.html">
                                <figure class="user-avatar">
                                    <img src="{{ url('website/images/avatars') }}/avatar_02.jpg" alt="">
                                </figure>
                            </a>
                            <p class="title">
                                <a href="author-profile.html"><span>أحمد حسين</span></a> أضاف
                                <a href="item-v1.html"><span>قالب مطاعم لوردبريس</span></a> للمفضلة
                            </p>
                            <p class="timestamp">قبل ساعتين</p>
                            <span class="notification-type primary-new icon-heart"></span>
                        </li>
                        <!-- /DROPDOWN ITEM -->

                        <!-- DROPDOWN ITEM -->
                        <li class="dropdown-item">
                            <a href="author-profile.html">
                                <figure class="user-avatar">
                                    <img src="{{ url('website/images/avatars') }}/avatar_03.jpg" alt="">
                                </figure>
                            </a>
                            <p class="title">
                                <a href="author-profile.html"><span>أمين بدة</span></a> كتب لك
                                <a href="author-reputation.html"><span>تقييم عن منتج</span></a>
                            </p>
                            <p class="timestamp">قبل 17 ساعة</p>
                            <span class="notification-type icon-star"></span>
                        </li>
                        <!-- /DROPDOWN ITEM -->

                        <!-- DROPDOWN ITEM -->
                        <li class="dropdown-item">
                            <a href="author-profile.html">
                                <figure class="user-avatar">
                                    <img src="{{ url('website/images/avatars') }}/avatar_04.jpg" alt="">
                                </figure>
                            </a>
                            <p class="title">
                                <a href="author-profile.html"><span>شركة أمد</span></a> قام بالتعليق على
                                <a href="item-v1.html"><span>إضافة ووردبريس للرحلات</span></a>
                            </p>
                            <p class="timestamp">قبل 5 أيام</p>
                            <span class="notification-type primary-new icon-bubble"></span>
                        </li>
                        <!-- /DROPDOWN ITEM -->

                        <!-- DROPDOWN ITEM -->
                        <li class="dropdown-item">
                            <a href="author-profile.html">
                                <figure class="user-avatar">
                                    <img src="{{ url('website/images/avatars') }}/avatar_05.jpg" alt="">
                                </figure>
                            </a>
                            <p class="title">
                                <a href="author-profile.html"><span>سعيد العربي</span></a> قام بشراء
                                <a href="item-v1.html"><span>40 زر إحترافي على فوتوشوب</span></a>
                            </p>
                            <p class="timestamp">قبل أسبوع</p>
                            <span class="notification-type icon-tag"></span>
                            <a href="dashboard-notifications.html" class="button primary">عرض جميع الإشعارات</a>
                        </li>
                        <!-- /DROPDOWN ITEM -->
                    </ul>
                    <!-- /DROPDOWN NOTIFICATIONS -->
                </div>
            </div>
            <!-- /ACCOUNT INFORMATION -->

            <!-- ACCOUNT ACTIONS -->
            <div class="account-actions">
                <a href="#" class="button primary">إشترك كبائع</a>
                <a href="#" class="button secondary">تسجيل الخروج</a>
            </div>
            <!-- /ACCOUNT ACTIONS -->
        </div>
        <!-- /USER BOARD -->
    </header>
</div>
<!-- /HEADER -->

<!-- SIDE MENU -->
<div id="mobile-menu" class="side-menu left closed">
    <!-- SVG PLUS -->
    <svg class="svg-plus">
        <use xlink:href="#svg-plus"></use>
    </svg>
    <!-- /SVG PLUS -->

    <!-- SIDE MENU HEADER -->
    <div class="side-menu-header">
        <figure class="logo small">
            <img src="{{ url('website/images/logo.png') }}" alt="logo">
        </figure>
    </div>
    <!-- /SIDE MENU HEADER -->

    <!-- SIDE MENU TITLE -->
    <p class="side-menu-title">الروابط الرئيسية</p>
    <!-- /SIDE MENU TITLE -->

    <!-- DROPDOWN -->
    <ul class="dropdown dark hover-effect interactive">
        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="index.html">الرئيسية</a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="how-to-shop.html">كيف تتسوق ؟</a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="products.html">المنتجات</a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="services.html">الخدمات</a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="shop-gridview-v1.html">المنتجات الرقمية</a>
        </li>
        <!-- /DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="forum.html">المجتمع</a>
        </li>
        <!-- DROPDOWN ITEM -->
    </ul>

        <!-- /DROPDOWN -->
</div>
<!-- /SIDE MENU -->

<!-- SIDE MENU -->
<div id="account-options-menu" class="side-menu right closed">
    <!-- SVG PLUS -->
    <svg class="svg-plus">
        <use xlink:href="#svg-plus"></use>
    </svg>
    <!-- /SVG PLUS -->

    <!-- SIDE MENU HEADER -->
    <div class="side-menu-header">
        <!-- USER QUICKVIEW -->
        <div class="user-quickview">
            <!-- USER AVATAR -->
            <a href="author-profile.html">
                <div class="outer-ring">
                    <div class="inner-ring"></div>
                    <figure class="user-avatar">
                        <img src="{{ url('website/images/avatars') }}/avatar_01.jpg" alt="avatar">
                    </figure>
                </div>
            </a>
            <!-- /USER AVATAR -->

            <!-- USER INFORMATION -->
            <p class="user-name">أمين بدة</p>
            <p class="user-money">$240.00</p>
            <!-- /USER INFORMATION -->
        </div>
        <!-- /USER QUICKVIEW -->
    </div>
    <!-- /SIDE MENU HEADER -->

    <!-- SIDE MENU TITLE -->
    <p class="side-menu-title">حسابك</p>
    <!-- /SIDE MENU TITLE -->

    <!-- DROPDOWN -->
    <ul class="dropdown dark hover-effect">
        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="dashboard-notifications.html">الإشعارات</a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="dashboard-inbox.html">الرسائل</a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="cart.html">سلة المشتريات</a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="favourites.html">المفضلة</a>
        </li>
        <!-- /DROPDOWN ITEM -->
    </ul>
    <!-- /DROPDOWN -->

    <!-- SIDE MENU TITLE -->
    <p class="side-menu-title">لوحة التحكم</p>
    <!-- /SIDE MENU TITLE -->

    <!-- DROPDOWN -->
    <ul class="dropdown dark hover-effect">
        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="author-profile.html">الملف الشخصي</a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="dashboard-settings.html">إعدادات الحساب</a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="dashboard-purchases.html">مشترياتك</a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="dashboard-statement.html">كشف الحساب</a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="dashboard-buycredits.html">شراء الرصيد</a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="dashboard-withdrawals.html">السحب</a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="dashboard-uploaditem.html">رفع منتج</a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="dashboard-manageitems.html">إدارة المنتجات</a>
        </li>
        <!-- /DROPDOWN ITEM -->
    </ul>
    <!-- /DROPDOWN -->

    <a href="#" class="button medium secondary">تسجيل الخروج</a>
    <a href="#" class="button medium primary">إشترك كبائع</a>
</div>
<!-- /SIDE MENU -->

<!-- MAIN MENU -->
<div class="main-menu-wrap">
    <div class="menu-bar">
        <nav>
            <ul class="main-menu">
                <!-- MENU ITEM -->
                <li class="menu-item">
                    <a href="index.html">الرئيسية</a>
                </li>
                <!-- /MENU ITEM -->

                <!-- MENU ITEM -->
                <li class="menu-item">
                    <a href="how-to-shop.html">كيف تتسوق؟</a>
                </li>
                <!-- /MENU ITEM -->

                <!-- MENU ITEM -->
                <li class="menu-item">
                    <a href="products.html">المنتجات</a>
                </li>
                <!-- /MENU ITEM -->

                <!-- MENU ITEM -->
                <li class="menu-item">
                    <a href="services.html">الخدمات</a>
                </li>
                <!-- /MENU ITEM -->

                <!-- MENU ITEM -->
                <li class="menu-item">
                    <a href="shop-gridview-v1.html">المنتجات الرقمية</a>
                </li>
                <!-- /MENU ITEM -->

                <!-- MENU ITEM -->
                <li class="menu-item">
                    <a href="forum.html">المجتمع</a>
                </li>
                <!-- /MENU ITEM -->

            </ul>
        </nav>
        <form class="search-form">
            <input type="text" class="rounded" name="search" id="search_منتج" placeholder="إبحث عن منتجات أو خدمات....">
            <input type="image" src="{{ url('website/images/search-icon.png') }}" alt="search-icon">
        </form>
    </div>
</div>
<!-- /MAIN MENU -->

<!-- BANNER -->
<div class="banner-wrap">
    <section class="banner">
        <h5>مرحباً بك</h5>
        <h1>أكبر <span>سوق عربي للمنتجات الرقمية</span></h1>
        <p>منصة حسين هي أكبر منصة عربية للمنتجات الرقمية و الخدمات الإلكترونية من تصميم و تطوير و قائمة طويلة من الخدمات المميزة يقدمها لكم مستقلين محترفين من جميع أنحاء الدول العربية</p>
        <img src="{{ url('website/images/top_items.png') }}" alt="banner-img">

        <!-- SEARCH WIDGET -->
        <div class="search-widget">
            <form class="search-widget-form">
                <input type="text" name="category_name" placeholder="إبحث عن منتجات أو خدمات...">
                <label for="categories" class="select-block">
                    <select name="categories" id="categories">
                        <option value="0">جميع التصنيفات</option>
                        <option value="1">ملفات PSD</option>
                        <option value="2">قوالب</option>
                        <option value="3">شوبيفاي</option>
                        <option value="4">حزم الأيقونات</option>
                        <option value="5">الجرافيك</option>
                        <option value="6">إضافات</option>
                        <option value="7">خلفيات</option>
                        <option value="8">تطبيقات</option>
                    </select>
                    <!-- SVG ARROW -->
                    <svg class="svg-arrow">
                        <use xlink:href="#svg-arrow"></use>
                    </svg>
                    <!-- /SVG ARROW -->
                </label>
                <button class="button medium dark">البحث الان!</button>
            </form>
        </div>
        <!-- /SEARCH WIDGET -->
    </section>
</div>
<!-- /BANNER -->

<!-- SERVICES -->
<div id="services-wrap">
    <section id="services">
        <!-- SERVICE LIST -->
        <div class="service-list column4-wrap">
            <!-- SERVICE ITEM -->
            <div class="service-item column">
                <div class="circle medium gradient"></div>
                <div class="circle white-cover"></div>
                <div class="circle dark">
                    <span class="icon-present"></span>
                </div>
                <h3>بيع  و إشتري بسهولة</h3>
                <p>هنا وصف قصير عن كيف يمكن للمستخدم أن يشتري و يبيع منتجاته و خدماته بكل سهولة</p>
            </div>
            <!-- /SERVICE ITEM -->

            <!-- SERVICE ITEM -->
            <div class="service-item column">
                <div class="circle medium gradient"></div>
                <div class="circle white-cover"></div>
                <div class="circle dark">
                    <span class="icon-lock"></span>
                </div>
                <h3>تحويلات امنة</h3>
                <p>هنا شرح لكيف يعمل نضام الدفع على الموقع و مدى قوة و أمان التعاملات المالية على الموقع و هذا يعطي المستخدم ثقة أكبر</p>
            </div>
            <!-- /SERVICE ITEM -->

            <!-- SERVICE ITEM -->
            <div class="service-item column">
                <div class="circle medium gradient"></div>
                <div class="circle white-cover"></div>
                <div class="circle dark">
                    <span class="icon-like"></span>
                </div>
                <h3>إدارة المنتجات</h3>
                <p>هنا شرح لكيف لمقدم الخدمات أو المنتجات الرقمية كيف يمكنه أن ينشر و يتحكم و يراقب منتجاته بكل سهولة و أمان مع نضام الموقع</p>
            </div>
            <!-- /SERVICE ITEM -->

            <!-- SERVICE ITEM -->
            <div class="service-item column">
                <div class="circle medium gradient"></div>
                <div class="circle white-cover"></div>
                <div class="circle dark">
                    <span class="icon-diamond"></span>
                </div>
                <h3>قوة نظام المنصة</h3>
                <p>هنا توضيح للمستخدمين على مدى حرص الادارة على توفير أفضل نظام للمستخدمين و أن المنصة تتوفر على نضام قوي و امن من أجلهم</p>
            </div>
            <!-- /SERVICE ITEM -->
        </div>
        <!-- /SERVICE LIST -->
        <div class="clearfix"></div>
    </section>
</div>
<!-- /SERVICES -->

<!-- PROMO -->
<div class="promo-banner dark left">
    <span class="icon-wallet"></span>
    <h5>إربح المال في الحال!</h5>
    <h1>إبدأ <span>البيع</span></h1>
    <a href="#" class="button medium primary">!إفتح متجرك</a>
</div>
<!-- /PROMO -->

<!-- PROMO -->
<div class="promo-banner secondary right">
    <span class="icon-tag"></span>
    <h5>قم بإيجاد أي شيئ تريد</h5>
    <h1>إبدأ بالشراء</h1>
    <a href="#" class="button medium dark">!سجل الان</a>
</div>
<!-- /PROMO -->

<div class="clearfix"></div>

<!-- PRODUCT SIDESHOW -->
<div id="product-sideshow-wrap">
    <div id="product-sideshow">
        <!-- PRODUCT SHOWCASE -->
        <div class="product-showcase">
            <!-- HEADLINE -->
            <div class="headline primary">
                <h4>أحدث المنتجات الرقمية</h4>
                <!-- SLIDE CONTROLS -->
                <div class="slide-control-wrap">
                    <div class="slide-control left">
                        <!-- SVG ARROW -->
                        <svg class="svg-arrow">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                        <!-- /SVG ARROW -->
                    </div>

                    <div class="slide-control right">
                        <!-- SVG ARROW -->
                        <svg class="svg-arrow">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                        <!-- /SVG ARROW -->
                    </div>
                </div>
                <!-- /SLIDE CONTROLS -->
            </div>
            <!-- /HEADLINE -->

            <!-- PRODUCT LIST -->
            <div id="pl-1" class="product-list grid column4-wrap owl-carousel">
                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="{{ url('website/images/items') }}/westeros_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="item-v1.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="item-v1.html">
                                    <p>الذهاب للمنتج</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>أضف للمفضلة</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="item-v1.html">
                            <p class="text-header">قالب ووردبريس للمطاعم</p>
                        </a>
                        <p class="product-description">قالب حذاب متوافق مع جميع ...</p>
                        <a href="shop-gridview-v1.html">
                            <p class="category primary">قالب PSD</p>
                        </a>
                        <p class="price"><span>$</span>14</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="{{ url('website/images/avatars') }}/avatar_01.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">أمين بدة</p>
                        </a>
                        <ul class="rating tooltip" title="التقييمات">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PIN -->
                    <span class="pin مميز">مميز</span>
                    <!-- /PIN -->

                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="{{ url('website/images/items') }}/flat_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="item-v1.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="item-v1.html">
                                    <p>إذهب للمنتج</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>إضافة للمفضلة</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="item-v1.html">
                            <p class="text-header">شخصيات كرتونية</p>
                        </a>
                        <p class="product-description">مجموعة شخصيات كبرة...</p>
                        <a href="shop-gridview-v1.html">
                            <p class="category primary">شخصيات</p>
                        </a>
                        <p class="price"><span>$</span>12</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="{{ url('website/images/avatars') }}/avatar_09.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">أحمد حسين</p>
                        </a>
                        <ul class="rating tooltip" title="التقييمات">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="{{ url('website/images/items') }}/pixel_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="item-v1.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="item-v1.html">
                                    <p>إذهب للمنتج</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>إضافة للمفضلة</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="item-v1.html">
                            <p class="text-header">قالب متجر إلكتروني </p>
                        </a>
                        <p class="product-description">هنا يكون وصف المنتج القصير...</p>
                        <a href="shop-gridview-v1.html">
                            <p class="category primary">شوبيفاي</p>
                        </a>
                        <p class="price"><span>$</span>86</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="{{ url('website/images/avatars') }}/avatar_06.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">سارة أحمد</p>
                        </a>
                        <ul class="rating tooltip" title="التقييمات">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="{{ url('website/images/items') }}/miniverse_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="item-v1.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="item-v1.html">
                                    <p>إذهب للمنتج</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>إضافة للمفضلة</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="item-v1.html">
                            <p class="text-header">تأثيرات صوتية</p>
                        </a>
                        <p class="product-description">هنا يكون وصف المنتج القصير...</p>
                        <a href="shop-gridview-v1.html">
                            <p class="category primary">صوتيات</p>
                        </a>
                        <p class="price"><span>$</span>12</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="{{ url('website/images/avatars') }}/avatar_09.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">أحمد حسين</p>
                        </a>
                        <ul class="rating tooltip" title="التقييمات">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="{{ url('website/images/items') }}/westeros_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="item-v1.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="item-v1.html">
                                    <p>إذهب للمنتج</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>إضافة للمفضلة</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="item-v1.html">
                            <p class="text-header">منتج رقمي جديد</p>
                        </a>
                        <p class="product-description">هنا يكون وصف المنتج القصير...</p>
                        <a href="shop-gridview-v1.html">
                            <p class="category primary">قالب PSD</p>
                        </a>
                        <p class="price"><span>$</span>14</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="{{ url('website/images/avatars') }}/avatar_01.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">أمين بدة</p>
                        </a>
                        <ul class="rating tooltip" title="التقييمات">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PIN -->
                    <span class="pin مميز">مميز</span>
                    <!-- /PIN -->

                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="{{ url('website/images/items') }}/flat_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="item-v1.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="item-v1.html">
                                    <p>إذهب للمنتج</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>إضافة للمفضلة</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="item-v1.html">
                            <p class="text-header">Flatland - Hero Image Composer</p>
                        </a>
                        <p class="product-description">هنا يكون وصف المنتج القصير...</p>
                        <a href="shop-gridview-v1.html">
                            <p class="category primary">شخصيات كرتونية</p>
                        </a>
                        <p class="price"><span>$</span>12</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="{{ url('website/images/avatars') }}/avatar_09.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">أحمد حسين</p>
                        </a>
                        <ul class="rating tooltip" title="التقييمات">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="{{ url('website/images/items') }}/pixel_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="item-v1.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="item-v1.html">
                                    <p>إذهب للمنتج</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>إضافة للمفضلة</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="item-v1.html">
                            <p class="text-header">قالب متجر إلكتروني </p>
                        </a>
                        <p class="product-description">هنا يكون وصف المنتج القصير...</p>
                        <a href="shop-gridview-v1.html">
                            <p class="category primary">شوبيفاي</p>
                        </a>
                        <p class="price"><span>$</span>86</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="{{ url('website/images/avatars') }}/avatar_06.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">سارة أحمد</p>
                        </a>
                        <ul class="rating tooltip" title="التقييمات">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="{{ url('website/images/items') }}/miniverse_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="item-v1.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="item-v1.html">
                                    <p>إذهب للمنتج</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>إضافة للمفضلة</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="item-v1.html">
                            <p class="text-header">تأثيرات صوتية</p>
                        </a>
                        <p class="product-description">هنا يكون وصف المنتج القصير...</p>
                        <a href="shop-gridview-v1.html">
                            <p class="category primary">شخصيات كرتونية</p>
                        </a>
                        <p class="price"><span>$</span>12</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="{{ url('website/images/avatars') }}/avatar_09.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">أحمد حسين</p>
                        </a>
                        <ul class="rating tooltip" title="التقييمات">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->
            </div>
            <!-- /PRODUCT LIST -->

            <!-- PRODUCT LIST -->
            <div id="pl-2" class="product-list grid column4-wrap owl-carousel">
                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="{{ url('website/images/items') }}/phantom_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="item-v1.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="item-v1.html">
                                    <p>إذهب للمنتج</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>إضافة للمفضلة</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="item-v1.html">
                            <p class="text-header">تصميم تطبيق أندرويد</p>
                        </a>
                        <p class="product-description">هنا يكون وصف المنتج القصير...</p>
                        <a href="shop-gridview-v1.html">
                            <p class="category primary">قالب PSD</p>
                        </a>
                        <p class="price"><span>$</span>14</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="{{ url('website/images/avatars') }}/avatar_09.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">أحمد حسين</p>
                        </a>
                        <ul class="rating tooltip" title="التقييمات">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="{{ url('website/images/items') }}/shadow_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="item-v1.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="item-v1.html">
                                    <p>إذهب للمنتج</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>إضافة للمفضلة</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="item-v1.html">
                            <p class="text-header">8 أيقونات إحترافية</p>
                        </a>
                        <p class="product-description">هنا يكون وصف المنتج القصير...</p>
                        <a href="shop-gridview-v1.html">
                            <p class="category primary">جرافيك</p>
                        </a>
                        <p class="price"><span>$</span>6</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="{{ url('website/images/avatars') }}/avatar_04.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">حسين مستقل</p>
                        </a>
                        <ul class="rating tooltip" title="التقييمات">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="{{ url('website/images/items') }}/monsters_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="item-v1.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="item-v1.html">
                                    <p>إذهب للمنتج</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>إضافة للمفضلة</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="item-v1.html">
                            <p class="text-header">لعبة أندرويد</p>
                        </a>
                        <p class="product-description">هنا يكون وصف المنتج القصير...</p>
                        <a href="shop-gridview-v1.html">
                            <p class="category primary">الموشن جرافيك</p>
                        </a>
                        <p class="price"><span>$</span>10</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="{{ url('website/images/avatars') }}/avatar_10.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">عبد الفتاح</p>
                        </a>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="{{ url('website/images/items') }}/trickster_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="item-v1.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="item-v1.html">
                                    <p>إذهب للمنتج</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>إضافة للمفضلة</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="item-v1.html">
                            <p class="text-header">كوفر وسائل التواصل</p>
                        </a>
                        <p class="product-description">هنا يكون وصف المنتج القصير...</p>
                        <a href="shop-gridview-v1.html">
                            <p class="category primary">قالب PSD</p>
                        </a>
                        <p class="price"><span>$</span>14</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="{{ url('website/images/avatars') }}/avatar_09.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">أحمد حسين</p>
                        </a>
                        <ul class="rating tooltip" title="التقييمات">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="{{ url('website/images/items') }}/phantom_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="item-v1.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="item-v1.html">
                                    <p>إذهب للمنتج</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>إضافة للمفضلة</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="item-v1.html">
                            <p class="text-header">تصميم تطبيق أندرويد</p>
                        </a>
                        <p class="product-description">هنا يكون وصف المنتج القصير...</p>
                        <a href="shop-gridview-v1.html">
                            <p class="category primary">قالب PSD</p>
                        </a>
                        <p class="price"><span>$</span>14</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="{{ url('website/images/avatars') }}/avatar_09.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">أحمد حسين</p>
                        </a>
                        <ul class="rating tooltip" title="التقييمات">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="{{ url('website/images/items') }}/shadow_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="item-v1.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="item-v1.html">
                                    <p>إذهب للمنتج</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>إضافة للمفضلة</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="item-v1.html">
                            <p class="text-header">8 أيقونات إحترافية</p>
                        </a>
                        <p class="product-description">هنا يكون وصف المنتج القصير...</p>
                        <a href="shop-gridview-v1.html">
                            <p class="category primary">جرافيك</p>
                        </a>
                        <p class="price"><span>$</span>6</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="{{ url('website/images/avatars') }}/avatar_04.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">حسين مستقل</p>
                        </a>
                        <ul class="rating tooltip" title="التقييمات">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="{{ url('website/images/items') }}/monsters_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="item-v1.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="item-v1.html">
                                    <p>إذهب للمنتج</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>إضافة للمفضلة</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="item-v1.html">
                            <p class="text-header">لعبة أندرويد</p>
                        </a>
                        <p class="product-description">هنا يكون وصف المنتج القصير...</p>
                        <a href="shop-gridview-v1.html">
                            <p class="category primary">الموشن جرافيك</p>
                        </a>
                        <p class="price"><span>$</span>10</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="{{ url('website/images/avatars') }}/avatar_10.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">عبد الفتاح</p>
                        </a>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="{{ url('website/images/items') }}/trickster_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="item-v1.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="item-v1.html">
                                    <p>إذهب للمنتج</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>إضافة للمفضلة</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="item-v1.html">
                            <p class="text-header">كوفر وسائل التواصل</p>
                        </a>
                        <p class="product-description">هنا يكون وصف المنتج القصير...</p>
                        <a href="shop-gridview-v1.html">
                            <p class="category primary">قالب PSD</p>
                        </a>
                        <p class="price"><span>$</span>14</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="{{ url('website/images/avatars') }}/avatar_09.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">أحمد حسين</p>
                        </a>
                        <ul class="rating tooltip" title="التقييمات">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->
            </div>
            <!-- /PRODUCT LIST -->

            <!-- PRODUCT LIST -->
            <div id="pl-3" class="product-list grid column4-wrap owl-carousel">
                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="{{ url('website/images/items') }}/patriot_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="item-v1.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="item-v1.html">
                                    <p>إذهب للمنتج</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>إضافة للمفضلة</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="item-v1.html">
                            <p class="text-header">فلاير لمطعم شعبي</p>
                        </a>
                        <p class="product-description">هنا يكون وصف المنتج القصير...</p>
                        <a href="shop-gridview-v1.html">
                            <p class="category primary">صوتيات</p>
                        </a>
                        <p class="price"><span>$</span>6</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="{{ url('website/images/avatars') }}/avatar_11.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">محسن سعيد</p>
                        </a>
                        <ul class="rating tooltip" title="التقييمات">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="{{ url('website/images/items') }}/city_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="item-v1.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="item-v1.html">
                                    <p>إذهب للمنتج</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>إضافة للمفضلة</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="item-v1.html">
                            <p class="text-header">خلفيات إحترافية للألعاب</p>
                        </a>
                        <p class="product-description">هنا يكون وصف المنتج القصير...</p>
                        <a href="shop-gridview-v1.html">
                            <p class="category primary">خلفيات</p>
                        </a>
                        <p class="price"><span>$</span>10</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="{{ url('website/images/avatars') }}/avatar_12.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">أمين بدة</p>
                        </a>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="{{ url('website/images/items') }}/alchemists_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="item-v1.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="item-v1.html">
                                    <p>إذهب للمنتج</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>إضافة للمفضلة</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="item-v1.html">
                            <p class="text-header">تصميم كتاب إلكتروني</p>
                        </a>
                        <p class="product-description">هنا يكون وصف المنتج القصير...</p>
                        <a href="shop-gridview-v1.html">
                            <p class="category primary">قالب PSD</p>
                        </a>
                        <p class="price"><span>$</span>14</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="{{ url('website/images/avatars') }}/avatar_09.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">أحمد حسين</p>
                        </a>
                        <ul class="rating tooltip" title="التقييمات">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="{{ url('website/images/items') }}/morgana_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="item-v1.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="item-v1.html">
                                    <p>إذهب للمنتج</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>إضافة للمفضلة</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="item-v1.html">
                            <p class="text-header">تصميم مجلة إحترافي</p>
                        </a>
                        <p class="product-description">هنا يكون وصف المنتج القصير...</p>
                        <a href="shop-gridview-v1.html">
                            <p class="category primary">تصاميم وسائل التواصل</p>
                        </a>
                        <p class="price"><span>$</span>14</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="{{ url('website/images/avatars') }}/avatar_13.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">خالد العربي</p>
                        </a>
                        <ul class="rating tooltip" title="التقييمات">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="{{ url('website/images/items') }}/patriot_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="item-v1.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="item-v1.html">
                                    <p>إذهب للمنتج</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>إضافة للمفضلة</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="item-v1.html">
                            <p class="text-header">فلاير لمطعم شعبي</p>
                        </a>
                        <p class="product-description">هنا يكون وصف المنتج القصير...</p>
                        <a href="shop-gridview-v1.html">
                            <p class="category primary">صوتيات</p>
                        </a>
                        <p class="price"><span>$</span>6</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="{{ url('website/images/avatars') }}/avatar_11.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">محسن سعيد</p>
                        </a>
                        <ul class="rating tooltip" title="التقييمات">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="{{ url('website/images/items') }}/city_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="item-v1.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="item-v1.html">
                                    <p>إذهب للمنتج</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>إضافة للمفضلة</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="item-v1.html">
                            <p class="text-header">خلفيات إحترافية للألعاب</p>
                        </a>
                        <p class="product-description">هنا يكون وصف المنتج القصير...</p>
                        <a href="shop-gridview-v1.html">
                            <p class="category primary">خلفيات</p>
                        </a>
                        <p class="price"><span>$</span>10</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="{{ url('website/images/avatars') }}/avatar_12.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">أمين بدة</p>
                        </a>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="{{ url('website/images/items') }}/alchemists_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="item-v1.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="item-v1.html">
                                    <p>إذهب للمنتج</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>إضافة للمفضلة</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="item-v1.html">
                            <p class="text-header">تصميم كتاب إلكتروني</p>
                        </a>
                        <p class="product-description">هنا يكون وصف المنتج القصير...</p>
                        <a href="shop-gridview-v1.html">
                            <p class="category primary">قالب PSD</p>
                        </a>
                        <p class="price"><span>$</span>14</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="{{ url('website/images/avatars') }}/avatar_09.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">أحمد حسين</p>
                        </a>
                        <ul class="rating tooltip" title="التقييمات">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="{{ url('website/images/items') }}/morgana_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="item-v1.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="item-v1.html">
                                    <p>إذهب للمنتج</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>إضافة للمفضلة</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="item-v1.html">
                            <p class="text-header">تصميم مجلة إحترافي</p>
                        </a>
                        <p class="product-description">هنا يكون وصف المنتج القصير...</p>
                        <a href="shop-gridview-v1.html">
                            <p class="category primary">تصاميم وسائل التواصل</p>
                        </a>
                        <p class="price"><span>$</span>14</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="{{ url('website/images/avatars') }}/avatar_13.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">خالد العربي</p>
                        </a>
                        <ul class="rating tooltip" title="التقييمات">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->
            </div>
            <!-- /PRODUCT LIST -->
        </div>
        <!-- /PRODUCT SHOWCASE -->

        <!-- PRODUCT SHOWCASE -->
        <div class="product-showcase">
            <!-- HEADLINE -->
            <div class="headline secondary">
                <h4>الأشهر على منصتنا</h4>
                <!-- SLIDE CONTROLS -->
                <div class="slide-control-wrap">
                    <div class="slide-control left">
                        <!-- SVG ARROW -->
                        <svg class="svg-arrow">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                        <!-- /SVG ARROW -->
                    </div>

                    <div class="slide-control right">
                        <!-- SVG ARROW -->
                        <svg class="svg-arrow">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                        <!-- /SVG ARROW -->
                    </div>
                </div>
                <!-- /SLIDE CONTROLS -->
            </div>
            <!-- /HEADLINE -->

            <!-- PRODUCT LIST -->
            <div id="pl-4" class="product-list grid column4-wrap owl-carousel">
                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="{{ url('website/images/items') }}/logos_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="service-page.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="service-page.html">
                                    <p>إذهب للمنتج</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>إضافة للمفضلة</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="service-page.html">
                            <p class="text-header">لوجو شركة إحترافي</p>
                        </a>
                        <p class="product-description">هنا يكون وصف المنتج القصير...</p>
                        <a href="services.html">
                            <p class="category secondary">الجرافيك</p>
                        </a>
                        <p class="price"><span>$</span>260</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="{{ url('website/images/avatars') }}/avatar_14.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">حمزة بدة</p>
                        </a>
                        <ul class="rating tooltip" title="التقييمات">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="{{ url('website/images/items') }}/morgana_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="service-page.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="service-page.html">
                                    <p>إذهب للمنتج</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>إضافة للمفضلة</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="service-page.html">
                            <p class="text-header">شخصيات كرتونية </p>
                        </a>
                        <p class="product-description">هنا يكون وصف المنتج القصير...</p>
                        <a href="services.html">
                            <p class="category secondary">الرسم</p>
                        </a>
                        <p class="price"><span>$</span>180</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="{{ url('website/images/avatars') }}/avatar_15.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">سارة برد</p>
                        </a>
                        <ul class="rating tooltip" title="التقييمات">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="{{ url('website/images/items') }}/morgana_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="service-page.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="service-page.html">
                                    <p>إذهب للمنتج</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>إضافة للمفضلة</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="service-page.html">
                            <p class="text-header">فلاير مزرعة إحترافي</p>
                        </a>
                        <p class="product-description">هنا يكون وصف المنتج القصير...</p>
                        <a href="services.html">
                            <p class="category secondary">الجرافيك</p>
                        </a>
                        <p class="price"><span>$</span>95</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="{{ url('website/images/avatars') }}/avatar_11.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">محسن سعيد</p>
                        </a>
                        <ul class="rating tooltip" title="التقييمات">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="{{ url('website/images/items') }}/morgana_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="service-page.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="service-page.html">
                                    <p>إذهب للمنتج</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>إضافة للمفضلة</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="service-page.html">
                            <p class="text-header">أيقونات جذابة للتطبيقات</p>
                        </a>
                        <p class="product-description">هنا يكون وصف المنتج القصير...</p>
                        <a href="services.html">
                            <p class="category secondary">الجرافيك</p>
                        </a>
                        <p class="price"><span>$</span>260</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="{{ url('website/images/avatars') }}/avatar_03.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">أمين بدة</p>
                        </a>
                        <ul class="rating tooltip" title="التقييمات">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="{{ url('website/images/items') }}/logos_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="service-page.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="service-page.html">
                                    <p>إذهب للمنتج</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>إضافة للمفضلة</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="service-page.html">
                            <p class="text-header">لوجو شركة إحترافي</p>
                        </a>
                        <p class="product-description">هنا يكون وصف المنتج القصير...</p>
                        <a href="services.html">
                            <p class="category secondary">الجرافيك</p>
                        </a>
                        <p class="price"><span>$</span>260</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="{{ url('website/images/avatars') }}/avatar_14.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">حمزة بدة</p>
                        </a>
                        <ul class="rating tooltip" title="التقييمات">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="{{ url('website/images/items') }}/morgana_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="service-page.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="service-page.html">
                                    <p>إذهب للمنتج</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>إضافة للمفضلة</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="service-page.html">
                            <p class="text-header">شخصيات كرتونية </p>
                        </a>
                        <p class="product-description">هنا يكون وصف المنتج القصير...</p>
                        <a href="services.html">
                            <p class="category secondary">الرسم</p>
                        </a>
                        <p class="price"><span>$</span>180</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="{{ url('website/images/avatars') }}/avatar_15.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">سارة برد</p>
                        </a>
                        <ul class="rating tooltip" title="التقييمات">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="{{ url('website/images/items') }}/morgana_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="service-page.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="service-page.html">
                                    <p>إذهب للمنتج</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>إضافة للمفضلة</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="service-page.html">
                            <p class="text-header">فلاير مزرعة إحترافي</p>
                        </a>
                        <p class="product-description">هنا يكون وصف المنتج القصير...</p>
                        <a href="services.html">
                            <p class="category secondary">الجرافيك</p>
                        </a>
                        <p class="price"><span>$</span>95</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="{{ url('website/images/avatars') }}/avatar_11.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">محسن سعيد</p>
                        </a>
                        <ul class="rating tooltip" title="التقييمات">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="{{ url('website/images/items') }}/morgana_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="service-page.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="service-page.html">
                                    <p>إذهب للمنتج</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>إضافة للمفضلة</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="service-page.html">
                            <p class="text-header">أيقونات جذابة للتطبيقات</p>
                        </a>
                        <p class="product-description">هنا يكون وصف المنتج القصير...</p>
                        <a href="services.html">
                            <p class="category secondary">الجرافيك</p>
                        </a>
                        <p class="price"><span>$</span>260</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="{{ url('website/images/avatars') }}/avatar_03.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">أمين بدة</p>
                        </a>
                        <ul class="rating tooltip" title="التقييمات">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->
            </div>
            <!-- /PRODUCT LIST -->
        </div>
        <!-- /PRODUCT SHOWCASE -->

        <!-- PRODUCT SHOWCASE -->
        <div class="product-showcase">
            <!-- HEADLINE -->
            <div class="headline">
                <h4>جديد من تتابعهم</h4>
                <!-- SLIDE CONTROLS -->
                <div class="slide-control-wrap">
                    <div class="slide-control left">
                        <!-- SVG ARROW -->
                        <svg class="svg-arrow">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                        <!-- /SVG ARROW -->
                    </div>

                    <div class="slide-control right">
                        <!-- SVG ARROW -->
                        <svg class="svg-arrow">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                        <!-- /SVG ARROW -->
                    </div>
                </div>
                <!-- /SLIDE CONTROLS -->
            </div>
            <!-- /HEADLINE -->

            <!-- PRODUCT LIST -->
            <div id="pl-5" class="product-list grid column4-wrap owl-carousel">
                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="{{ url('website/images/items') }}/morgana_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="product-page.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="product-page.html">
                                    <p>إذهب للمنتج</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>إضافة للمفضلة</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="product-page.html">
                            <p class="text-header">قالب ووردبريس لشركة</p>
                        </a>
                        <p class="product-description">هنا يكون وصف المنتج القصير...</p>
                        <a href="products.html">
                            <p class="category tertiary">قوالب</p>
                        </a>
                        <p class="price"><span>$</span>380</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="{{ url('website/images/avatars') }}/avatar_16.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">أمين بدة</p>
                        </a>
                        <ul class="rating tooltip" title="التقييمات">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="{{ url('website/images/items') }}/westeroshtml_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="item-v1.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="item-v1.html">
                                    <p>إذهب للمنتج</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>إضافة للمفضلة</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="item-v1.html">
                            <p class="text-header">لعبة أندرويد</p>
                        </a>
                        <p class="product-description">هنا يكون وصف المنتج القصير...</p>
                        <a href="shop-gridview-v1.html">
                            <p class="category primary">قوالب</p>
                        </a>
                        <p class="price"><span>$</span>28</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="{{ url('website/images/avatars') }}/avatar_09.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">أحمد حسين</p>
                        </a>
                        <ul class="rating tooltip" title="التقييمات">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="{{ url('website/images/items') }}/pixel_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="item-v1.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="item-v1.html">
                                    <p>إذهب للمنتج</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>إضافة للمفضلة</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="item-v1.html">
                            <p class="text-header">قالب متجر إلكتروني </p>
                        </a>
                        <p class="product-description">هنا يكون وصف المنتج القصير...</p>
                        <a href="shop-gridview-v1.html">
                            <p class="category primary">شوبيفاي</p>
                        </a>
                        <p class="price"><span>$</span>86</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="{{ url('website/images/avatars') }}/avatar_06.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">سارة أحمد</p>
                        </a>
                        <ul class="rating tooltip" title="التقييمات">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="{{ url('website/images/items') }}/joystick_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="product-page.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="product-page.html">
                                    <p>إذهب للمنتج</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>إضافة للمفضلة</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="product-page.html">
                            <p class="text-header">قالب شركة إلكترونية </p>
                        </a>
                        <p class="product-description">هنا يكون وصف المنتج القصير...</p>
                        <a href="products.html">
                            <p class="category tertiary">قوالب </p>
                        </a>
                        <p class="price"><span>$</span>24</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="{{ url('website/images/avatars') }}/avatar_17.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">أمين بدة</p>
                        </a>
                        <ul class="rating tooltip" title="التقييمات">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="{{ url('website/images/items') }}/morgana_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="product-page.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="product-page.html">
                                    <p>إذهب للمنتج</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>إضافة للمفضلة</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="product-page.html">
                            <p class="text-header">قالب ووردبريس لشركة</p>
                        </a>
                        <p class="product-description">هنا يكون وصف المنتج القصير...</p>
                        <a href="products.html">
                            <p class="category tertiary">قوالب</p>
                        </a>
                        <p class="price"><span>$</span>380</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="{{ url('website/images/avatars') }}/avatar_16.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">أمين بدة</p>
                        </a>
                        <ul class="rating tooltip" title="التقييمات">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="{{ url('website/images/items') }}/westeroshtml_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="item-v1.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="item-v1.html">
                                    <p>إذهب للمنتج</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>إضافة للمفضلة</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="item-v1.html">
                            <p class="text-header">لعبة أندرويد</p>
                        </a>
                        <p class="product-description">هنا يكون وصف المنتج القصير...</p>
                        <a href="shop-gridview-v1.html">
                            <p class="category primary">قوالب</p>
                        </a>
                        <p class="price"><span>$</span>28</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="{{ url('website/images/avatars') }}/avatar_09.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">أحمد حسين</p>
                        </a>
                        <ul class="rating tooltip" title="التقييمات">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="{{ url('website/images/items') }}/pixel_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="item-v1.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="item-v1.html">
                                    <p>إذهب للمنتج</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>إضافة للمفضلة</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="item-v1.html">
                            <p class="text-header">قالب متجر إلكتروني </p>
                        </a>
                        <p class="product-description">هنا يكون وصف المنتج القصير...</p>
                        <a href="shop-gridview-v1.html">
                            <p class="category primary">شوبيفاي</p>
                        </a>
                        <p class="price"><span>$</span>86</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="{{ url('website/images/avatars') }}/avatar_06.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">سارة أحمد</p>
                        </a>
                        <ul class="rating tooltip" title="التقييمات">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="{{ url('website/images/items') }}/joystick_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="product-page.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="product-page.html">
                                    <p>إذهب للمنتج</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>إضافة للمفضلة</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="product-page.html">
                            <p class="text-header">قالب شركة إلكترونية </p>
                        </a>
                        <p class="product-description">هنا يكون وصف المنتج القصير...</p>
                        <a href="products.html">
                            <p class="category tertiary">قوالب </p>
                        </a>
                        <p class="price"><span>$</span>24</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="{{ url('website/images/avatars') }}/avatar_17.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">أمين بدة</p>
                        </a>
                        <ul class="rating tooltip" title="التقييمات">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->
            </div>
            <!-- PRODUCT LIST -->
        </div>
        <!-- PRODUCT SHOWCASE -->
    </div>
</div>
<!-- /منتج SIDESHOW -->

<!-- SUBSCRIBE BANNER -->
<div id="subscribe-banner-wrap">
    <div id="subscribe-banner">
        <!-- SUBSCRIBE CONTENT -->
        <div class="subscribe-content">
            <!-- SUBSCRIBE HEADER -->
            <div class="subscribe-header">
                <figure>
                    <img src="{{ url('website/images/news_icon.png') }}" alt="subscribe-icon">
                </figure>
                <p class="subscribe-title">التسجيل بالقائمة البريدية</p>
                <p>و توصل باخر الأخبار و العروض</p>
            </div>
            <!-- /SUBSCRIBE HEADER -->

            <!-- SUBSCRIBE FORM -->
            <form class="subscribe-form">
                <input type="text" name="subscribe_email" id="subscribe_email" placeholder="ضع بريدك الإلكتروني هنا...">
                <button class="button medium dark">التسجيل!</button>
            </form>
            <!-- /SUBSCRIBE FORM -->
        </div>
        <!-- /SUBSCRIBE CONTENT -->
    </div>
</div>
<!-- /SUBSCRIBE BANNER -->

<!-- FOOTER -->
<footer>
    <!-- FOOTER TOP -->
    <div id="footer-top-wrap">
        <div id="footer-top">
            <!-- COMPANY INFO -->
            <div class="company-info">
                <figure class="logo small">
                    <img src="{{ url('website/images/logo_small.png') }}" alt="logo-small">
                </figure>
                <p>هنا نص عشوائي باللغة العربية يمكنك تجاهل هذا النص لأنه لا يعني أي شيئ مجرد تجربة.</p>
                <ul class="company-info-list">
                    <li class="company-info-item">
                        <span class="icon-present"></span>
                        <p><span>850.296</span> منتج</p>
                    </li>
                    <li class="company-info-item">
                        <span class="icon-energy"></span>
                        <p><span>1.207.300</span> مستخدم</p>
                    </li>
                    <li class="company-info-item">
                        <span class="icon-user"></span>
                        <p><span>74.059</span> بائع</p>
                    </li>
                </ul>
                <!-- SOCIAL LINKS -->
                <ul class="social-links">
                    <li class="social-link fb">
                        <a href="#"></a>
                    </li>
                    <li class="social-link twt">
                        <a href="#"></a>
                    </li>
                    <li class="social-link db">
                        <a href="#"></a>
                    </li>
                    <li class="social-link rss">
                        <a href="#"></a>
                    </li>
                </ul>
                <!-- /SOCIAL LINKS -->
            </div>
            <!-- /COMPANY INFO -->

            <!-- LINK INFO -->
            <div class="link-info">
                <p class="footer-title">مجتمعنا</p>
                <!-- LINK LIST -->
                <ul class="link-list">
                    <li class="link-item">
                        <div class="bullet"></div>
                        <a href="#">كيف تنضم إلينا</a>
                    </li>
                    <li class="link-item">
                        <div class="bullet"></div>
                        <a href="#">البيع و الشراء</a>
                    </li>
                    <li class="link-item">
                        <div class="bullet"></div>
                        <a href="forum.html">منتدى سريع</a>
                    </li>
                    <li class="link-item">
                        <div class="bullet"></div>
                        <a href="blog-v1.html">مدونة سريع</a>
                    </li>
                    <li class="link-item">
                        <div class="bullet"></div>
                        <a href="#">منتجات مجانية</a>
                    </li>
                    <li class="link-item">
                        <div class="bullet"></div>
                        <a href="#">نصائح للمستخدمين</a>
                    </li>
                </ul>
                <!-- /LINK LIST -->
            </div>
            <!-- /LINK INFO -->

            <!-- LINK INFO -->
            <div class="link-info">
                <p class="footer-title">المستخدمين</p>
                <!-- LINK LIST -->
                <ul class="link-list">
                    <li class="link-item">
                        <div class="bullet"></div>
                        <a href="#">برنامج الشراكة</a>
                    </li>
                    <li class="link-item">
                        <div class="bullet"></div>
                        <a href="#">إفتح متجر</a>
                    </li>
                    <li class="link-item">
                        <div class="bullet"></div>
                        <a href="#">شراء الرصيد</a>
                    </li>
                    <li class="link-item">
                        <div class="bullet"></div>
                        <a href="#">withdrawals</a>
                    </li>
                    <li class="link-item">
                        <div class="bullet"></div>
                        <a href="#">اللقاءات </a>
                    </li>
                    <li class="link-item">
                        <div class="bullet"></div>
                        <a href="#">كيف تستعمل سريع</a>
                    </li>
                </ul>
                <!-- /LINK LIST -->
            </div>
            <!-- /LINK INFO -->

            <!-- LINK INFO -->
            <div class="link-info">
                <p class="footer-title">المساعدة</p>
                <!-- LINK LIST -->
                <ul class="link-list">
                    <li class="link-item">
                        <div class="bullet"></div>
                        <a href="#">مركز المساعدة</a>
                    </li>
                    <li class="link-item">
                        <div class="bullet"></div>
                        <a href="#">الأسئلة الشائعة</a>
                    </li>
                    <li class="link-item">
                        <div class="bullet"></div>
                        <a href="#">شروط الإستخدام</a>
                    </li>
                    <li class="link-item">
                        <div class="bullet"></div>
                        <a href="#">سياسة الخصوصية</a>
                    </li>
                    <li class="link-item">
                        <div class="bullet"></div>
                        <a href="#">معلومات الأمان</a>
                    </li>
                </ul>
                <!-- /LINK LIST -->
            </div>
            <!-- /LINK INFO -->

            <!-- تويتر سريع -->
            <div class="twitter-feed">
                <p class="footer-title">تويتر سريع</p>
                <!-- TWEETS -->
                <ul class="tweets"></ul>
                <!-- /TWEETS -->
            </div>
            <!-- /تويتر سريع -->
        </div>
    </div>
    <!-- /FOOTER TOP -->

    <!-- FOOTER BOTTOM -->
    <div id="footer-bottom-wrap">
        <div id="footer-bottom">
            <p><span>&copy;</span><a href="index.html">سريع</a> أمين بدة - جميع الحقوق محفوظة 2018</p>
        </div>
    </div>
    <!-- /FOOTER BOTTOM -->
</footer>
<!-- /FOOTER -->

<div class="shadow-film closed"></div>

<!-- SVG ARROW -->
<svg style="display: none;">
    <symbol id="svg-arrow" viewBox="0 0 3.923 6.64014" preserveAspectRatio="xMinYMin meet">
        <path d="M3.711,2.92L0.994,0.202c-0.215-0.213-0.562-0.213-0.776,0c-0.215,0.215-0.215,0.562,0,0.777l2.329,2.329
			L0.217,5.638c-0.215,0.215-0.214,0.562,0,0.776c0.214,0.214,0.562,0.215,0.776,0l2.717-2.718C3.925,3.482,3.925,3.135,3.711,2.92z"/>
    </symbol>
</svg>
<!-- /SVG ARROW -->

<!-- SVG STAR -->
<svg style="display: none;">
    <symbol id="svg-star" viewBox="0 0 10 10" preserveAspectRatio="xMinYMin meet">
        <polygon points="4.994,0.249 6.538,3.376 9.99,3.878 7.492,6.313 8.082,9.751 4.994,8.129 1.907,9.751
	2.495,6.313 -0.002,3.878 3.45,3.376 "/>
    </symbol>
</svg>
<!-- /SVG STAR -->

<!-- SVG PLUS -->
<svg style="display: none;">
    <symbol id="svg-plus" viewBox="0 0 13 13" preserveAspectRatio="xMinYMin meet">
        <rect x="5" width="3" height="13"/>
        <rect y="5" width="13" height="3"/>
    </symbol>
</svg>
<!-- /SVG PLUS -->

<!-- jQuery -->
<script src="{{ url('website/js/vendor/jquery-3.1.0.min.js') }}"></script>
<!-- Tooltipster -->
<script src="{{ url('website/js/vendor/jquery.tooltipster.min.js') }}"></script>
<!-- Owl Carousel -->
<script src="{{ url('website/js/vendor/owl.carousel.min.js') }}"></script>
<!-- Tweet -->
<script src="{{ url('website/js/vendor/twitter/jquery.tweet.min.js') }}"></script>
<!-- xmAlerts -->
<script src="{{ url('website/js/vendor/jquery.xmalert.min.js') }}"></script>
<!-- Side Menu -->
<script src="{{ url('website/js/side-menu.js') }}"></script>
<!-- home -->
<script src="{{ url('website/js/home.js') }}"></script>
<!-- Tooltip -->
<script src="{{ url('website/js/tooltip.js') }}"></script>
<!-- User Quickview Dropdown -->
<script src="{{ url('website/js/user-board.js') }}"></script>
<!-- home Alerts -->
<script src="{{ url('website/js/home-alerts.js') }}"></script>
<!-- Footer -->
<script src="{{ url('website/js/footer.js') }}"></script>
</body>
</html>
<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package miew
 */
?>

<header class="py-4 hidden">

    <nav>

        <div class="container relative flex flex-wrap items-center justify-between">

            <a class="navbar-brand md:me-8" href="<?php echo get_site_url();?>">
                <img src="assets/images/logo.png" class="h-5 inline-block dark:hidden" alt="">
            </a>

            <div class="nav-icons flex items-center lg:order-2 md:ms-6">
                <button data-collapse="menu-collapse" type="button" class="collapse-btn inline-flex items-center ms-2 text-slate-900 lg:hidden" aria-controls="menu-collapse" aria-expanded="false">
                    <span class="sr-only">Navigation Menu</span>
                    <i class="mdi mdi-menu text-[24px]"></i>
                </button>
            </div>

            <div class="navigation lg:order-1 lg:flex hidden ms-auto" id="menu-collapse">
                <ul class="flex flex-row space-x-4">
                    <li>
                        <a href="#features">Features</a>
                    </li>
                    <li>
                        <a href="#screenshot">Screenshots</a>
                    </li>
                    <li>
                        <a href="#contact">Contact us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
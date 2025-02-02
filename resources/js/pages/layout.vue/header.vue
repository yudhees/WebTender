<template>
    <header class="header header-two">
    <div class="top-header">
        <div class="container">
            <div class="top-head-items">
                <ul class="nav user-menu">

                    <li class="nav-item dropdown has-arrow flag-nav">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);" role="button">
                            <img :src="asset('assets/img/flags/us.png')" class="me-1" alt="Flag" height="20"> <span>English</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img :src="asset('assets/img/flags/us.png')" alt="Flag" height="16"> English
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img :src="asset('assets/img/flags/fr.png')" alt="Flag" height="16"> French
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img :src="asset('assets/img/flags/es.png')" alt="Flag" height="16"> Spanish
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img :src="asset('assets/img/flags/de.png')" alt="Flag" height="16"> German
                            </a>
                        </div>
                    </li>

                    <li class="nav-item dropdown has-arrow flag-nav">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);" role="button">
                            <span>USD</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="javascript:void(0);" class="dropdown-item">
                                USD
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                French
                            </a>
                        </div>
                    </li>
                </ul>
                <ul class="top-header-links">
                    <li>
                        <ul>
                            <li>
                                <a href="javascript:void(0);">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="feather feather-lock"></i>Register</a>
                    </li>
                    <li>
                        <a href="#"><i class="feather feather-user"></i>Login</a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <nav class="navbar navbar-expand-lg header-nav p-0">
            <div class="navbar-header header-select">
                <a id="mobile_btn" href="javascript:void(0);">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
                <a href="/" class="navbar-brand logo">
                    <img :src="asset('assets/img/logo.svg')" class="img-fluid" alt="Logo">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="/" class="menu-logo">
                        <img :src="asset('assets/img/logo.svg')" class="img-fluid" alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
                <ul class="main-nav">
                    <li class="active has-submenu">
                        <a href="/">Home</a>
                    </li>
                    <li class="has-submenu">
                        <a href="javascript:void(0);">About us</a>
                    </li>
                    <li class="has-submenu">
                        <a href="javascript:void(0);">Tenders </a>
                    </li>
                    <li class="has-submenu">
                        <a href="javascript:void(0);">Contract Awards </a>
                    </li>
                    <li class="has-submenu">
                        <a href="javascript:void(0);">Projects </a>
                    </li>
                    <li class="has-submenu">
                        <a href="javascript:void(0);">Business News </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">Country</a>
                    </li>
                    <li>
                        <a href="#" target="_blank">Sectors</a>
                    </li>
                    <li>
                        <a href="#" target="_blank">Subscription</a>
                    </li>
                </ul>
            </div>
            <ul class="nav header-navbar-rht">
                <li><a href="#" class="login-btn"><i class="fa-solid fa-plus me-2"></i>Request Tender </a></li>
            </ul>
        </nav>
    </div>
</header>
</template>
<script setup>
import { asset } from '@/composables/global';
</script>

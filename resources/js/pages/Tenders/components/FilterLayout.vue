<template>
    <div class="col-xl-3 col-lg-4 theiaStickySidebar" style="
            position: relative;
            overflow: visible;
            box-sizing: border-box;
            min-height: 1px;
        ">
        <div class="theiaStickySidebar" style="
                padding-top: 0px;
                padding-bottom: 1px;
                position: static;
                transform: none;
                top: 0px;
                left: 75.4286px;
            "></div>
        <div class="card search-filter">
            <div class="card-header d-flex justify-content-between">
                <h4 class="card-title mb-0">Search Filter</h4>
            </div>
            <slot></slot>
        </div>
    </div>
</template>

<template>
     <div class="col-xl-12 col-md-12 listResult">
                <div class="feature-develop-blk">
                    <div class="developer-sub-blk">
                        <div class="developer-content">
                            <h4><a href="#"
                                    style="text-decoration: underline;text-decoration-color: #4d4d4d;font-size: 16px;">
                                    {{ data.WorkDesc }}</a>
                            </h4>
                            <p><span style="color: #ff7600;">Ref No :</span> <span
                                    style="color: hsl(0deg 0% 26.21%);">{{ data.RefId }}</span></p>
                            <p><span style="color: #ff7600;">Sectors :</span> <span style="color: hsl(0deg 0% 26.21%);">
                                    {{ data.sector }}</span></p>
                        </div>
                    </div>
                    <div class="hour-rate">
                        <ul class="nav">
                            <li><i class="feather-calendar me-1"></i><span
                                    style="color: hsl(0deg 0% 26.21%);font-weight: 600;">Publish Date: </span> <span
                                    style="margin-left: 3px;">{{ data.entryDate }}</span></li>
                            <li><i class="feather-calendar me-1"></i><span
                                    style="color: hsl(0deg 0% 26.21%);font-weight: 600;">Closing Date: </span> <span
                                    style="margin-left: 3px;">{{ data.closingDate }}</span></li>
                            <li><i class="feather-map-pin me-1"></i><span
                                    style="color: hsl(0deg 0% 26.21%);font-weight: 600;">Country: </span> <span
                                    style="margin-left: 3px;">{{ data.country }}</span></li>
                            <li><a href="#" class="btn btn-primary">View More</a></li>
                        </ul>
                    </div>
                </div>
            </div>
</template>
<script setup>
defineProps({
    data:{default:{}}
})
</script>

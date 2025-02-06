<template>
    <FilterLayout>
        <div class="card-body">
            <FilterWidget heading="Search">
                <Input v-model="form.search" placeholder="Enter Keywords" />
            </FilterWidget>
            <FilterWidget heading="Tender ID">
                <Input placeholder="Enter Id" />
            </FilterWidget>
            <FilterWidget heading="Sectors">
                <Select placeholder="Select Sector" />
            </FilterWidget>
            <FilterWidget heading="Country">
                <Select placeholder="Select Country" />
            </FilterWidget>
            <FilterWidget heading="Region">
                <Select placeholder="Select Region" />
            </FilterWidget>
            <FilterWidget heading="Notice Type">
                <div>
                    <label class="custom_check">
                        <input type="checkbox" name="select_time" />
                        <span class="checkmark"></span>Tenders, RFPs &
                        Prequalification
                    </label>
                </div>
                <div>
                    <label class="custom_check">
                        <input type="checkbox" name="select_time" />
                        <span class="checkmark"></span>Contract Awards
                    </label>
                </div>
                <div>
                    <label class="custom_check">
                        <input type="checkbox" name="select_time" />
                        <span class="checkmark"></span>Projects
                    </label>
                </div>
                <div>
                    <label class="custom_check">
                        <input type="checkbox" name="select_time" />
                        <span class="checkmark"></span>Procurement News
                    </label>
                </div>
            </FilterWidget>
            <FilterBtn />
        </div>
    </FilterLayout>
</template>
<script setup>
import { inject, onMounted, reactive } from "vue";
import { useRoute } from "vue-router";
import FilterLayout from "./FilterLayout.vue";
import FilterWidget from "./FilterWidget.vue";
import Input from "./Input.vue";
import Select from "./Select.vue";
import FilterBtn from "./filterBtn.vue";
import axios from "axios";
import collect from "collect.js";
const route = useRoute();
const {results}=inject('tenders')
const form = reactive({
    search: "",
    page:1,
});
const filters=reactive({
    countries:{},
    sectors:{},
})
const pages=reactive({
    hasMorePages:false
})
onMounted(async() => {
    const {query}=route
    form.search=query.search
    // console.log(route.query);
    await getFiltersData()
    search()
});
const search=async()=>{
    try {
        const res=await axios.get('/search',{params:form})
        const resposne=res.data
        const{data}=resposne
        pages.hasMorePages=data.hasMorePages
        results.value=data.data.map(val=>{
            return {
                ...val,
                country:filters.countries?.[val.CountryId]??'',
                sector:filters.sectors?.[val.SectorID]??'',
            }
        })
        // console.log(data)
        // console.log(results.value)

    } catch (error) {
        console.error(error);
    }
}
const getFiltersData=async()=>{
    try {
        const res=await axios.get('/filters-data')
        const resposne=res.data
        const{data}=resposne
        filters.countries=collect(data.countries).mapWithKeys(val=>[val.CountryID,val.Name]).all()
        filters.sectors=collect(data.sectors).mapWithKeys(val=>[val.ID,val.EN]).all()
        // console.log(filters)
    } catch (error) {
        console.error(error)
    }
}
</script>

<template>
    <div style="overflow: hidden;">
        <div class="row mt-5">
            <div class="col-md-4 offset-md-4">
                <div class="form-group m-0">
                    <input type="search" id="address" class="form-control" placeholder="Choose a city..." />
                </div>
                <div class="row">
                    <div class="col-sm-10">
                        <p class="m-0 ml-1">Selected: <strong id="address-value">none</strong></p>
                    </div>
                    <div class="col-sm-2 my-1">
                        <div class="float-right mr-1">
                            <button  @click.prevent="fetchData" v-if="!loading" type="button" class="btn btn-sm btn-info">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="-1.5 -2.5 24 24" width="18" fill = "white" height="18" preserveAspectRatio="xMinYMin" class="icon__icon"><path d="M17.83 4.194l.42-1.377a1 1 0 1 1 1.913.585l-1.17 3.825a1 1 0 0 1-1.248.664l-3.825-1.17a1 1 0 1 1 .585-1.912l1.672.511A7.381 7.381 0 0 0 3.185 6.584l-.26.633a1 1 0 1 1-1.85-.758l.26-.633A9.381 9.381 0 0 1 17.83 4.194zM2.308 14.807l-.327 1.311a1 1 0 1 1-1.94-.484l.967-3.88a1 1 0 0 1 1.265-.716l3.828.954a1 1 0 0 1-.484 1.941l-1.786-.445a7.384 7.384 0 0 0 13.216-1.792 1 1 0 1 1 1.906.608 9.381 9.381 0 0 1-5.38 5.831 9.386 9.386 0 0 1-11.265-3.328z"></path></svg>
                            </button>
                            <button v-if="loading" class="btn btn-sm btn-info" type="button" disabled>
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                <span class="sr-only">Loading...</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="current-weather col-md-4 offset-md-4">
                <div class="card mb-3">
                    <!-- card starts -->
                    <div class="card-header text-black" style="padding: 10px; background: #89c1e4;">
                        <!-- card Header starts -->
                        <div class="d-flex flex-row text-center">
                            <div class="col-md-4 align-self-center">
                                <h1 class="m-0" style="font-size: 2.9rem;">{{currentTemInfo.actual}}°C</h1>
                                <p class="m-0" style="font-size: 13px;">
                                    Feels like {{currentTemInfo.feels}}°C
                                </p>
                            </div>
                            <div class="col-md-5 align-self-center">
                                <h5 class="text-center mb-1">
                                    {{ firstLetterUpperCase(currentTemInfo.summary) }}
                                </h5>
                                <p class="text-center m-0" style="font-size: 12px;" >
                                    {{location.city}}
                                </p>
                            </div>
                            <div class="col-md-3 align-self-center">
                                <img :src="currentTemInfo.icon" width="55px" height="55px" alt="">
                                <p class="m-0">
                                    {{currentTemInfo.shortSummary}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- card Header ends -->
                    <div class="card-body text-white" style="background-color: #157ade!important; padding: 0.4rem;" >
                        <div 
                        v-for="(day, index) in daily" :key="index"
                        v-if="index < 6"
                        class="d-flex flex-row text-center">
                            <div class="p-1 col-md-2 align-self-center">{{ toDayOfweek(day.dt) }}</div>
                            <div class="p-1 col-md-2 align-self-center">
                                <img :src="'http://openweathermap.org/img/wn/' + day.weather[0].icon + '@2x.png'" width="50px" height="50px" alt="">
                            </div>
                            <div class="p-1 col-md-6 align-self-center" style="font-size: 14px">
                                <div>{{ firstLetterUpperCase(day.weather[0].description) }}</div>
                            </div>
                            <div class="col-md-2 align-self-center" style="font-size: 12px; padding: 2px 1px;" >
                                <div>{{Math.round(day.temp.max)}}°C</div>
                                <div>{{Math.round(day.temp.min)}}°C</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card ends -->
            </div>
            <div class="col-md-4 offset-md-4">
                <p class="text-center">Created with  
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" fill="red" width="18" height="18" viewBox="0 0 511.626 511.627" style="enable-background:new 0 0 511.626 511.627;" xml:space="preserve">
                <g>
                    <path d="M475.366,71.951c-24.175-23.606-57.575-35.404-100.215-35.404c-11.8,0-23.843,2.046-36.117,6.136
                        c-12.279,4.093-23.702,9.615-34.256,16.562c-10.568,6.945-19.65,13.467-27.269,19.556c-7.61,6.091-14.845,12.564-21.696,19.414
                        c-6.854-6.85-14.087-13.323-21.698-19.414c-7.616-6.089-16.702-12.607-27.268-19.556c-10.564-6.95-21.985-12.468-34.261-16.562
                        c-12.275-4.089-24.316-6.136-36.116-6.136c-42.637,0-76.039,11.801-100.211,35.404C12.087,95.552,0,128.288,0,170.162
                        c0,12.753,2.24,25.889,6.711,39.398c4.471,13.514,9.566,25.031,15.275,34.546c5.708,9.514,12.181,18.796,19.414,27.837
                        c7.233,9.042,12.519,15.27,15.846,18.699c3.33,3.422,5.948,5.899,7.851,7.419L243.25,469.937c3.427,3.429,7.614,5.144,12.562,5.144
                        s9.138-1.715,12.563-5.137l177.87-171.307c43.588-43.583,65.38-86.41,65.38-128.475C511.626,128.288,499.537,95.552,475.366,71.951
                        z"/></g>
                </svg>
                by <b>Zubayer Hossain</b></p>
            </div>
            <vue-snotify></vue-snotify>
        </div>
    </div>
</template>

<script>
export default {
    name: "WeatherComponent",
    watch: {
        location: {
            handler(newValue, oldvalue){
                this.fetchData();
            },
            deep: true
        },
    },
    data() {
      return {
        currentTemInfo: {
            actual: '',
            feels: '',
            summary: '',
            shortSummary: '',
            icon: '',
        },
        location: {
            city: 'Dhaka, Bangladesh',
            lat: 23.8103,
            lon: 90.4125,
        },
        daily: [],
        loading: false,
      }
    },
    methods: {
        toDayOfweek(timeStamp){
            const newDate = new Date(timeStamp*1000)
            const days = ['SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT']
            return days[newDate.getDay()]
        },
        firstLetterUpperCase(str){
            return str.charAt(0).toUpperCase() + str.substring(1)
        },
        fetchData(){
            this.loading = true;
            // axios.get(`http://weather-app.test/api/getWeather?lat=${this.location.lat}&lon=${this.location.lon}`)
            axios.get(`https://temperature-vue.herokuapp.com/api/getWeather?lat=${this.location.lat}&lon=${this.location.lon}`)
            .then(({data:{current, daily}}) => {
                this.currentTemInfo.actual = Math.round(current.temp);
                this.currentTemInfo.feels = Math.round(current.feels_like);
                this.currentTemInfo.summary = current.weather[0].description;
                this.currentTemInfo.shortSummary = current.weather[0].main;
                this.currentTemInfo.icon = `https://openweathermap.org/img/wn/${current.weather[0].icon}@2x.png`;
                this.daily = daily;
            })
            .catch(({response:{statusText}}) => {
                console.log(statusText);
                this.$snotify.error(statusText + "! Try again later.", 'Error!');
            })
            .finally(() => {
                this.loading = false;
            })
        }
    },
    mounted() {
        this.fetchData()

        var placesAutocomplete = places({
            appId: 'pl7F2BGLSINO',
            apiKey: '87663a61fa6d3d23f163e55c3592a8ad',
            container: document.querySelector('#address')
        }).configure({
            type: 'city',
            aroundLatLngViaIP: false,
        });
        var $address = document.querySelector('#address-value')
        placesAutocomplete.on('change', (e) => {
            $address.textContent = e.suggestion.value
            this.location.city = `${e.suggestion.name}, ${e.suggestion.country}`
            this.location.lat = e.suggestion.latlng.lat
            this.location.lon = e.suggestion.latlng.lng
        });
        placesAutocomplete.on('clear', function () {
            $address.textContent = 'none';
        });
    },
};
</script>

<style>
body {
    background-color: rgb(182, 228, 228);
}
</style>

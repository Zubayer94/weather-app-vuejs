<template>
  <div>
      <div class="row mt-5">
        <div class="col-md-4 offset-md-4">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Default input" id="inputDefault">
          </div>
        </div>
        <div class="current-weather col-md-4 offset-md-4">
          <div class="card text-white bg-primary mb-3"> <!-- card starts -->
            <div class="card-header" style="padding: 10px;"> <!-- card Header starts -->
              <div class="row">
                <div class="col-md-9 current-status">
                  <div class="row">
                    <div class="col-md-5">
                      <h1 class="m-0" >8°C</h1>
                      <p class="m-0" style="font-size: 13px;">Feels like 2°C</p>
                    </div>
                    <div class="col-md-5 mt-3">
                      <h5 class="text-center mb-1">Overcast</h5>
                      <p class="text-center m-0" style="font-size: 12px;">Dhaka, Bangladesh</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 mt-3 current-status-icon">
                  <h3 class="text-center m-0">Icon</h3>
                </div>
              </div>
            </div> <!-- card Header ends -->
            <div class="card-body" style="background-color: #3b5065!important; padding: 0.4rem;">
              <div class="d-flex flex-row text-center">
                <div class="p-1 col-md-2">TUE</div>
                <div class="p-1 col-md-8 d-flex flex-wrap">
                  <div class="mr-2">Icon</div>
                  <div>Cloudy with a chance of shower</div>
                </div>
                <div class="col-md-2" style="font-size: 11px; padding: 2px 0px;">
                  <div>9°C</div>
                  <div>-9°C</div>
                </div>
              </div>
              <div class="d-flex flex-row text-center">
                <div class="p-1 col-md-2">TUE</div>
                <div class="p-1 col-md-8 d-flex flex-wrap">
                  <div class="mr-2">Icon</div>
                  <div>Cloudy with a chance of shower</div>
                </div>
                <div class="col-md-2" style="font-size: 11px; padding: 2px 0px;">
                  <div>9°C</div>
                  <div>-9°C</div>
                </div>
              </div>
            </div>
          </div> <!-- card ends -->
        </div>
      </div>
  </div>
</template>

<script>
export default {

}
</script>

<style>
  body {
    background-color: rgb(182, 228, 228);
  }
</style>
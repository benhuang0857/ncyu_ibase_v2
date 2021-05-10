$(document).ready(function(){
    //getGreenhouse();
    $('.fancyknob').fancyknob();

});

function getGreenhouse() {
    $.ajax({
        url: 'api/getGreenhouse',
        method: 'GET',
        dataType: 'json',
        success: function(json){
            var voltage = json['voltage'];
            var air_temperature = json['air_temperature'];
            var air_humidity = json['air_humidity'];
            var co2 = json['co2'];
            var sunshine = json['sunshine'];
            var soil_temperature = json['soil_temperature'];
            var soil_humidity = json['soil_humidity'];
            var air_pressure = json['air_pressure'];

            $('#voltage').val(voltage);
            $('#air_temperature').val(air_temperature);
            $('#air_humidity').val(air_humidity);
            $('#co2').val(co2);
            $('#sunshine').val(sunshine);
            $('#soil_temperature').val(soil_temperature);
            $('#soil_humidity').val(soil_humidity);
            $('#air_pressure').val(air_pressure);
        }
    });
    setTimeout('getGreenhouse()', 15 * 60 * 1000);
}
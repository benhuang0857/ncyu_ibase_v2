$(document).ready(function(){
    FarmHumidityChart();
    FarmTemperatureChart();
    FarmWaterLevelChart();
    FarmFlowChart();
});

function FarmHumidityChart() {
    $.ajax({
        url: 'api/getFarm',
        method: 'GET',
        dataType: 'json',
        success: function(json){
          var ctx = document.getElementById('FarmHumidity-line-chart').getContext('2d');
          var myChart = new Chart(ctx, {
            type: 'bar',
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            suggestedMin: 0,
                            suggestedMax: 100
                        }
                    }]
                },
                title: {
                    display: true,
                    text: '濕度'
                }
            },
            data: {
              datasets: [{ 
                    backgroundColor : [],
                    data: [],
                    label: "水稻01",
                    borderColor: "red",
                    fill: true,
                },
                { 
                    backgroundColor : [],
                    data: [],
                    label: "水稻02",
                    borderColor: "#4796F5",
                    fill: true,
                },
                {
                    type: 'line',
                    data: [],
                    label: 'spec控貨',
                    borderColor: "#76B1F9",
                    backgroundColor : "rgba(0, 0, 225, 0.2)",
                    pointStyle: 'star',
                    pointRadius: 6,
                    fill: true,
                }
              ]
            },
          });
          //var dt = new Date();
          var color01 = 'rgba(255, 0, 0, 0.2)';
          var color02 = 'rgba(0, 255, 0, 0.2)';
          for(var i=0; i<Object.keys(json).length - 1; i++)
          {
            var data = JSON.parse(json[i]['humidity']);
            var create_time = json[i]['created_at'];
            $.each(data,function(index, val){
                if(index%2 != 0)
                {
                    myChart.data.datasets[index].backgroundColor.push(color01);
                }
                else
                {
                    myChart.data.datasets[index].backgroundColor.push(color02);
                }
                myChart.data.datasets[index].data.push(val);
                myChart.data.datasets[2].data.push(parseInt(data[0]+data[1])/4);

            });
            myChart.data.labels.push(i);
          }
          myChart.update();
        }
    });
    setTimeout('FarmChart()', 60 * 60 * 1000);
}

function FarmTemperatureChart() {
    $.ajax({
        url: 'api/getFarm',
        method: 'GET',
        dataType: 'json',
        success: function(json){
          var ctx = document.getElementById('FarmTemperature-line-chart').getContext('2d');
          var myChart = new Chart(ctx, {
            type: 'line',
            data: {
              datasets: [{ 
                    backgroundColor : 'blue',
                    data: [],
                    label: "水稻01",
                    borderColor: 'blue',
                    pointRadius: 10,
                    pointBackgroundColor: '#fff',
                    fill: false,
                },
                { 
                    backgroundColor : 'red',
                    data: [],
                    label: "水稻02",
                    borderColor: 'red',
                    pointRadius: 10,
                    pointBackgroundColor: '#fff',
                    fill: false
                },
              ]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            suggestedMin: -10,
                            suggestedMax: 40
                        }
                    }]
                },
                title: {
                    display: true,
                    text: '溫度'
                }
            }
          });
          for(var i=0; i<Object.keys(json).length - 1; i++)
          {
            var data = JSON.parse(json[i]['temperature']);
            $.each(data,function(index, val){
                myChart.data.datasets[index].data.push(val);
            });
            myChart.data.labels.push(i);
          }
          myChart.update();
        }
    });
    setTimeout('FarmTemperatureChart()', 60 * 60 * 1000);
}

function FarmWaterLevelChart() {
    $.ajax({
        url: 'api/getFarm',
        method: 'GET',
        dataType: 'json',
        success: function(json){
          var ctx = document.getElementById('FarmWaterLevel-line-chart').getContext('2d');
          var myChart = new Chart(ctx, {
            type: 'scatter',
            data: {
              datasets: [{ 
                    backgroundColor : 'blue',
                    data: [],
                    label: "水稻01",
                    borderColor: 'purple',
                    pointStyle: 'triangle',
                    pointBackgroundColor: '#fff',
                    pointRadius: 10,
                    fill: false,
                },
                { 
                    backgroundColor : 'red',
                    data: [],
                    label: "水稻02",
                    borderColor: 'green',
                    pointStyle: 'star',
                    pointBackgroundColor: '#fff',
                    pointRadius: 10,
                    fill: false
                },
              ]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            suggestedMin: -10,
                            suggestedMax: 100
                        }
                    }]
                },
                title: {
                    display: true,
                    text: 'Water Level'
                }
            }
          });
          for(var i=0; i<Object.keys(json).length - 1; i++)
          {
            var data = JSON.parse(json[i]['water_level']);
            $.each(data,function(index, val){
                myChart.data.datasets[index].data.push({'x':i, 'y':val});
            });
            myChart.data.labels.push(i);
          }
          myChart.update();
        }
    });
    setTimeout('FarmWaterLevelChart()', 60 * 60 * 1000);
}

function FarmFlowChart() {
    $.ajax({
        url: 'api/getFarm',
        method: 'GET',
        dataType: 'json',
        success: function(json){
          var ctx = document.getElementById('FarmFlow-chart').getContext('2d');
          var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
              datasets: [{ 
                    backgroundColor : '#F1C40F',
                    data: [],
                    label: "水稻01",
                    borderColor: '#F1C40F',
                    pointStyle: 'triangle',
                    pointRadius: 6,
                    fill: false,
                },
                { 
                    backgroundColor : '#FC843F',
                    data: [],
                    label: "水稻02",
                    borderColor: '#FC843F',
                    pointStyle: 'triangle',
                    pointRadius: 6,
                    fill: false,
                },
              ]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            suggestedMin: 0,
                            suggestedMax: 10000
                        }
                    }]
                },
                title: {
                    display: true,
                    text: 'Flow'
                }
            }
          });
          for(var i=0; i<Object.keys(json).length - 1; i++)
          {
            var data = JSON.parse(json[i]['flow']);
            $.each(data,function(index, val){
                myChart.data.datasets[index].data.push({'x':i, 'y':val});
            });
            myChart.data.labels.push(i);
          }
          myChart.update();
        }
    });
    setTimeout('FarmWaterLevelChart()', 60 * 60 * 1000);
}
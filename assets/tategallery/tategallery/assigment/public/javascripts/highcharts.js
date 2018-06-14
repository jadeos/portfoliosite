//renders 2 highhcarts in the index.js file.
$(function () {
    //grab the values of each class from the jade template
    var element = document.getElementsByClassName('birth');
    var elements = document.getElementsByClassName('artists');
    var work= document.getElementsByClassName('work');

    //needed arrays for looping and assigning variables
    var n = [];
    var years = [];
    var names = [];
    var stored = [];
    var counter = 1;
    var works = [];
    var final =[];

    //loop through the artists and their total works
    for(var x =0;x<elements.length;x++){
        //in the artist assign each artist to a new array.
        n[x] = elements[x].name;
        works[x]= work[x].name;
        //push it on to the final array to display in the chart.
        final.push({
            name: n[x],
            y: parseFloat(works[x])
        });
    }

    //loop through each birth year for an artist
    for (var i = 0; i < elements.length; i++) {
        //assign to an array
        names[i] = elements[i].name;
        //loop through the artist
        for (var x = 0; x < element.length; x++) {
            //assign to an array
            years[x] = element[x].name;
            //eliminate duplicated years
            if (years[x] == years[x + 1]) {
                years[x] = years[x + 1];
                //add a value to the counter
                counter += 1;
            }
            //push the counter to the stored array.
            stored.push(counter);
        }
    }
    years.sort(function (a, b) {
        return a - b
    });
    names.sort(function (a, b) {
        return a - b
    });


    //line chart to render the birth year for each artists
    Highcharts.chart('containers', {
        chart: {
            backgroundColor: 'lightgrey'
        },
        title: {
            text: 'Number of Artist Born '
        },

        subtitle: {
            text: 'per given year'
        },

        yAxis: {
            title: {
                text: 'Number of Artists'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },

        plotOptions: {
            series: {
                pointStart: 1728
            }
        },

        series: [{
            name: 'Artist',
            data: stored
        }
        ]

    });

    //second chart renders a pie chart with the percentage of the total works of each artist.
    $('#container2').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie',
            backgroundColor: 'lightgrey'
        },
        title: {
            text: 'Percentage of total works sold by artist'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b> <br/> <a> Click here for more information on the current artist. </a>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: "Total Works",
            colorByPoint: true,
            data: final,
            point: {
                events: {
                    click: function (event){
                        redirect_to_name(this.name);



                    }

                }
            }
        }]
    });
});
//end of function
function redirect_to_name(name){
    var a =  document.createElement('a');
    var str = name;
    //if string contains white space

        var exp = str.split(" ");
        var n = exp[0] + "&" + exp[1];
    window.location.href = "/artists/#"+name;
    //alert(this);
}








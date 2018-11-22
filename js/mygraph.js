var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: [globalVariable.date6, globalVariable.date5, globalVariable.date4, globalVariable.date3, globalVariable.date2, globalVariable.date1],
        datasets: [{
            label: globalVariable.label,
            data: [globalVariable.sold6, globalVariable.sold5, globalVariable.sold4, globalVariable.sold3, globalVariable.sold2, globalVariable.sold1],
            backgroundColor: [
                'rgba(100,216,107, 0.2)',
            ],
            borderColor: [
                'rgba(100,216,107,1)',
            ],
            borderWidth: 2
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});

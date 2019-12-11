
google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawMultSeries);

function drawMultSeries() {
      var data = new google.visualization.DataTable();
      data.addColumn('timeofday', 'Time of Day');
      data.addColumn('number', 'Số vé bán ra');
     

      data.addRows([
        [{v: [6, 0, 0], f: 'Tháng 1'}, 200],
        [{v: [7, 0, 0], f: 'Tháng 2'}, 100],
        [{v: [8, 0, 0], f: 'Tháng 3'}, 500],
        [{v: [9, 0, 0], f: 'Tháng 4'}, 400],
        [{v: [10, 0, 0], f:'Tháng 5'}, 400],
        [{v: [11, 0, 0], f: 'Tháng 6'}, 450],
        [{v: [12, 0, 0], f: 'Tháng 7'}, 300],
        [{v: [13, 0, 0], f: 'Tháng 8'}, 250],
        [{v: [14, 0, 0], f: 'Tháng 9'}, 400],
        [{v: [15, 0, 0], f: 'Tháng 10'}, 350],
        [{v: [16, 0, 0], f: 'Tháng 11'}, 300],
        [{v: [17, 0, 0], f: 'Tháng 12'}, 300],
      ]);

      var options = {
        title: 'Số vé bán ra theo từng tháng',
        hAxis: {
        title: 'Month of year',
        ticks: [{v: [6, 0, 0], f:'Jan'},{v: [7, 0, 0], f:'Fer'},{v: [8, 0, 0], f:'Mar'},{v: [9, 0, 0], f:'Apr'},{v: [10, 0, 0], f:'May'},{v: [11, 0, 0], f:'Jun'},{v: [12, 0, 0], f:'July'},{v: [13, 0, 0], f:'Aug'},{v: [14, 0, 0], f:'Sep'},{v: [15, 0, 0], f:'Oct'},{v: [16, 0, 0], f:'Nov'},{v: [17, 0, 0], f:'Dec'}], // <------- This does the trick
      },
       
        colors: ['rgb(229, 91, 0)'],
      };

      var chart = new google.visualization.ColumnChart(
        document.getElementById('chart-all-ticket'));

      chart.draw(data, options);
    }
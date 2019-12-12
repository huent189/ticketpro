
google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawMultSeries);

function drawMultSeries() {
      var data = new google.visualization.DataTable();
      data.addColumn('timeofday', 'Time of Day');
      data.addColumn('number', 'Số tiền bán vé theo các tháng');
     

      data.addRows([
        [{v: [6, 0, 0], f: 'Tháng 1'}, 40000],
        [{v: [7, 0, 0], f: 'Tháng 2'}, 109999],
        [{v: [8, 0, 0], f: 'Tháng 3'}, 50000],
        [{v: [9, 0, 0], f: 'Tháng 4'}, 70000],
        [{v: [10, 0, 0], f:'Tháng 5'}, 40000],
        [{v: [11, 0, 0], f: 'Tháng 6'}, 45000],
        [{v: [12, 0, 0], f: 'Tháng 7'}, 59090],
        [{v: [13, 0, 0], f: 'Tháng 8'}, 59090],
        [{v: [14, 0, 0], f: 'Tháng 9'}, 59090],
        [{v: [15, 0, 0], f: 'Tháng 10'}, 59090],
        [{v: [16, 0, 0], f: 'Tháng 11'}, 59090],
        [{v: [17, 0, 0], f: 'Tháng 12'}, 59090],
      ]);

      var options = {
        title: 'Số tiền bán vé theo các tháng',
        hAxis: {
        title: 'Month of year',
        ticks: [{v: [6, 0, 0], f:'Jan'},{v: [7, 0, 0], f:'Fer'},{v: [8, 0, 0], f:'Mar'},{v: [9, 0, 0], f:'Apr'},{v: [10, 0, 0], f:'May'},{v: [11, 0, 0], f:'Jun'},{v: [12, 0, 0], f:'July'},{v: [13, 0, 0], f:'Aug'},{v: [14, 0, 0], f:'Sep'},{v: [15, 0, 0], f:'Oct'},{v: [16, 0, 0], f:'Nov'},{v: [17, 0, 0], f:'Dec'}], // <------- This does the trick
      }
      };

      var chart = new google.visualization.ColumnChart(
        document.getElementById('chart-all-total'));

      chart.draw(data, options);
    }
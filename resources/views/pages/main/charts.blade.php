<style>
section h2 {
  -webkit-user-select: none; 
  -ms-user-select: none; 
  user-select: none;
  color: #fff;
  text-shadow: -2px 0 #000, 0 2px #000, 
  1px 0 #000, 0 -1px #000;
  text-align: center;
  padding: 3rem;
  margin: 0;
}
</style>

<script src="https://www.gstatic.com/charts/loader.js"></script>
<script src="https://www.google.com/jsapi"></script>

<h2 style="background: #092834;">Column</h2>
<div id="column" style="background: #1A3E4C; border: 5px solid #000; box-sizing: border-box; width: 50%; height: auto; margin: 0 auto;"></div>

<script>
google.charts.load('current', {packages: ['corechart']});     
</script>
<script>
function drawChart() {
  var data = google.visualization.arrayToDataTable([
    [
      'Year', 
      'Asia', { role: 'annotation'}, 
      'Europe', { role: 'annotation'}
    ],
    ['2012',  900,'900',      390, '390'],
    ['2013',  1000,'1000',      400,'400'],
    ['2014',  1170,'1170',      440,'440'],
    ['2015',  1250,'1250',       480,'480'],
    ['2016',  1530,'1530',      540,'540']
  ]);

  var options = {title: 'Population (in millions)'};  

  var chart = new google.visualization
  .ColumnChart(document.getElementById('column'));
  chart.draw(data, options);
}
google.charts.setOnLoadCallback(drawChart);
</script>

<!-------------------->
<h2 style="background: #D61A46;">Bar</h2>
<section style="background: #7B0F28;">
  <row>
    <column style="height: 400px">
      <div id="bar0" style="box-sizing: border-box; background: #D61A46; border: 5px solid #000; width: 100%; height: 100%; margin: 0 auto;"></div>
    </column>
    <column style="height: 400px">
      <div id="bar1" style="box-sizing: border-box; background: #D61A46; border: 5px solid #000; width: 100%; height: 100%; margin: 0 auto;"></div>
    </column>
  </row>
</section>

<script>
function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['Year', 'Asia'],
    ['2012',  900],
    ['2013',  1000],
    ['2014',  1170],
    ['2015',  1250],
    ['2016',  1530]
  ]);

  var options = {
    title: 'Population (in millions)'
  }; 

  var chart = new google.visualization
  .BarChart(document.getElementById('bar0'));
  chart.draw(data, options);
}
google.charts.setOnLoadCallback(drawChart);
</script>

<script>
function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['Year', 'Asia', 'Europe'],
    ['2012',  900,      390],
    ['2013',  1000,      400],
    ['2014',  1170,      440],
    ['2015',  1250,       480],
    ['2016',  1530,      540]
  ]);

  var options = {
    title: 'Population (in millions)'
  };  

  var chart = new google.visualization
  .BarChart(document.getElementById('bar1'));
  chart.draw(data, options);
}
google.charts.setOnLoadCallback(drawChart);
</script>

<!-------------------->
<h2 style="background: #FB9902;">Bubble</h2>
<div style="background: #FDC168;">
  <div id="bubble" style="background: #FDC168; border: 5px solid #000; box-sizing: border-box; width: 50%; height: auto; margin: 0 auto;"></div>
</div>

<script>
function drawChart() {
  var data = new google.visualization.DataTable();
  data.addColumn('string', 'Id');
  data.addColumn('number', 'Age');
  data.addColumn('number', 'Weight');
  data.addRows([
    [ 'Robert', 8,      12],
    [ 'Mohan', 4,      5.5],
    [ 'Ramesh', 11,     14],
    [ 'Julie', 4,      5],
    [ 'Sohan', 3,      3.5],
    [ 'Karim', 6.5,    7]
  ]);

  var options = {
    'title': 'Age vs Weight', 
  };

  var chart = new google.visualization
  .BubbleChart(document.getElementById('bubble'));
  chart.draw(data, options);
}
google.charts.setOnLoadCallback(drawChart);
</script>

<!-------------------->
<h2 style="background: #29157E;">Line</h2>
<div style="background: #4424D6;">
  <div id="line" style="background: #29157E; border: 5px solid #000; box-sizing: border-box; width: 50%; height: auto; margin: 0 auto;"></div>
</div>

<script>
function drawChart() {
  var data = new google.visualization.DataTable();
  data.addColumn('string', 'Month');
  data.addColumn('number', 'Tokyo');
  data.addColumn('number', 'New York');
  data.addColumn('number', 'Berlin');
  data.addColumn('number', 'London');
  data.addRows([
    ['Jan',  7.0, -0.2, -0.9, 3.9],
    ['Feb',  6.9, 0.8, 0.6, 4.2],
    ['Mar',  9.5,  5.7, 3.5, 5.7],
    ['Apr',  14.5, 11.3, 8.4, 8.5],
    ['May',  18.2, 17.0, 13.5, 11.9],
    ['Jun',  21.5, 22.0, 17.0, 15.2],

    ['Jul',  25.2, 24.8, 18.6, 17.0],
    ['Aug',  26.5, 24.1, 17.9, 16.6],
    ['Sep',  23.3, 20.1, 14.3, 14.2],
    ['Oct',  18.3, 14.1, 9.0, 10.3],
    ['Nov',  13.9,  8.6, 3.9, 6.6],
    ['Dec',  9.6,  2.5,  1.0, 4.8]
  ]);

  var options = {
    'title': 'Average Temperatures of Cities',
    hAxis: {
      title: 'Month'
    },
    vAxis: {
      title: 'Temperature'
    },   
    pointsVisible: true	  
  };

  var chart = new google.visualization
  .LineChart(document.getElementById('line'));
  chart.draw(data, options);
}
google.charts.setOnLoadCallback(drawChart);
</script>

<!-------------------->
<h2 style="background: #496D1D;">Scatter</h2>
<div style="background: #7FBD32;">
  <div id="scatter" style="background: #496D1D; border: 5px solid #000; box-sizing: border-box; width: 50%; height: auto; margin: 0 auto;"></div>
</div>

<script>
function drawChart() {
  var data = new google.visualization.DataTable();
  data.addColumn('number', 'Age');
  data.addColumn('number', 'Weight');
  data.addRows([
    [ 8,      12],
    [ 4,      5.5],
    [ 11,     14],
    [ 4,      5],
    [ 3,      3.5],
    [ 6.5,    7]
  ]);

  var options = {
    'title': 'Age vs Weight',
    'legend': 'none'
  };

  var chart = new google.visualization
  .ScatterChart(document.getElementById('scatter'));
  chart.draw(data, options);
}
google.charts.setOnLoadCallback(drawChart);
</script>

<!-------------------->
<h2 style="background: #091034;">Trendlines</h2>
<div style="background: #8C78E8;">
  <div id="trendlines" style="background: #091034; border: 5px solid #000; box-sizing: border-box; width: 50%; height: auto; margin: auto;"></div>
</div>

<script>
function drawChart() {
  var data = new google.visualization.DataTable();
  data.addColumn('number', 'Age');
  data.addColumn('number', 'Weight');
  data.addRows([
    [ 8,      12],
    [ 4,      5.5],
    [ 11,     14],
    [ 4,      5],
    [ 3,      3.5],
    [ 6.5,    7]
  ]);

  var options = {
    'title':'Age vs Weight',
    'legend': 'none',
    trendlines: { 0: {type: 'exponential'} }   
  };

  var chart = new google.visualization
  .ScatterChart(document.getElementById('trendlines'));
  chart.draw(data, options);
}
google.charts.setOnLoadCallback(drawChart);
</script>

<!-------------------->
<h2 style="background: #23483C;">Area</h2>
<div style="background: #448D76;">
  <div id="area" style="background: #23483C; border: 5px solid #000; box-sizing: border-box; width: 50%; height: auto; margin: 0 auto;"></div>
</div>

<script>
function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['Year', 'Sales', 'Expenses'],
    ['2013',  1000,      400],
    ['2014',  1170,      460],
    ['2015',  660,       1120],
    ['2016',  1030,      540]
  ]);

  var options = {
    title: 'Company Performance',
    hAxis: {
      title: 'Year', 
      titleTextStyle: { color: '#333' } },
    vAxis: { minValue: 0 }
  };  

  var chart = 
      new google.visualization
  .AreaChart(document.getElementById ('area'));
  chart.draw(data, options);
}
google.charts.setOnLoadCallback(drawChart);
</script>

<!-------------------->
<h2 style="background: #510639;">Stepped</h2>
<div style="background: #AE0D7A;">
  <div id="stepped" style="background: #510639; border: 5px solid #000; box-sizing: border-box; width: 50%; height: auto; margin: 0 auto;"></div>
</div>

<script>
function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['Director (Year)',  'Rotten Tomatoes', 'IMDB'],
    ['Alfred Hitchcock (1935)', 8.4,         7.9],
    ['Ralph Thomas (1959)',     6.9,         6.5],
    ['Don Sharp (1978)',        6.5,         6.4],
    ['James Hawes (2008)',      4.4,         6.2]
  ]);

  var options = {
    title: 'The decline of \'The 39 Steps\'',
    vAxis: {title: 'Accumulated Rating'}      
  };

  var chart = new google.visualization
  .SteppedAreaChart(document.getElementById('stepped'));
  chart.draw(data, options);
}
google.charts.setOnLoadCallback(drawChart);
</script>

<!-------------------->
<h2 style="background: #FCBA12;">Pie</h2>
<div style="background: #FCBA12;">
  <row>
    <column>
      <div id="pie0" style="background: #FCBA12; border: 5px solid #000; box-sizing: border-box; height:100%;"></div>
    </column>
    <column>
      <div id="pie1" style="background: #FCBA12; border: 5px solid #000; box-sizing: border-box; height:100%;"></div>
    </column>
    <column>
      <div id="pie2" style="background: #FCBA12; border: 5px solid #000; box-sizing: border-box; height:100%;"></div>
    </column>
  </row>
</div>

<script>
function drawChart() {
  var data = new google.visualization.DataTable();
  data.addColumn('string', 'Browser');
  data.addColumn('number', 'Percentage');
  data.addRows([
    ['Firefox', 45.0],
    ['IE', 26.8],
    ['Chrome', 12.8],
    ['Safari', 8.5],
    ['Opera', 6.2],
    ['Others', 0.7]
  ]);

  var options = {
    'title': 'Browser market shares at a specific website, 2014', 
  };

  var chart = 
      new google.visualization
  .PieChart(document.getElementById('pie0'));
  chart.draw(data, options);
}
google.charts.setOnLoadCallback(drawChart);
</script>

<script>
function drawChart() {
  var data = new google.visualization.DataTable();
  data.addColumn('string', 'Browser');
  data.addColumn('number', 'Percentage');
  data.addRows([
    ['Firefox', 45.0],
    ['IE', 26.8],
    ['Chrome', 12.8],
    ['Safari', 8.5],
    ['Opera', 6.2],
    ['Others', 0.7]
  ]);

  var options = {
    'title': 'Browser market shares at a specific website, 2014',
    pieHole: 0.4
  };

  var chart = new google.visualization
  .PieChart(document.getElementById('pie1'));
  chart.draw(data, options);
}
google.charts.setOnLoadCallback(drawChart);
</script>

<script>
function drawChart() {
  var data = new google.visualization.DataTable();
  data.addColumn('string', 'Browser');
  data.addColumn('number', 'Percentage');
  data.addRows([
    ['Firefox', 45.0],
    ['IE', 26.8],
    ['Chrome', 12.8],
    ['Safari', 8.5],
    ['Opera', 6.2],
    ['Others', 0.7]
  ]);

  var options = {
    'title': 'Browser market shares at a specific website, 2014',
    is3D: true
  };

  var chart = new google.visualization
  .PieChart(document.getElementById('pie2'));
  chart.draw(data, options);
}
google.charts.setOnLoadCallback(drawChart);
</script>

<!-------------------->
<h2 style="background: #305A30;">Organization</h2>
<div id="organization" style="background: #559E54; border: 5px solid #000; box-sizing: border-box; width: 50%; height: auto; margin: 0 auto;"></div>

<script>
google.charts.load('current', {packages: ['orgchart']});     
</script>
<script>
function drawChart() {
  var data = new google.visualization.DataTable();   
  data.addColumn('string', 'Name');
  data.addColumn('string', 'Manager');
  data.addColumn('string', 'ToolTip');

  data.addRows([
    [
      {  
        v: 'Robert', 
        f: `Robert<div style="color:red; font-style:italic">
President</div>`
      },
      '', 
      'President'
    ],
    [
      {
        v: 'Jim', 
        f: `Jim<div style="color:red; font-style:italic">
Vice President</div>`
      },
      'Robert', 
      'Vice President'
    ],
    ['Alice', 'Robert', ''],
    ['Bob', 'Jim', 'Bob Sponge'],
    ['Carol', 'Bob', '']
  ]);			

  var options = {allowHtml:true};

  var chart = new google.visualization
  .OrgChart(document.getElementById('organization'));
  chart.draw(data, options);
}
google.charts.setOnLoadCallback(drawChart);
</script>

<!-------------------->
<h2 style="background: #0A2299;">Calendar</h2> 
<div id="calendar" style="background: #678FFE; border: 5px solid #000; box-sizing: border-box; width: 50%; height: 400px; margin: 0 auto;"></div>

<script>
google.charts.load('current', {packages: ['corechart','calendar']});     
</script>
<script>
function drawChart() {
  var data = new google.visualization.DataTable();
  data.addColumn({ type: 'date', id: 'Date' });
  data.addColumn({ type: 'number', id: 'Students' });
  data.addRows([
    [ new Date(2012, 3, 13), 50 ],
    [ new Date(2012, 3, 14), 50 ],
    [ new Date(2012, 3, 15), 49 ],
    [ new Date(2012, 3, 16), 48 ],
    [ new Date(2012, 3, 17), 50 ],

    [ new Date(2012, 4, 1), 50 ],
    [ new Date(2012, 4, 2), 50 ],
    [ new Date(2012, 4, 3), 49 ],
    [ new Date(2012, 4, 4), 48 ],
    [ new Date(2012, 4, 5), 50 ],

    [ new Date(2012, 5, 4), 40 ],
    [ new Date(2012, 5, 5), 50 ],
    [ new Date(2012, 5, 10), 48 ],
    [ new Date(2012, 5, 11), 50 ],
    [ new Date(2012, 5, 12), 42 ],
    [ new Date(2012, 5, 20), 45 ],
    [ new Date(2012, 5, 21), 46 ],
    [ new Date(2012, 5, 29), 45 ],

    [ new Date(2013, 3, 13), 40 ],
    [ new Date(2013, 3, 14), 40 ],
    [ new Date(2013, 3, 15), 39 ],
    [ new Date(2013, 3, 16), 38 ],
    [ new Date(2013, 3, 17), 40 ],

    [ new Date(2013, 4, 1), 40 ],
    [ new Date(2013, 4, 2), 40 ],
    [ new Date(2013, 4, 3), 49 ],
    [ new Date(2013, 4, 4), 48 ],
    [ new Date(2013, 4, 5), 40 ],

    [ new Date(2013, 5, 4), 40 ],
    [ new Date(2013, 5, 5), 50 ],
    [ new Date(2013, 5, 12), 48 ],
    [ new Date(2013, 5, 13), 40 ],
    [ new Date(2013, 5, 19), 32 ],
    [ new Date(2013, 5, 23), 45 ],
    [ new Date(2013, 5, 24), 36 ],
    [ new Date(2013, 5, 30), 45 ]
  ]);

  var options = {
    'title': 'Attendence', 
    calendar: {         
      yearLabel: {
        color: '#000',
      },             
      yearLabel: {
        color: '#000',
      }, 
      monthLabel: {
        color: '#000',
      },
      monthOutlineColor: {
        stroke: 'red',
        strokeOpacity: 0.8,
        strokeWidth: 2
      },
      unusedMonthOutlineColor: {
        stroke: 'blue',
        strokeOpacity: 0.8,
        strokeWidth: 1
      },
      underMonthSpace: 16,	 
    }
  };

  var chart = new google.visualization
  .Calendar(document.getElementById('calendar'));
  chart.draw(data, options);
}
google.charts.setOnLoadCallback(drawChart);
</script>
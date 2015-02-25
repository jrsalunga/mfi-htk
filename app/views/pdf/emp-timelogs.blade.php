<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>{{ $employee->lastname }}, {{ $employee->firstname }}</title>


<style type="text/css">


.container {
	width: 50%;
	border: 0px solid #cccccc;

}

.profile {
	height: 100px;
	border: 0px solid #cccccc;
}

#content {
  border: 1px solid #000;
}



</style>
<style>
    @page { 
      margin: 180px 50px;
    }
    #header { 
      position: fixed; 
      left: 0px; 
      top: -180px; 
      right: 0px; 
      height: 150px; 
      background-color: orange; 
      text-align: center;
      
    }
    #footer { 
      position: fixed; 
      left: 0px; 
      bottom: -180px; 
      right: 0px; 
      height: 150px; 
      background-color: lightblue; 
    }
    #footer .page:after { 
      content: counter(page); 
    }
  </style>
<body>
</head>

<body>


<div id="header">
    <h1>Modular Fusion</h1>
  </div>
  <div id="footer">
    <p class="page"><a href="ibmphp.blogspot.com"></a></p>
  </div>
  <div id="content">
    <div class="container">
    <div class="profile">
      <h3>{{ $employee->lastname }}, {{ $employee->firstname }}</h3>
    </div>
    <table>
            <thead>
                <tr>
                  <th>Date</th>
                  <th>Time In</th>
                  <th>Time Out</th>
                </tr>
            </thead>
            <tbody class="tk-tb">
                @if (isset($timelogs))
                    @foreach($timelogs as $timelog)
                  <tr>
                      <td><em>{{ $timelog['day'] }} </em> {{ date('F j, Y', strtotime($timelog['date'])) }}</td>
                        <td>{{ $timelog['ti'] }}</td>
                        <td>{{ $timelog['to'] }}</td>                 
                    </tr>
                    @endforeach
                @else
                   
                @endif
            </tbody>
        </table>
  </div>  
  </div>
<!--

	<div class="container">
		<div class="profile">
			<h3>{{ $employee->lastname }}, {{ $employee->firstname }}</h3>
		</div>
		<table>
            <thead>
              	<tr>
	                <th>Date</th>
	                <th>Time In</th>
	                <th>Time Out</th>
              	</tr>
            </thead>
            <tbody class="tk-tb">
                @if (isset($timelogs))
                    @foreach($timelogs as $timelog)
                	<tr>
                    	<td><em>{{ $timelog['day'] }} </em> {{ date('F j, Y', strtotime($timelog['date'])) }}</td>
                      	<td>{{ $timelog['ti'] }}</td>
                      	<td>{{ $timelog['to'] }}</td>                 
                    </tr>
                    @endforeach
                @else
                   
                @endif
            </tbody>
        </table>
	</div>
-->
</body>
</html>
@extends('layouts.app')

@section('pagespecificstyles')

<style>
	#piechart {
		width: 1200px;
		height: 700px;
		position: absolute;
		left: 50%;
		top:20%;
		transform: translateX(-50%) scale(1);
	}

	path.slice {
		stroke-width: 2px;
	}

	polyline {
		opacity: .3;
		stroke: black;
		stroke-width: 2px;
		fill: none;
	}
</style>

@stop


@section('content')

<div class="container">
	<div class="d-flex flex-wrap justify-content-between col-8 offset-2 col-md-12 offset-md-0 col-sm-12 offset-sm-0 ">

		<div id="dataButton1"
			style="user-select: none;padding:5px;border:1px solid #555;border-radius:5px;cursor:pointer;transition:1s;box-shadow:3px 5px 10px rgba(0,0,0,0.4);"
			onclick="changeData(1)">Companies - Employees</div>
		<div id="dataButton2"
			style="user-select: none;padding:5px;border:1px solid #555;border-radius:5px;cursor:pointer;transition:1s;"
			onclick="changeData(2)">Employees - Qualificaitons</div>
		<div id="dataButton3"
			style="user-select: none;padding:5px;border:1px solid #555;border-radius:5px;cursor:pointer;transition:1s;"
			onclick="changeData(3)">Qualifications - Employees</div>

	</div>
</div>

@section('pagespecificscripts')
<script src="https://d3js.org/d3.v3.min.js"></script>
<script>
	var svg = d3.select("body")
	.append("svg")
	.attr("id", "piechart")
	.append("g")

svg.append("g")
	.attr("class", "slices");
svg.append("g")
	.attr("class", "labels");
svg.append("g")
	.attr("class", "lines");

var width = 1200,
height = 600,
radius = Math.min(width, height) / 2;





var pie = d3.layout.pie()
	.sort(null)
	.value(function(d) {
		return d.value;
	});

var arc = d3.svg.arc()
	.outerRadius(radius * 0.8)
	.innerRadius(radius * 0.4);

var outerArc = d3.svg.arc()
	.innerRadius(radius * 0.9)
	.outerRadius(radius * 0.9);

svg.attr("transform", "translate(" + width / 2 + "," + height / 2 + ")");

var key = function(d){ return d.data.label; };

var companies = {!! json_encode($companies, JSON_HEX_TAG) !!};
var employeesCount = {!! json_encode($employeeCount, JSON_HEX_TAG) !!};
var employees = {!! json_encode($employees, JSON_HEX_TAG) !!};
var qualificationCount = {!! json_encode($qualificationCount, JSON_HEX_TAG) !!};
var qualifications = {!! json_encode($qualifications, JSON_HEX_TAG) !!};
var employeeCount = {!! json_encode($employeeQualificationCount, JSON_HEX_TAG) !!};


var color = d3.scale.ordinal()
	
	.range(["#98abc5", "#8a89a6", "#7b6888", "#6b486b", "#a05d56", "#d0743c", "#ff8c00","#98abc5", "#8a89a6", "#7b6888", "#6b486b", "#a05d56", "#d0743c", "#ff8c00","#98abc5", "#8a89a6", "#7b6888", "#6b486b", "#a05d56", "#d0743c", "#ff8c00","#98abc5", "#8a89a6", "#7b6888", "#6b486b", "#a05d56", "#d0743c", "#ff8c00"]);

function companyData(){

	var data = [];
	for (let i = 0; i < companies.length; i++) {
		data.push({'label':companies[i]['name'] + " - " +  employeesCount[i]['count'], 'value':employeesCount[i]['count']})
		
	}
	return data;
}

function startData(){

	var data = [];
	for (let i = 0; i < companies.length; i++) {
		data.push({'label':companies[i]['name'] + " - " +  employeesCount[i]['count'], 'value':5})
		
	}
	return data;
}

function qualificationData(){

	var data = [];
	for (let i = 0; i < employees.length; i++) {
		data.push({'label':employees[i]['first_name'] + " " + employees[i]['last_name'] + " - " +  qualificationCount[i]['count'], 'value':qualificationCount[i]['count']})
		
	}
	return data;
}

function startqualificationData(){

	var data = [];
	for (let i = 0; i < employees.length; i++) {
		data.push({'label':employees[i]['first_name'] + " " + employees[i]['last_name']  + " - " +  qualificationCount[i]['count'], 'value':5})
		
	}
	return data;
}


function employeeData(){

	var data = [];
	for (let i = 0; i < qualifications.length; i++) {
		data.push({'label':qualifications[i]['title'] + " - " +  employeeCount[i]['count'], 'value':employeeCount[i]['count']})
		
	}
	return data;
}

function startemployeeData(){

	var data = [];
	for (let i = 0; i < qualifications.length; i++) {
		data.push({'label':qualifications[i]['title'] + " - " +  employeeCount[i]['count'], 'value':5})
		
	}
	return data;
}

function changeData(value){
	if(value == 1){
    	change(startData());
		
		document.getElementById("dataButton1").style.boxShadow = "3px 5px 10px rgba(0,0,0,0.4)";
		document.getElementById("dataButton2").style.boxShadow = "3px 5px 10px rgba(0,0,0,0)";
		document.getElementById("dataButton3").style.boxShadow = "3px 5px 10px rgba(0,0,0,0)";

		setTimeout(function(){
			change(companyData());
		}, 500)

	} else if(value == 2){
		change(startqualificationData());
		
		document.getElementById("dataButton2").style.boxShadow = "3px 5px 10px rgba(0,0,0,0.4)";
		document.getElementById("dataButton1").style.boxShadow = "3px 5px 10px rgba(0,0,0,0)";
		document.getElementById("dataButton3").style.boxShadow = "3px 5px 10px rgba(0,0,0,0)";

		setTimeout(function(){
			change(qualificationData());
		}, 500)
	} else if(value == 3){
		change(startemployeeData());
		
		document.getElementById("dataButton3").style.boxShadow = "3px 5px 10px rgba(0,0,0,0.4)";
		document.getElementById("dataButton2").style.boxShadow = "3px 5px 10px rgba(0,0,0,0)";
		document.getElementById("dataButton1").style.boxShadow = "3px 5px 10px rgba(0,0,0,0)";

		setTimeout(function(){
			change(employeeData());
		}, 500)
	}
}
change(startData());

setTimeout(function(){
	change(companyData());
}, 500)



function change(data) {

	/* ------- PIE SLICES -------*/
	var slice = svg.select(".slices").selectAll("path.slice")
		.data(pie(data), key);

	slice.enter()
		.insert("path")
		.style("fill", function(d) { return color(d.data.label); })
		.attr("class", "slice");

	slice		
		.transition().duration(1000)
		.attrTween("d", function(d) {
			this._current = this._current || d;
			var interpolate = d3.interpolate(this._current, d);
			this._current = interpolate(0);
			return function(t) {
				return arc(interpolate(t));
			};
		})

	slice.exit()
		.remove();

	/* ------- TEXT LABELS -------*/

	var text = svg.select(".labels").selectAll("text")
		.data(pie(data), key);

	text.enter()
		.append("text")
		.style("font-size", "18px")
		.attr("dy", ".5em")
		.text(function(d) {
			return d.data.label;
		});
	
	function midAngle(d){
		return d.startAngle + (d.endAngle - d.startAngle)/2;
	}

	text.transition().duration(1000)
		.attrTween("transform", function(d) {
			this._current = this._current || d;
			var interpolate = d3.interpolate(this._current, d);
			this._current = interpolate(0);
			return function(t) {
				var d2 = interpolate(t);
				var pos = outerArc.centroid(d2);
				pos[0] = radius * (midAngle(d2) < Math.PI ? 1 : -1);
				return "translate("+ pos +")";
			};
		})
		.styleTween("text-anchor", function(d){
			this._current = this._current || d;
			var interpolate = d3.interpolate(this._current, d);
			this._current = interpolate(0);
			return function(t) {
				var d2 = interpolate(t);
				return midAngle(d2) < Math.PI ? "start":"end";
			};
		});

	text.exit()
		.remove();

	/* ------- SLICE TO TEXT POLYLINES -------*/

	var polyline = svg.select(".lines").selectAll("polyline")
		.data(pie(data), key);
	
	polyline.enter()
		.append("polyline");

	polyline.transition().duration(1000)
		.attrTween("points", function(d){
			this._current = this._current || d;
			var interpolate = d3.interpolate(this._current, d);
			this._current = interpolate(0);
			return function(t) {
				var d2 = interpolate(t);
				var pos = outerArc.centroid(d2);
				pos[0] = radius * 0.95 * (midAngle(d2) < Math.PI ? 1 : -1);
				return [arc.centroid(d2), outerArc.centroid(d2), pos];
			};			
		});
	
	polyline.exit()
		.remove();
};
</script>
@stop

@endsection
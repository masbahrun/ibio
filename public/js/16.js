(window.webpackJsonp=window.webpackJsonp||[]).push([[16],{9:function(t,a,i){"use strict";i.r(a);var s={extends:i(7).a,name:"ClicksChart",props:["chartData","borderWidth","showDetail"],mounted:function(){this.renderChart({labels:this.getLabels(),datasets:[{label:"Clicks",backgroundColor:"#e9d3f6",data:this.getData(),borderWidth:this.borderWidth,borderColor:["#cb55ee"],fill:!0}]},{legend:{display:this.showDetail},title:"Views stats",responsive:!0,maintainAspectRatio:!1,scales:{yAxes:[{ticks:{display:this.showDetail,beginAtZero:!0,callback:function(t){if(t%1==0)return t},max:Math.max.apply(Math,this.getData())+1},gridLines:{display:this.showDetail}}],xAxes:[{ticks:{display:!1},gridLines:{display:!1}}]},layout:{padding:{bottom:this.showDetail?0:-20,left:this.showDetail?0:-10}}})},methods:{getLabels:function(){var t=[];return this.chartData.map((function(a){t.push(a.date)})),t},getData:function(){var t=[];return this.chartData.map((function(a){t.push(a.clicks)})),t}}},e=i(1),l=Object(e.a)(s,void 0,void 0,!1,null,null,null);a.default=l.exports}}]);
var grafmese1 = new Morris.Line({
  // ID of the element in which to draw the chart.
  element: 'grafmese',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [
    { month: '2021-01', value: 50,value2:20 ,value3:15,value4:20 ,value5:196 },
    { month: '2021-02', value: 500,value2:300,value3:400 ,value4:235,value5:425 },
    { month: '2021-03', value: 1200 ,value2:1400,value3:2000,value4:1124 ,value5:2542 },
    { month: '2021-04', value: 800 ,value2:700,value3:400 ,value4:321 ,value5:1244},
  ],
  // The name of the data record attribute that contains x-values.
  xkey: 'month',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['value','value2', 'value3','value4','value5'],
  lineWidth:1,
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['Morromoro', 'Pucara','El Trigal','Guadalupe','Vallegrande'],
  resize:true,
});
   var day_data = [
  {"period": "2013", "value":345, "value2":269, "value3":248,"value4":171 ,"value5":165 },
  {"period": "2014", "value":358, "value2":257, "value3":345,"value4":269 ,"value5":257 },
  {"period": "2015", "value":469, "value2":471, "value3":458,"value4":371 ,"value5":371 },
  {"period": "2016", "value":446, "value2":269, "value3":471,"value4":457 ,"value5":401 },
  {"period": "2017", "value":557, "value2":269, "value3":471,"value4":401 ,"value5":446 },
  {"period": "2018", "value":948, "value2":546, "value3":457,"value4":471 ,"value5":546 },
  {"period": "2019", "value":871, "value2":758, "value3":501,"value4":771 ,"value5":658 },
  {"period": "2020", "value":771, "value2":569, "value3":869,"value4":846 ,"value5":871 },
  {"period": "2021", "value":801, "value2":1171, "value3":1171,"value4":1158 ,"value5":1169 },
];
Morris.Line({
  element: 'grafgestion',
  data: day_data,
  xkey: 'period',
  ykeys: ['value','value2', 'value3','value4','value5'],
  labels: ['Morromoro', 'Pucara','El Trigal','Guadalupe','Vallegrande'],
  resize:true,
});

$("#grafmese2021").on("click",function(){
console.log(grafmese1);
var grafmesedata = [
    { month: '2021-01', value: 196 ,value2:2 ,value3:90,value4:50 ,value5:60 },
    { month: '2021-02', value: 450,value2:500,value3:309 ,value4:150,value5:700 },
    { month: '2021-03', value: 2542 ,value2:1100,value3:1800,value4:1400 ,value5:1300 },
    { month: '2021-04', value: 1300 ,value2:455,value3:500 ,value4:200 ,value5:700},
];
grafmese1.setData(grafmesedata);
});

$("#grafmese2020").on("click",function(){
console.log(grafmese1);
var grafmesedata = [
    { month: '2020-01', value: 100 ,value2:2 ,value3:68,value4:2 ,value5:33 },
    { month: '2020-02', value: 400,value2:688,value3:390 ,value4:199,value5:666 },
    { month: '2020-03', value: 1500 ,value2:100,value3:1900,value4:1899 ,value5:1444 },
    { month: '2020-04', value: 600 ,value2:155,value3:459 ,value4:2900 ,value5:540},
];
grafmese1.setData(grafmesedata);
});

$("#grafmese2019").on("click",function(){
console.log(grafmese1);
var grafmesedata = [
    { month: '2019-01', value: 50 ,value2:2 ,value3:50,value4:40 ,value5:55 },
    { month: '2019-02', value: 555,value2:709,value3:444 ,value4:350,value5:234 },
    { month: '2019-03', value: 1400 ,value2:1450,value3:2100,value4:1999 ,value5:1344 },
    { month: '2019-04', value: 200 ,value2:1,value3:300 ,value4:2444 ,value5:233},
];
grafmese1.setData(grafmesedata);
});

$("#grafmese2018").on("click",function(){
console.log(grafmese1);
var grafmesedata = [
    { month: '2018-01', value: 50 ,value2:100 ,value3:50,value4:80 ,value5:19 },
    { month: '2018-02', value: 100,value2:909,value3:244 ,value4:250,value5:109 },
    { month: '2018-03', value: 900 ,value2:1950,value3:1200,value4:2999 ,value5:1500 },
    { month: '2018-04', value: 5 ,value2:1500,value3:100 ,value4:2002 ,value5:700},
];
grafmese1.setData(grafmesedata);
});

$("#grafmese2017").on("click",function(){
console.log(grafmese1);
var grafmesedata = [
    { month: '2017-01', value: 515 ,value2:199 ,value3:50,value4:43 ,value5:54 },
    { month: '2017-02', value: 820,value2:700,value3:244 ,value4:324,value5:154 },
    { month: '2017-03', value: 100 ,value2:1550,value3:1111,value4:1534 ,value5:1340 },
    { month: '2017-04', value: 300 ,value2:1000,value3:56 ,value4:555 ,value5:900},
];
grafmese1.setData(grafmesedata);
});

$("#grafmese2016").on("click",function(){
console.log(grafmese1);
var grafmesedata = [
    { month: '2016-01', value: 44 ,value2:98,value3:50,value4:80 ,value5:0 },
    { month: '2016-02', value: 166,value2:509,value3:244 ,value4:550,value5:115 },
    { month: '2016-03', value: 1000 ,value2:950,value3:800,value4:2399 ,value5:1400 },
    { month: '2016-04', value: 50 ,value2:1200,value3:10 ,value4:202 ,value5:300},
];
grafmese1.setData(grafmesedata);
});

$("#grafhelada").on("click",function(){
console.log(grafmese1);
var grafmesedata = [
    { month: '2016', value: 44 ,value2:98,value3:50,value4:80 ,value5:0 },
    { month: '2017', value: 166,value2:509,value3:244 ,value4:550,value5:115 },
    { month: '2018', value: 1000 ,value2:950,value3:800,value4:2399 ,value5:1400 },
    { month: '2019', value: 50 ,value2:1200,value3:10 ,value4:202 ,value5:300},
    { month: '2020', value: 1000 ,value2:950,value3:800,value4:2399 ,value5:1400 },
    { month: '2021', value: 50 ,value2:1200,value3:10 ,value4:202 ,value5:300},
];
grafmese1.setData(grafmesedata);
});

$("#grafgranizo").on("click",function(){
console.log(grafmese1);
var grafmesedata = [
    { month: '2016', value: 50 ,value2:98,value3:50,value4:80 ,value5:0 },
    { month: '2017', value: 100,value2:130,value3:244 ,value4:90,value5:115 },
    { month: '2018', value: 400 ,value2:500,value3:800,value4:403 ,value5:444 },
    { month: '2019', value: 500 ,value2:900,value3:888 ,value4:654 ,value5:543},
    { month: '2020', value: 1000 ,value2:950,value3:999,value4:1234 ,value5:987},
    { month: '2021', value: 0 ,value2:1200,value3:10 ,value4:202 ,value5:321},
];
grafmese1.setData(grafmesedata);
});

$("#grafsequia").on("click",function(){
console.log(grafmese1);
var grafmesedata = [
    { month: '2016', value: 10,value2:98,value3:50,value4:80 ,value5:0 },
    { month: '2017', value: 50,value2:509,value3:244 ,value4:550,value5:115 },
    { month: '2018', value: 333 ,value2:950,value3:400,value4:555 ,value5:444 },
    { month: '2019', value: 555 ,value2:1200,value3:610 ,value4:766 ,value5:555},
    { month: '2020', value: 1234 ,value2:1300,value3:800,value4:1345 ,value5:666 },
    { month: '2021', value: 1444 ,value2:1400,value3:1045 ,value4:1666 ,value5:999},
];
grafmese1.setData(grafmesedata);
});

$("#grafrafaga").on("click",function(){
console.log(grafmese1);
var grafmesedata = [
    { month: '2016', value: 44 ,value2:98,value3:333,value4:80 ,value5:0 },
    { month: '2017', value: 166,value2:432,value3:444 ,value4:550,value5:115 },
    { month: '2018', value: 222 ,value2:555,value3:800,value4:1099 ,value5:222 },
    { month: '2019', value: 543 ,value2:666,value3:1000 ,value4:1222 ,value5:300},
    { month: '2020', value: 654 ,value2:766,value3:1500,value4:1444 ,value5:888 },
    { month: '2021', value: 876 ,value2:999,value3:1999 ,value4:1666 ,value5:300},
];
grafmese1.setData(grafmesedata);
});
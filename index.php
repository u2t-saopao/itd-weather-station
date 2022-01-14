<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai&display=swap" rel="stylesheet">

    <title>Weather Station</title>
</head>
<style>
    .header {
        width: 100%;
        height: 120px;
        margin: auto;
        background: linear-gradient(#00276e, #4081fa, #b3cdfd);
        color: white;
        box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .weather_station {
        padding-top: 1%;
        height: 100%;
    }

    .card {
        /* max-width: 240px; */
        /* margin: auto; */
        margin-top: 4%;
        /* height: auto; */
        height: 140px;
        width: 100%;
        border-radius: 10px;
        color: white;
        justify-content: center;
    }

    .card:hover {
        box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        transition: 0.35s;
    }

    .card-temp {
        /* max-width: 240px; */
        height: 140px;
        font-size: 20px;
        width: 100%;
        /* height: auto; */
        padding: 10px;
        background: linear-gradient(#fca904, #fde8be);
        border-radius: 10px;
        /* padding: 5%; */
    }

    .card-humidity {
        /* max-width: 240px; */
        height: 140px;
        font-size: 20px;
        width: 100%;
        /* height: auto; */
        padding: 10px;
        background: linear-gradient(#0074e0, #88c6ff);
        border-radius: 10px;
        padding: 5%;
    }

    .card-wind-speed {
        /* max-width: 240px; */
        font-size: 20px;
        width: 100%;
        /* height: auto; */
        height: 140px;
        padding: 10px;
        background: linear-gradient(#006400, #9debaa);
        border-radius: 10px;

    }

    .card-wind-speed1 {
        /* max-width: 240px; */
        font-size: 20px;
        width: 100%;
        /* height: auto; */
        height: 140px;
        padding: 10px;
        background: linear-gradient(#006400, #9debaa);
        border-radius: 10px;
        padding: 5%;
    }

    .card-rainfall {
        /* max-width: 240px; */
        font-size: 20px;
        width: 100%;
        /* height: auto; */
        height: 140px;
        padding: 10px;
        background: linear-gradient(#0053a0, #83cbff);
        border-radius: 10px;
        padding: 5%;
    }

    .card-rainfall1 {
        /* max-width: 240px; */
        font-size: 20px;
        width: 100%;
        /* height: auto; */
        height: 140px;
        padding: 10px;
        background: linear-gradient(#0053a0, #83cbff);
        border-radius: 10px;
        padding: 5%;
    }

    .card-wind-vane {
        /* max-width: 240px; */
        max-height: 500px;
        font-size: 20px;
        width: 100%;
        /* height: 100%; */
        height: 140px;
        padding: 10px;
        background: linear-gradient(#006400, #9debaa);
        border-radius: 10px;
        padding: 5%;
    }

    .img {
        width: 100%;
        margin-top: 4%;
        margin-left: auto;
        margin-right: auto;
        text-align: center;
        border-radius: 10px; 
        box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); 
        width: 100%; height: auto; justify-content: center; background-color: white;
        
    }

    span {
        font-family: 'IBM Plex Sans Thai', sans-serif;
        font-weight: bold;
    }

    .footer {
        height: 1000px;
        /* height: 100px; */
        /* margin-top: 200px; */
        margin: auto;
        color: white;
        clear: both;
        text-align: center;
    }
</style>
<!-- background-image: url('23284.jpg'); background-repeat: no-repeat; background-size: cover; -->
<body style=" background-color: white;">
    <div class="container">
        <!--header-->
        <div class="header" style="margin-bottom: 10px;">
            <div class="row">
            <nav>
                <!-- <div class="row"> -->
                    <div class="col-md-1"></div>
                    <div class="col-md-7" style="margin-top: 0.5%;">
                        <div class="weather_station">
                            <img src="https://cdn-icons-png.flaticon.com/512/3127/3127236.png" alt="logo-header"
                                style="width: 100%; max-width: 80px; align-content: center; float: left;">
                            <h1 id="webname"
                                style=" padding-top: 2%; padding-left: 11%;font-family: 'IBM Plex Sans Thai', sans-serif; font-weight: bold;">
                            </h1>
                        </div>
                    </div>
                    <div class="col-md-3" style="margin-top: 0.5%;">
                        <h4 id="date_time"
                            style="font-size: 17px; padding-top: 11%; padding-left: 13%; float: right; font-family: 'IBM Plex Sans Thai', sans-serif;">

                        </h4>
                    </div>
                    <div class="col-md-1"></div>
                
            </nav></div>
        </div>
        <div class="row" style="margin-bottom: 20px;">

            <!--content-->
            <!-- column 1-->

            <div class="col-md-3">
                

                <div class="card">
                    <div class="card-wind-speed" id="wind-speed">
                        <span>ความเร็วลมเฉลี่ย 1 นาที</span><br>
                        <span style="font-size: 30px;" id="windspeed_data"></span><span style="font-size: 30px;">
                            km/h</span>
                    </div>
                </div>
                <div class="card">
                    <div class="card-wind-speed1" id="wind-speed1">
                        <span>ความเร็วลมเฉลี่ย 5 นาที</span><br>
                        <span style="font-size: 30px;" id="windspeed1_data"></span><span style="font-size: 30px;">
                            km/h</span>
                    </div>
                </div>
                <div class="card">
                    <div class="card-wind-vane" id="wind-vane">
                        <span>ทิศทางลม</span><br>
                        <span style="font-size: 30px;" id="windvane_data"></span><span style="font-size: 30px;"> </span>
                    </div>
                </div>
            </div>

            <!-- column 2 show image-->
            
            <div class="col-md-6">
            <!-- <div class="img">    
                <img id="graph" src="" alt="" style="width: 450px; height: 300px;">
            </div> -->
            <!-- <div id="graph" src="" style="height: 300px; width: 450px;"></div> -->
            <div class="row" style="margin-bottom: 22px ;">
                <div class="col-12 img">
                    <iframe id="graph" width="450px" height="260px" src="" ></iframe>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="card" style="margin-top: 3px;">
                        <div class="card-temp" id="temp">
                            <span>อุณหภูมิ</span><br>
                            <span style="font-size: 30px;" id="temp_data"></span><span style="font-size: 30px;"> ํC</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card" style="margin-top: 3px;">
                        <div class="card-rainfall1">
                            <div class="row">
                                <div class="col-6" style="margin-left: auto; margin-right: auto;">
                                    <div class="row" style="justify-content: center;">
                                        <img src="sunrise (1).png" alt="" style="width: 90px; height: auto;">
                                    </div>
                                    <div class="row"  style="text-align: center;">
                                        <span id="sunrise"></span>
                                    </div>
                                </div>
                                <div class="col-6" style="margin-left: auto; margin-right: auto;">
                                    <div class="row" style="justify-content: center;">
                                        <img src="sunset (1).png" alt="" style="width: 90px; height: auto; ">
                                    </div>
                                    <div class="row" style="text-align: center;">
                                        <span id="sunset"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         
            </div>
            <!-- column 3-->

            <div class="col-md-3">
                <div class="card">
                    <div class="card-humidity" id="humidity">
                        <span>ความชื้นในอากาศ</span><br>
                        <span style="font-size: 30px;" id="humidity_data"></span><span style="font-size: 30px;">
                            %</span>
                    </div>
                </div>
                <div class="card">
                    <div class="card-rainfall" id="rainfall">
                        <span>ปริมาณน้ำฝน 1 นาที</span><br>
                        <span style="font-size: 30px;" id="rainfall_data"></span><span style="font-size: 30px;">
                            mm</span>
                    </div>
                </div>
                <div class="card">
                    <div class="card-rainfall1" id="rainfall1">
                        <span>ปริมาณน้ำฝน 1 วัน</span><br>
                        <span style="font-size: 30px;" id="rainfall1_data"></span><span style="font-size: 30px;">
                            mm</span>
                    </div>
                </div>
                
            </div>
        </div>

        <!-- footer-->
        <div class="footer" style=" height: 100%; background: linear-gradient(#73a4ff, #4081fa, #003699);">
            <div class="row">
                <div class="col-sm-3">
                    <!-- <input type="button" onclick="ThemeSwitch('#02223f');"> -->
                </div>
                <div class="col-sm-6">
                    <div class="content-footer" style="margin-top: 4%; font-size: 16px;">
                        <span>โครงการมหาวิทยาลัยสู่ตำบล</span>
                        <span>มหาวิทยาลัยวลัยลักษณ์</span>
                    </div>

                </div>
                <div class="col-sm-3">
                    <div class="grid-container "
                        style="margin-right: auto; margin-left: auto; display: grid; margin-top: 2%; grid-template-columns: auto auto auto; justify-content: center;">
                        <div class="grid-item">
                            <img src="u2t.png" alt="logo-footer"
                                style="width: 100%; max-width: 70px; padding-top: 15%;">
                        </div>
                        <div class="grid-item">
                            <img src="walailak.png" alt="logo-footer" style="width: 100%; max-width: 50px; ">
                        </div>
                        <div class="grid-item">
                            <img src="auwo.png" alt="logo-footer"
                                style="width: 100%; max-width: 80px; padding-top: 10%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    var locationId = <?php echo $_GET["id"]?>;
    // var locationId = 1555446;
    function loaddata() {
        //  $("#graph").hide();
        var url = "https://api.thingspeak.com/channels/"+locationId+"/feeds.json?results=1";
        $.getJSON(url)
            .done((data) => {
                console.log(data)

                //ชื่อเว็บ
                var webname = data.channel.name;

                //ข้อมูลอุณหภูมิ
                var temp = data.feeds[0].field1;
                var datatemp = parseFloat(temp).toFixed(2);

                //ข้อมูลความชื้น
                var datahumidity = data.feeds[0].field2;

                //ข้อมูลความเร็วลมเฉลี่ย 1 นาที
                var windspeed = data.feeds[0].field3;
                var datawindspeed = parseFloat(windspeed).toFixed(2);

                //ข้อมูลความเร็วลมเฉลี่ย 5 นาที
                var windspeed1 = data.feeds[0].field4;
                var datawindspeed1 = parseFloat(windspeed1).toFixed(2);

                //ข้อมูลปริมาณน้ำฝน 1 นาที
                var rainfall = data.feeds[0].field5;
                var datarainfall = parseFloat(rainfall).toFixed(2);

                //ข้อมูลปริมาณน้ำฝน 1 วัน
                var rainfall1 = data.feeds[0].field6;
                var datarainfall1 = parseFloat(rainfall1).toFixed(2);

                //ข้อมูลทิศทางลม
                var datawindvane = data.feeds[0].field7;

                //ข้อมูลเวลา
                var datetime = data.feeds[0].created_at;
                //ข้อมูลพื้นที่
                var lat = data.channel.latitude;
                var long =data.channel.longitude;

                $("#webname").text(webname);
                $("#subwebname").text(webname);
                $("#temp_data").text(datatemp);
                $("#humidity_data").text(datahumidity);
                $("#windspeed_data").text(datawindspeed);
                $("#windspeed1_data").text(datawindspeed1);
                $("#rainfall_data").text(datarainfall);
                $("#rainfall1_data").text(datarainfall1);
                // $("#windvane_data").append(datawindvane);
                // $("#date_time").text(datetime);
                ChangeWindUnit(datawindvane)
                PullWeather(lat,long)
                changeDate(datetime)
            }, 3000).fail((xhr, status, err) => {
                console.log("error")
            })
    }
    function PullWeather(lat,long){
                
                //$("#hid1").show();
                var url = "https://api.openweathermap.org";
                url = url + "/data/2.5/weather?lat="+lat+"&lon="+long+"&appid=a455c00476d1492900b85d3a61b5c51a&units=metric";
                $.getJSON(url)
                .done((data)=>{
                    console.log(data)
                    sunr(data.sys.sunrise);
                    suns(data.sys.sunset);
                })
                .fail((xhr, status, err)=>{
                    console.log("error")
                })
                
        }
        function ChangeWindUnit(wind_u){
            if(wind_u == 360 || wind_u == 0){
                $("#windvane_data").text("North");
            }else if(wind_u == 45){
                $("#windvane_data").text("North-East");
            }else if(wind_u == 90){
                $("#windvane_data").text("East");
            }else if(wind_u == 135){
                $("#windvane_data").text("South-East");
            }else if(wind_u == 180){
                $("#windvane_data").text("South");
            }else if(wind_u == 225){
                $("#windvane_data").text("South-West");
            }else if(wind_u == 270){
                $("#windvane_data").text("West");
            }else if(wind_u == 315){
                $("#windvane_data").text("North-West");
            }

        }
        // function ThemeSwitch(color){
        //     document.body.style.background = color;
        // }
        const month = ["มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม"]
        function changeDate(d_time){
            let date = new Date(d_time);
            let year = date.getFullYear();
            let months = date.getMonth();
            let realMonth = month[months];
            let day = date.getDate();
            let hours = date.getHours();
            let minutes = "0" + date.getMinutes();
            let seconds = "0" + date.getSeconds();

            let formattedTime = day+ ' ' + realMonth + ' ' + year + ' ' + hours + ':' + minutes.substr(-2) + ':' + seconds.substr(-2);
                $("#date_time").text(formattedTime);
        }
//         function datenow(){
//             let date = new Date();
//             let date2 = + date.getDate();
//             let month2 = + date.getMonth();
//             let realMonth = month[month2];
//             let year = + date.getFullYear();
//             // console.log(date.getDate());
//             // console.log(date.getMonth());
//             // console.log(date.getFullYear());
//             let hours = + date.getHours();
//             let minutes = "0" + date.getMinutes();
//             let seconds = "0" + date.getSeconds();
//             let formattedTime = date2 + ' ' + realMonth + ' ' + year + '  ' + hours + ':' + minutes.substr(-2)  ;
//             console.log(formattedTime);
//                 $("#date_time").text(formattedTime);
//                 return this.formattedTime;
//         }
        function sunr(d_time){
            let unix = d_time*1000;
            let date = new Date(unix);
            
            let hours = date.getHours();
            let minutes = "0" + date.getMinutes();
            let seconds = "0" + date.getSeconds();

            let formattedTime = hours + ':' + minutes.substr(-2) + ':' + seconds.substr(-2);
            var sunrise = formattedTime;
            console.log(formattedTime);
            
                $("#sunrise").text(formattedTime);
               
        }
        function suns(set_time){
            let unix = set_time*1000;
            let date = new Date(unix);

            let hours = date.getHours();
            let minutes = "0" + date.getMinutes();
            let seconds = "0" + date.getSeconds();
            let formattedTime = hours + ':' + minutes.substr(-2) + ':' + seconds.substr(-2);
            var sunset = formattedTime;
            console.log(formattedTime);
            
            $("#sunset").text(formattedTime);
        }
        function loadAll(){
            loaddata();
            PullWeather();
            setTimeout(loadAll,60000);
        }


    $(() => {
        loadAll();
//         datenow();
        //show graph
        $("#graph").attr("src", "https://thingspeak.com/channels/"+locationId+"/maps/channel_show?fbclid=IwAR1JOcptE3UbrPT5Joha820nGViVXdCWWLPwII1Vrska7Xy8kzEFXOQWhCE");
        $("#temp").click(() => {
            $("#graph").show();
            var value = 1;
            var url = "https://thingspeak.com/channels/"+locationId+"/";
            url = url + "charts/" + value;
            $("#graph").attr("src", url);
        });
        $("#humidity").click(() => {
            $("#graph").show();
            var value = 2;
            var url = "https://thingspeak.com/channels/"+locationId+"/";
            url = url + "charts/" + value;
            $("#graph").attr("src", url);
        });
        $("#wind-speed").click(() => {
            $("#graph").show();
            var value = 3;
            var url = "https://thingspeak.com/channels/"+locationId+"/";
            url = url + "charts/" + value;
            $("#graph").attr("src", url);
        });
        $("#wind-speed1").click(() => {
            $("#graph").show();
            var value = 4;
            var url = "https://thingspeak.com/channels/"+locationId+"/";
            url = url + "charts/" + value;
            $("#graph").attr("src", url);
        });
        $("#rainfall").click(() => {
            $("#graph").show();
            var value = 5;
            var url = "https://thingspeak.com/channels/"+locationId+"/";
            url = url + "charts/" + value;
            $("#graph").attr("src", url);
        });
        $("#rainfall1").click(() => {
            $("#graph").show();
            var value = 6;
            var url = "https://thingspeak.com/channels/"+locationId+"/";
            url = url + "charts/" + value;
            $("#graph").attr("src", url);
        });
        // $("#wind-vane").click(() => {
        //     $("#graph").show();
        //     var value = 406417;
        //     var url = "https://thingspeak.com/channels/"+locationId+"/";
        //     url = url + "widgets/" + value;
        //     // $("#graph").attr("src", url);
        //     $("#graph").attr("src", url);
        // });
    })
</script>

</html>

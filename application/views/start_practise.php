
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .para_word{
            background-color: #100e0e38;
            /* margin-top: 2%; */
            font-size: larger;
            text-align: center;
            width: 100%;
            height: 150px;
            padding: 10px 10px;
            margin: 30px auto;
            border-radius: 10px;
            color:#666565 !important;
        }
        .container{
                background-color: #1a18181f;
                padding: 15px 30px;
                border-radius: 10px;
        }
        .btn{
             margin: 3px;
             border:1px solid white !important;
             color:white;
        }
        .btn:hover{
            background-color:white !important;
            color:black !important;
        }
        .d-flex{
                margin: 5px 0px;
        }
        .compelted{
                /* background-color: green; */
                color: white;
        }
        .heading{
            text-align:center;
            margin-top:20px;
            display: flex;
            width: 80%;
            margin: auto;
            margin-top: 2%;
        }
        .timeset{
            text-align:center;
            font-size:4vh;
            background-color:#2c2e31;
            color:white;
        }
        .correction{
            padding: 15px;
            line-height: 30px;
            font-size: 3vh;
            background-color:#2c2e31;
            color:white;
        }
        .sbtn{
            padding: 7px 22px;
            background-color:#2c2e31;
            color:white;
        }
        .sbtn:hover{
            background-color:#2c9f90;
            color:white;
        }
        .active{
            background-color:#2c2e31; 
        }
      
        body {
            margin: 0;
            font-family: "Lato", sans-serif;
            background-color: #323437;
            color: #d1d0c5;
        }

        .sidebar {
            margin: 0;
            padding: 0;
            width: 200px;
            background-color:  #e2b714;
            position: fixed;
            height: 100%;
            overflow: auto;
            /* background-color: #323437; */
            color: #d1d0c5;
        }

        .sidebar a {
            display: block;
            color: black;
            padding: 16px;
            text-decoration: none;
        }
        
        .sidebar a.active {
            /* background-color:#164A41; */
          color: white;
        }

        .sidebar a:hover:not(.active) {
            background-color: #555;
            color: white;
        }

        div.content {
            margin-left: 200px;
            padding: 1px 16px;
            height: 600px;
        }

        @media screen and (max-width: 700px) {
          .sidebar {
            width: 100%;
            height: auto;
            position: relative;
        }
        .sidebar a {float: left;}
        div.content {margin-left: 0;}
        }

        @media screen and (max-width: 400px) {
        .sidebar a {
            text-align: center;
            float: none;
        }
        }
    </style>
  </head>
  <body>
  <div class="sidebar">
    <a class="active" href="#home"> <b>Typing </b> Master </a>
    <!-- <div class="time">
        <form action="" name="form_main">
            <button type="button" id="btn_start" name="start" class="btn  sbtn">Start</button>      
            <button type="button" name="pause" class="btn  sbtn">Pause</button>       
        </form>
       <div class="timeset">
          Time:<span id="minute" >00</span>:<span id="second">00</span>
       </div>
    </div> -->
    <div class="correction">
        <div class="active">Correct:<span id="correct"></span></div>
        <div class="active">InCorrect:<span id="incorrect"></span></div>
    </div>
    <!-- <div class="stop" style="text-align:center;">
    <button type="button" name="stop" onclick="stop()" class="btn  sbtn">Stop</button>  
    </div> -->
    <a href="../" class="active" style="position: relative;
    top: 550px;">Back</a>
  </div>

 <div class="content">
    <?php $this->session->set_userdata('compition_id',$tests['id']);?>
    <h2 style="margin-top:20px;"><?= $tests['test_title'];?></h2> 
    <p class="para_word"> <?= $tests['test_paragraph'];?> </p>
    <pre id="inputpara"> </pre>
    <input type="hidden" name="str" id="str" value="<?= $tests['test_paragraph'];?>">
    <div class="container">
        <div class="keyboard">
            <div class="d-flex flex-row">
                <button class="btn btn-outline-primary flex-fill" id="btn_49">1</button>
                <button class="btn btn-outline-primary flex-fill" id="btn_50">2</button>
                <button class="btn btn-outline-primary flex-fill" id="btn_51">3</button>
                <button class="btn btn-outline-primary flex-fill" id="btn_52">4</button>
                <button class="btn btn-outline-primary flex-fill" id="btn_53">5</button>
                <button class="btn btn-outline-primary flex-fill" id="btn_54">6</button>
                <button class="btn btn-outline-primary flex-fill" id="btn_55">7</button>
                <button class="btn btn-outline-primary flex-fill" id="btn_56">8</button>
                <button class="btn btn-outline-primary flex-fill" id="btn_57">9</button>
                <button class="btn btn-outline-primary flex-fill" id="btn_48">0</button>
            </div>
            <div class="d-flex flex-row">
                <button class="btn btn-outline-primary flex-fill">~</button>
                <button class="btn btn-outline-primary flex-fill">!</button>
                <button class="btn btn-outline-primary flex-fill">@</button>
                <button class="btn btn-outline-primary flex-fill">#</button>
                <button class="btn btn-outline-primary flex-fill">$</button>
                <button class="btn btn-outline-primary flex-fill">%</button>
                <button class="btn btn-outline-primary flex-fill">^</button>
                <button class="btn btn-outline-primary flex-fill">&</button>
                <button class="btn btn-outline-primary flex-fill">*</button>
                <button class="btn btn-outline-primary flex-fill">(</button>
                <button class="btn btn-outline-primary flex-fill">)</button>
                <button class="btn btn-outline-primary flex-fill">_</button>
                <button class="btn btn-outline-primary flex-fill">-</button>
                <button class="btn btn-outline-primary flex-fill">+</button>
                <button class="btn btn-outline-primary flex-fill">=</button>
            </div>
            <div class="d-flex flex-row">
                <button class="btn btn-outline-primary flex-fill" id="btn_113">Q</button>
                <button class="btn btn-outline-primary flex-fill" id="btn_119">W</button>
                <button class="btn btn-outline-primary flex-fill" id="btn_101">E</button>
                <button class="btn btn-outline-primary flex-fill" id="btn_114">R</button>
                <button class="btn btn-outline-primary flex-fill" id="btn_116">T</button>
                <button class="btn btn-outline-primary flex-fill" id="btn_121">Y</button>
                <button class="btn btn-outline-primary flex-fill" id="btn_117">U</button>
                <button class="btn btn-outline-primary flex-fill" id="btn_105">I</button>
                <button class="btn btn-outline-primary flex-fill" id="btn_111">O</button>
                <button class="btn btn-outline-primary flex-fill" id="btn_112">P</button>
                <button class="btn btn-outline-primary flex-fill">[</button>
                <button class="btn btn-outline-primary flex-fill">{</button>
                <button class="btn btn-outline-primary flex-fill">}</button>
                <button class="btn btn-outline-primary flex-fill">}</button>
                <button class="btn btn-outline-primary flex-fill" id="btn_92">\</button>
                <button class="btn btn-outline-primary flex-fill">|</button>
            </div>
            <div class="d-flex flex-row">
                <button class="btn btn-outline-primary flex-fill" id="btn_97">A</button>
                <button class="btn btn-outline-primary flex-fill" id="btn_115">S</button>
                <button class="btn btn-outline-primary flex-fill" id="btn_100">D</button>
                <button class="btn btn-outline-primary flex-fill" id="btn_102">F</button>
                <button class="btn btn-outline-primary flex-fill" id="btn_103">G</button>
                <button class="btn btn-outline-primary flex-fill" id="btn_104">H</button>
                <button class="btn btn-outline-primary flex-fill" id="btn_106">J</button>
                <button class="btn btn-outline-primary flex-fill" id="btn_107">K</button>
                <button class="btn btn-outline-primary flex-fill" id="btn_108">L</button>
                <button class="btn btn-outline-primary flex-fill" id="btn_59">;</button>
                <button class="btn btn-outline-primary flex-fill" id="btn_58">:</button>
                <button class="btn btn-outline-primary flex-fill">'</button>
                <button class="btn btn-outline-primary flex-fill">"</button>
                <button class="btn btn-outline-primary flex-fill" id="btn_13">Enter</button>
            </div>
            <div class="d-flex flex-row">
                <button class="btn btn-outline-primary flex-fill">Shift</button>
                <button class="btn btn-outline-primary flex-fill" id="btn_122">Z</button>
                <button class="btn btn-outline-primary flex-fill" id="btn_120">X</button>
                <button class="btn btn-outline-primary flex-fill" id="btn_99">C</button>
                <button class="btn btn-outline-primary flex-fill" id="btn_118">V</button>
                <button class="btn btn-outline-primary flex-fill" id="btn_98">B</button>
                <button class="btn btn-outline-primary flex-fill" id="btn_110">N</button>
                <button class="btn btn-outline-primary flex-fill" id="btn_109">M</button>
                <button class="btn btn-outline-primary col-3" id="btn_32">Space</button>
                <button class="btn btn-outline-primary flex-fill" id="btn_44">,</button>
                <button class="btn btn-outline-primary flex-fill"><</button>
                <button class="btn btn-outline-primary flex-fill" id="btn_46">.</button>
                <button class="btn btn-outline-primary flex-fill">></button>
                <button class="btn btn-outline-primary flex-fill"id="btn_47">/</button>
                <button class="btn btn-outline-primary flex-fill">?</button>
            </div>

        </div>
    </div>
 </div>  
<script>
    document.addEventListener('keypress' , keypress);
    let lessonword = document.querySelector("#str");
    let lw= lessonword.value.trim();
    let count = 0;
    let bttn = 0; 
    let incorrect = 0;
    let pk;
    let checkpoint = 0;
    let milisecond =0 ;
    let minute = 0;
    let second = 0;
    let stats = 'Null';
            function keypress(e) {
                // if(checkpoint == 1){
                    let keynum;
                    if (window.event) {
                        keynum = e.key;
                    }
                    else if (e.which){
                        keynum = e.which;
                    }
                    if(keynum == lw[bttn]){
                        bttn++;
                        $("#btn_"+e.keyCode).css('background','blue');
                        setTimeout(() => {
                            $("#btn_"+e.keyCode).css('background','none');
                        }, 100);
                    }
                    else{
                        $("#btn_"+e.keyCode).css('background','red');
                        setTimeout(() => {
                            $("#btn_"+e.keyCode).css('background','none');
                        }, 100);
                    }    
                    checkinput(keynum);
                // }
                // else{
                //     alert("Please click start button !");
                // }
            }
            function checkinput(userinput){
                if(userinput == lw[count]){
                    count++;
                    document.getElementById('correct').innerText = count; 
                    var str_array = split(lw,count);
                    let html = "<span class='compelted'>"+str_array[0]+"</span>";
                        html += "<span>"+str_array[1]+"</span>";
                    $(".para_word").html(html); 
                    // $(".inputpara").append(userinput);   
                }
                else{
                    incorrect++;
                    document.getElementById('incorrect').innerText = incorrect; 
                } 

                if(incorrect == lw.length){
                    alert("Your performance very poor. Please restrat test !");
                    location.href = 'http://localhost/typing_master/index';
                }
                if(count == lw.length){
                    alert("This practise is complete . Start new ");
                    location.href = 'http://localhost/typing_master/index';
                }

                // if(count == lw.length){
                //     let a = lw.length/10;
                //     let b = (count-incorrect)/10;
                //     let acurcy = b*100/a;
                //     if(acurcy > 90) {
                //          stats = 'Excellent';
                //     }
                //     else if(acurcy > 70){
                //          stats = 'Good';
                //     }
                //     else if(acurcy > 50){
                //          stats = 'Bad';
                //     }
                //     else{
                //          stats = 'Poor';
                //     }

                //     let user_time = (minute*60)+second;

                //     base_url = "http://localhost/typing_master/";

                //     $.ajax({
                //         url: base_url+"compition_result", 
                //         type: "post",    
                //         dataType: 'json',
                //         data: { user_id :<?//= $this->session->userdata('user')['id'];?>,
                //                 comption_id :<?//= $tests['id'];?>,
                //                 total_charachter : lw.length,
                //                 correct_character :count,
                //                 wrong_character :incorrect,
                //                 finsh_time :user_time,
                //                 acuracy :acurcy,
                //                 status : stats,
                //             },  
                //         success:function(result){
                            
                //         }
                //     });
                //     location.href = 'http://localhost/typing_master/compition/result';
                // }
            }

            function split(str, index) {
                const result = [str.slice(0, index), str.slice(index)];
                return result;
            }
            
            // function stop(){
                
            //         let a = lw.length/10;
            //         let b = (count-incorrect)/10;
            //         let acurcy = b*100/a;
            //         // console.log(acurcy);
            //         base_url = "http://localhost/typing_master/";

            //         $.ajax({
            //             url: base_url+"user_test_result", 
            //             type: "post",    
            //             dataType: 'json',
            //             data: { user_id :<?//= $this->session->userdata('user')['id'];?>,
            //                     test_id :<?//= $tests['id'];?>,
            //                     total_character : lw.length,
            //                     correct_character :count,
            //                     wrong_character :incorrect,
            //                     finsh_time :minute,
            //                     acuracy :acurcy,
            //                 },  
                            
            //             success:function(result){
                            
            //             }
            //             });
            //             location.href = 'http://localhost/typing_master/test/result_show';
            // }
        
            // let cron;

            // document.form_main.start.onclick = () => start();
            // document.form_main.pause.onclick = () => pause();
            // document.form_main.reset.onclick = () => reset();

            // function start(){
            //     $("#btn_start").css('background','black');
            //     checkpoint = 1;
            //     pause();
            //     cron = setInterval(() => { timer(); },10);
            // }

            // function pause(){
            //     clearInterval(cron);
            // }

            // function reset(){
            //     minute = 0;
            //     second = 0;
            //     document.getElementById('minute').innerText = '00'; 
            //     document.getElementById('second').innerText = '00'; 
            // }

            // function timer(){
            //     if((milisecond += 10) == 1000){
            //         milisecond = 0;
            //         second++; 
            //     }
            //     if(second == 60){
            //         second = 0;
            //         minute++; 
            //     }
               
            //     document.getElementById('minute').innerText = returnData(minute); 
            //     document.getElementById('second').innerText = returnData(second); 
            // }

            // function returnData(input){
            //     return input > 10 ? input : `0${input}`;
            // }
</script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
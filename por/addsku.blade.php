<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>new-school</title>
    <style>
    body{
        font-family: 'Poppins' ,sans-serif;

        }
        .body{
            display: flex;
            justify-content: center;
        }

        .container{
            padding-top: 20px;
            text-align: center;
            min-width: 300px;
            width: 600px;
            margin-left: 5px;
            background-color: #fff;

        }

        .lowbody{
            margin-top: 20px;
            min-width: 300px;
            width: 300px;

        }

        .sachdiv{
            display: flex;
            justify-content: center;
            width: 85%;
            border-radius: 17px;
            padding: 2px;
            box-shadow: 1px 1px 3px grey;
        }


        .sachoutadiv{
            display: flex;
            justify-content: center;
            min-width: 200px;
            width: 270px;
            border-radius: 17px;
            background-color: #fff;
            margin-top: 10px;
            margin-left: auto;
            margin-right: auto;
        }
        .ticha{
          display: flex;
          justify-items: center;
          padding: 5px;
        }
        
        .tichimg{
            width: 18px;
            height: 18px;
            margin-top: 2px;
        }

        #sachbtn{
           display: flex;
           justify-content: center;
           padding: 2px;
           width: 15%;
        
        }

        .sachbtn{
           width: 14px;
           height: 18px;
           margin-top: 5px;
           
        }

        #clear{
           display: flex;
           padding: 3px;
        }
            .clearimg{
                width: 15px;
                height: 15px;
                margin-top: 5px;
            }

        input{
            width: 70%;
            padding: 5px;
            border: none;
            text-align: center;
        }

        .header{
           text-align: center;
        }

        .logo{
            width: 20px;
            margin-right: 7px;
            margin-left: 5px;
        }

        .headertxt{
            margin-top: 2px;
            color: rgb(250, 25, 100);

        }


        a{
            text-decoration: none;
        }


        .classes{
            text-align: center; border-radius: 3px ;
            background-color: rgb(245, 112, 157);
            color: #fff; padding: 5px; width: 100%;
        }

        .sachitems{
            text-align: center; border-radius: 3px ;
            background-color: rgb(245, 112, 157);
            color: #fff;
            padding: 5px; margin: 5px;
            box-shadow: 1px 1px 3px rgb(168, 162, 162);
            display: flex;
           /* min-width: 290px;
            width: 590px;*/
    
           
        }

        .logodiv{
            width: 42px;
            width: 15%;
            display: flex;
            justify-content:center;
        }

        .spandiv{
            width: 70%;
            text-align: center;

        }

        .logoimg{
            border-radius: 50%;
            width: 40px;

        }

        .sachscrol {
            height: 400px; overflow-y: auto;

        }

        .sachscrol::-webkit-scrollbar{
            width: 0px;
        }

        #sachitemdiv{
            display: none;
            margin: 5px;
            border-radius: 5px; padding-bottom: 10px;
        }

        .info{
            display: none;
            style="text-align: center; color:rgb(151, 146, 146);
        }

    </style>
</head>
<body>
    <div class="body">
        <div class="container">
            <section class="header">
                <img class="logo" src="{{ asset('logos/tichatoollogofill2.png')}}" alt="">
               <span class="headertxt">Tichatool</span>
            </section>
            <section>
                <div class="sachoutadiv">
                    <div class="sachdiv">
                        <div class="ticha">  <img class="tichimg" src="{{ asset('/defaults/schoolTlogo.png')}}" alt=""></div>
                        <input id="input" type="text" placeholder="search for your student" required>
                        <div id="clear"><img  class="clearimg" src="{{ asset('logos/cancle.png')}}" alt=""></div>
                    </div>
                    <div id="sachbtn"> <img class="sachbtn" src="{{ asset('/logos/search.png')}}"></div>
                </div>
            </section>

            <!-- where searches appear here-->
            <div id="sachitemdiv">
               
               <div class="sachscrol">
                   <!--if ()-->
                       <!--foreach ($adminstud as $modelName)-->
                           <a href="adminV">
                               <div class="sachitems">
                                  <div class="logodiv">
                                    <img class="logoimg" src="{{ asset('defaults/schoollogo.png')}}" alt="">
                                  </div>
                                   <div class="spandiv">
                                    <span><!--post school name here-->iicomics college</span>
                                    <br>
                                    <span><small><!--post motto here-->study is play</small></span>
                                   </div>
                                   <div class="logodiv">
                                        <!--just for spacing-->
                                  </div>
                           </div>
                           </a>

                       <!--endforeach-->
                       
                   <!--else-->
                        <div class="info">
                           <span>it apears</span>
                           <span><!--get text from input--></span>
                           <span>does'nt exist.</span></div>

   
                  <!-- endif-->
                  
                  
                       
               </div>
            </div>

        </div>
    </div>

    <script>
        const itemsdiv = document.getElementById('itemsdiv');
        const sachitemdiv = document.getElementById('sachitemdiv');
        const input = document.getElementById('input');
        const clear = document.getElementById('clear'); 

        input.addEventListener('input' ,(e)=>{
            sachitemdiv.style.display= 'block';
        })

        clear.addEventListener('click' ,(e)=>{
            input.value= '';
            sachitemdiv.style.display= 'none';
        })
    
    </script>

</body>
</html>
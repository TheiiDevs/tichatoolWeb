
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feeds</title>
    <style>@import url('http://fonts.cdnfonts.com/css/myriad-pro');

    body{
        background-color: #fff;
        font-family: 'Myriad Pro300', sans-serif;
    }
        .navbar{
            background-color: #fff;
            box-shadow:  0 4px 6px -2px rgb(209, 207, 207);
            padding-bottom: 5px;
            margin-bottom: 5px;
        }
        .imgbar{
            width: 100%;
            display: flex;

        }

        .nav{
            width: 20%;
            text-align: center;
            padding-top: 10px;
            
        }

        .img{
            width: 15px;
            height: auto;
        }

        .sach{
            width: 10px;
        }

        .more{
            width: 4px;
        }

        
        .navtxts{
            width: 100%;
            display: flex;

        }

        .navtxt{
            width: 20%;
            text-align: center;
            font-size: 11px;
            color: #770F3D;
            cursor: none;
        }

        .hscroll::-webkit-scrollbar{
           width: 0px;
        }
        .hscroll{
            margin-top: 7px;
            height: 175px;
            display: flex;
            overflow-x: auto;
           
        }

        .scroll{
            min-width: 100px;
            border-radius: 10px;
            height: 150px;
            margin: 5px;
            box-shadow:  .1em .2px 1px rgb(209, 207, 207);
            background-color: #fff;

        }

        .header{
            display: flex;
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

        .reqDiv{
            text-align: center;
            border-radius: 3px ;
            background-color: rgb(245, 112, 157);
            color: #fff;
            padding-top: 1px;
            width: 150px;
            margin-left: auto;
            margin-right: auto;

        }

        a{
            text-decoration: none;
        }
        
        #reqSection{
            display: none;

        }

        .reqTxt{
            text-align: center;
            color: #7c7377;
            margin: 5px;
        }
    </style>
</head>
<body>
  
    <section class="header">
        <img class="logo" src="{{ asset('/logos/tichatoollogofill2.png')}}" alt="">
       <span class="headertxt">Tichatool</span>
    </section>
    <section class="navbar">
        <section class="imgbar">
            <div class="nav">
                <a href=""><div><img class="more" src="{{ asset('/logos/more.png')}}" alt=""></div></a>
            </div>
            <div  class="nav">
                <a href="Admintichas"><div><img  class="img" src="{{ asset('/logos/teachers.png')}}" alt=""></div></a>
            </div>
            <div  class="nav">
                <a href=""><div><img  class="img" src="{{ asset('/logos/post.png')}}" alt=""></div></a>
            </div>
            <div  class="nav">
                <a href="adminstuds"><div><img  class="img" src="{{ asset('/logos/student1.png')}}" alt=""></div></a>
            </div>
            <div  class="nav">
                <a href=""><div><img class="sach" src="{{ asset('/logos/search.png')}}" alt=""></div></a>
            </div>
        </section>
        <section class="navtxts">
            <div class="navtxt">
                <small>more</small>
            </div>
            <div  class="navtxt">
                <small>teachers</small>
            </div>
            <div  class="navtxt">
                <small>post</small>
            </div>
            <div  class="navtxt">
                <small>students</small>
            </div>
            <div  class="navtxt">
                <small>search</small>
            </div>
    
        </section>
    </section>
        <section id="reqSection">
                 <!-- this div is to notify admin when a ticha uploads or sent requests-->
               
                 <div class="reqTxt"><small id="reqtxt"><!--insert "you have requests" here--></small> </div>
               <a href="requ">
                 <div class="reqDiv"><Small>view requests</Small></div>
               </a>
        
        </section>

    <section class="hscroll">
        <div class="scroll"></div>
        <div class="scroll"></div>
        <div class="scroll"></div>
        <div class="scroll"></div>
        <div class="scroll"></div>
        <div class="scroll"></div>
        <div class="scroll"></div>
        <div class="scroll"></div>
        <div class="scroll"></div>

    </section>
    <section>
        
        
    </section>

    
</body>
</html>
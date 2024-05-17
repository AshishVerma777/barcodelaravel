<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />
</head>
<style>
    .box {
        border: 2px solid black;
        height: 100vh;
        /* margin-left: 120px;
        margin-right: 100px; */
    }

    .logo-img img {
        width: 100px;
        height: 100px;
    }

    .logo-image img {
        width: 100px;
        height: 200px;
        /* padding-left: 290px; */
    }

    .heading-header {
        font-weight: bold;
        font-size: 20px;
        position: absolute;
        top: 45px;
        text-align: center;
        background: -webkit-linear-gradient(0deg, #f18306 0%, #f27575 30%, #fc4040 45%, #36dc6e 70%, #0d1cbd 85%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .borders{
        width: 100%;
        margin-left: 0.1px
    }
    .logo-border{
        border-right: 1.2px solid black;
        height: 100px;
        padding-left: 5px;
    }
</style>

<body>
    <div class="container">
        <div class="container-fluid">
            <div class="box">
                <div class="row border-bottom border-2 border-dark mt-2 borders">
                    <div class="col-lg-1 logo-border">
                        <div class="logo-img">
                            <img src="http://www.agio-pharma.com/wp-content/uploads/2019/10/logo-agio.png" alt="Logo"
                                class="logo">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="heading-header ">
                            Warehouse and Leveling Management
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="logo-image">
                            <img src="asset{{" resources/image/vidhyagxp.png"}}" alt="Logo" class="logo">
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</body>

</html>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Ubuntu', sans-serif;
    }
    .container-fluid{
        max-width: 100%;
        height: 100%;
        align-items: center;
        background: linear-gradient(to right, #68ddfa 0%,  #55c0db 0%, #e43df3 100%);
    }
    .container{
        max-width: 100%;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(to right, #68ddfa 0%,  #55c0db 0%, #e43df3 100%);
    }

    form{
        width: 90%;
        max-width: 500px;
        padding: 50px 30px 20px;
        background: #fff;
        border-radius: 4px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.5);
        position: relative;
    }
    .input-group{
        width: 100%;
        display: flex;
        align-items: center;
        margin: 10px 0;
        position: relative;
    }
    .input-group label{
        flex-basis: 28%;
    }
    .input-group input{
        flex-basis: 68%;
        background: transparent;
        border: 0;
        outline: 0;
        padding: 5px 0;
        border-bottom: 1px solid #999;
        color: #333;
        font-size: 16px;
    }
</style>
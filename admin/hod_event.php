<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no"/>
  <title>CodePen - Glassmorphism login Form Tutorial in html css</title>
  

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html lang="en">
<head>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #080710;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -127px;
    top: -89px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -128px;
    bottom: -90px;
}
form{
    margin-top: 47px;
    height: 625px;
    width: 477px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 44%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgb(8 7 16 / 60%);
    padding: 2px 33px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 30px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 17px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 34px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 23px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 11px 0;
    font-size: 17px;
    font-weight: 600;
    border-radius: 25px;
    cursor: pointer;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}

@media(max-width: 667px) and (min-width:360px)
{
    form{
    width: 325px;
    }
}


    </style>
</head>
<body>

    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    
    <form action="code.php" method=post>
        <h3>Add Events</h3>

        <label for="event_name">Event Name</label>
        <input type="text" placeholder="Add an event" name="event_name" id="event_name">

        <label for="date">Date</label>
        <input type="date" name="event_date" placeholder="Select event date" id="date">

        <label for="date">Date to conduct event</label>
        <input type="date" name="organized_date" placeholder="Select date to conduct event" id="date_to_conduct_event">

        <label for="venue">Venue</label>
        <input type="text" name="venue" placeholder="Select venue" id="venue">

        <label for="time">Time</label>
        <input type="time" name="time" placeholder="Select time" id="time">

        <label for="username">Competitions</label>

        <input type="number" min="0" oninput="this.value = 
        !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null" name="allowed_comp" placeholder="Enter number of competitions " id="username">

        <button type="submit" name="event_btn" class="btn btn-danger">ADD EVENT</button>
        
    </form>
</body>
</html>
<!--partial-->
  
</body>
</html>

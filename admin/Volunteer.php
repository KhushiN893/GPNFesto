<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="cr.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <div class="container">
      <div class="title">Suggest Volnteers</div>
      <div class="content">
        <form action="code.php" method="post">
          <div class="user-details">
            <div class="input-box">
              <span class="details">Full Name</span>
              <input
                type="text"
                name="name"
                placeholder="Enter your name"
                required
              />
            </div>
            <div class="input-box">
              <span class="details">Email</span>
              <input
                type="Email"
                name="mail"
                placeholder="Enter your Email"
                required
              />
            </div>
            <div class="input-box">
              <span class="details">Year</span>
              <input
                type="text"
                name="Year"
                placeholder="Enter your Year"
                required
              />
            </div>
            <div class="input-box">
              <span class="details">Branch</span>
              <input
                type="text"
                name="Branch"
                placeholder="Enter your Branch"
                required
              />
            </div>
            <div class="input-box">
              <span class="details">Volunteer</span>
              <input
                type="text"
                name="vol1"
                placeholder="Enter First Topic"
                required
              />
            </div>
            <div class="input-box">
              <span class="fake">Fake</span>
              <input  type="text"  name="vol2"
                placeholder="Enter Second Topic"
                required/>
            </div>
          </div>
          <div class="button">
            <input type="submit" name="Volunteer" value="Register" />
          </div>
        </form>
      </div>
    </div>
  </body>
</html>

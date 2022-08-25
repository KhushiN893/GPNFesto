<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags-->
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="Colorlib Templates" />
    <meta name="author" content="Colorlib" />
    <meta name="keywords" content="Colorlib Templates" />

    <!-- Title Page-->
    <title>Register Forms by FantacyDesigns</title>

    <!-- Icons font CSS-->
    <link
      href="vendor/mdi-font/css/material-design-iconic-font.min.css"
      rel="stylesheet"
      media="all"
    />
    <link
      href="vendor/font-awesome-4.7/css/font-awesome.min.css"
      rel="stylesheet"
      media="all"
    />
    <!-- Font special for pages-->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
      rel="stylesheet"
    />

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all" />
    <link
      href="vendor/datepicker/daterangepicker.css"
      rel="stylesheet"
      media="all"
    />

    <!-- Main CSS-->
    <link href="hod_form.css" rel="stylesheet" media="all" />
  </head>

  <body>
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
      <div class="wrapper wrapper--w960">
        <div class="card card-2">
          <div class="card-heading"></div>
          <div class="card-body">
            <h2 class="title">Select Competitions</h2>
            <!-- checkbox form -->
            <form action="../code.php" class="sign-up-form" name="form1" method="POST" >
              <div class="form-group mb 3">
                <div class="row">
                  <div class="col-12">
                    <ul>
                      <li>
                        <label class="container1"
                          >Essay
                          <input                             type="checkbox"
                            checked="checked"
                            name="chk[]"
                            value="Essay"
                            onclick="myfun(0)";
                            
                          />
                          <span class="checkmark"></span>
                        </label>
                      </li>

                      <li>
                        <label class="container1"
                          >Speech
                          <input type="checkbox" name="chk[]"
                           value="Speech" 
                           onclick="myfun(1)";/>
                          <span class="checkmark"></span>
                        </label>
                      </li>

                      <li>
                        <label class="container1"
                          >Handwriting
                          <input
                            type="checkbox"
                            name="chk[]"
                            value="Handwriting"
                            onclick="myfun(2)";
                          />
                          <span class="checkmark"></span>
                        </label>
                      </li>

                      <li>
                        <label class="container1"
                          >Debate
                          <input type="checkbox" name="chk[]" value="Debate" 
                          onclick="myfun(3)";/>
                          <span class="checkmark"></span>
                        </label>
                      </li>

                      <li>
                        <label class="container1"
                          >Poster
                          <input type="checkbox" name="chk[]"
                           value="Poster" 
                           onclick="myfun(4)";
                           />
                          <span class="checkmark"></span>
                        </label>
                      </li>

                      <li>
                        <label class="container1"
                          >Reels
                          <input type="checkbox" name="chk[]" 
                          value="Reels"
                          onclick="myfun(5)"; />
                          <span class="checkmark"></span>
                        </label>
                      </li>

                      <li>
                        <label class="container1"
                          >Quiz
                          <input type="checkbox" name="chk[]"
                           value="Quiz"
                           onclick="myfun(6)"; />
                          <span class="checkmark"></span>
                        </label>
                      </li>

                      <li>
                        <label class="container1"
                          >Slogan Making
                          <input
                            type="checkbox"
                            name="chk[]"
                            value="Slogan Making"
                            onclick="myfun(7)";
                          />
                          <span class="checkmark"></span>
                        </label>
                      </li>

                      <li>
                        <label class="container1"
                          >Rangoli
                          <input
                            type="checkbox"
                            name="chk[]"
                            value="Rangoli"
                            onclick="myfun(8)";
                          />
                          <span class="checkmark"></span>
                        </label>
                      </li>

                      <li>
                        <label class="container1"
                          >Patriotic Songs
                          <input
                            type="checkbox"
                            name="chk[]"
                            value="Patriotic Songs"
                            onclick="myfun(9)";
                          />
                          <span class="checkmark"></span>
                        </label>
                      </li>

                      <li>
                        <label class="container1"
                          >Science Exibition
                          <input
                            type="checkbox"
                            name="chk[]"
                            value="Science Exibition"
                            onclick="myfun(10)";
                          />
                          <span class="checkmark"></span>
                        </label>
                      </li>

                      <li>
                        <label class="container1"
                          >Reciting Poem
                          <input
                            type="checkbox"
                            name="chk[]"
                            value="Reciting Poem"
                            onclick="myfun(11)";
                          />
                          <span class="checkmark"></span>
                        </label>
                      </li>

                      <li>
                        <label class="container1"
                          >Summary writing
                          <input
                            type="checkbox"
                            name="chk[]"
                            value="Summary writing"
                            onclick="myfun(12)";
                          />
                          <span class="checkmark"></span>
                        </label>
                      </li>

                      <li>
                        <label class="container1"
                          >Technical Project
                          <input
                            type="checkbox"
                            name="chk[]"
                            value="Technical Project"
                            onclick="myfun(13)";
                          />
                          <span class="checkmark"></span>
                        </label>
                      </li>

                      <li>
                        <label class="container1"
                          >Seminar
                          <input
                            type="checkbox"
                            name="chk[]"
                            value="Seminar"
                            onclick="myfun(14)";
                          />
                          <span class="checkmark"></span>
                        </label>
                      </li>

                      <li>
                        <label class="container1"
                          >Yoga
                          <input type="checkbox" name="chk" value="Yoga" 
                          onclick="myfun(15)";/>
                          <span class="checkmark"></span>
                        </label>
                      </li>

                      <li>
                        <label class="container1"
                          >Paper Presentation
                          <input
                            type="checkbox"
                            name="chk[]"
                            value="Paper Presentation"
                            onclick="myfun(16)";
                          />
                          <span class="checkmark"></span>
                        </label>
                      </li>

                      <li>
                        <label class="container1"
                          >Video editing
                          <input
                            type="checkbox"
                            name="chk[]"
                            value="Video editing"
                            onclick="myfun(17)";
                          />
                          <span class="checkmark"></span>
                        </label>
                      </li>

                      <li>
                        <label class="container1"
                          >Photo editing
                          <input
                            type="checkbox"
                            name="chk[]"
                            value="Photo editing"
                            onclick="myfun(18)";
                          />
                          <span class="checkmark"></span>
                        </label>
                      </li>

                      <li>
                        <label class="container1"
                          >Bug Finding
                          <input
                            type="checkbox"
                            name="chk[]"
                            value="Bug Finding"
                            onclick="myfun(19)";
                          />
                          <span class="checkmark"></span>
                        </label>
                      </li>

                      <li>
                        <label class="container1"
                          >Technical Problem Solving
                          <input
                            type="checkbox"
                            name="chk[]"
                            value="Technical Problem Solving"
                            onclick="myfun(20)";
                          />
                          <span class="checkmark"></span>
                        </label>
                      </li>

                      <li>
                        <label class="container1"
                          >Best student teacher
                          <input
                            type="checkbox"
                            name="chk[]"
                            value="Best student teacher"
                            onclick="myfun(21)";
                          />
                          <span class="checkmark"></span>
                        </label>
                      </li>

                      <li>
                        <label class="container1"
                          >Mathematical Problem Solving
                          <input
                            type="checkbox"
                            name="chk[]"
                            value="Mathematical Problem Solving"
                            onclick="myfun(22)";
                            
                          />
                          <span class="checkmark"></span>
                        </label>
                      </li>
                    </ul>
                  </div>
                </div>
                <br /><br />
                <!-- <div style=" display:flex;">
                <label class="container1">Want to insert your competition : </label>
                <input type="checkbox" name=chk1 id="myCheck" onclick="myFunction(); myfun(23);"><label class="container1">
               
</div> -->
                       
<input id="text" style="display:none" placeholder="Enter Another Competiton">
<input id="text"  name=ename placeholder="Enter Event Name">

               
                <!-- add event textbox -->
            

               

                <!-- limitation for checkboxex -->
                <script type="text/javascript">
                  function myfun(j)
                  {
                   var total = 0;
                    for(var i=0;i<document.form1.chk.length;i++)
                    {
                        if(document.form1.chk[i].checked)
                        {
                            total = total +1;
                        }
                    }
                    if(total>4)
                    {
                        alert("Please select just four competitions")
                        document.form1.chk[j].checked = false
                    }
                    return false;
                  }
              </script>

                <input type="submit" class="btn" name="chk1" value="Submit" />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="hod_form.js"></script>
    <script src="hod_form_js.js"></script>
  </body>
  <!-- This templates was made by FantacyDesigns (https://fantacydesignss.com) -->
</html>
<!-- end -->

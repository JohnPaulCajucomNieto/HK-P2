<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="shortcut icon" href="../images/araullo-university-logo-removebg-preview.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@800&family=Arimo&family=Barlow:wght@500&family=Bebas+Neue&family=Dancing+Script&family=Lobster&family=Montserrat:wght@100;400&family=Quicksand:wght@300&family=Roboto:wght@300&family=Tilt+Warp&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/apply.css">
    <title>HK Application</title>
</head>

<script>
    function sumbit(){
        alert ("Form sumbitted successfully! ")
    }
</script>
<body>
    <div class="main-header p-0">
        <div class="logo">
            <img src="../images/araullo-university-logo-removebg-preview.png">
        </div>
        <div class="navigation">
            <a class="navi1" href="../html/home.html">HOME</a>
            <a class="navi2" href="../html/topics.html">BENEFITS & CONTACT</a>
            <a class="navi3" href="../html/info.html">BRANCES</a>
            <a class="navi3" href="../php/apply.php">APPLY</a>
        </div>

        <div class="searchbar">
            <input class="searchtopic" type="search" placeholder="Search">
            <i class="searchicon fas fa-search"></i>
        </div>

    </div>

    <div id="content">
        <div id="left">
            <div style="background-color: #eee; border: 1px solid black;" class="container">
                <h3>Phinma Araullo University</h3>
            <p style=" color: rgb(24, 47, 126);"> Continue your dreams and aspiration with the help of PHINMA AU and Hawak Kamay Scholarship</p>
            </div>
        </div>
        <div  id="right">
            <div style="background-color: rgb(24, 47, 126); color: white; padding-top: 10px;" class="title">
                <P>HK APPLICATION FOR SCHOLARSHIP</P>
            </div>
            <form method="post" action="insert.php" onsubmit="sumbit()">
                <label for="Full Name">Fullname</label>
                <br>
                <input type="text" id="f_name" name="fname" placeholder="Firstname" style="width: 300px;" required> 
                <input type="text" id="l_name" name="lname" placeholder="Lastname" style="width: 300px;" required> 
                <br>
                <label for="Email">Email</label>
                <br>
                <input type="email" id="e_mail" name="email" placeholder="ex:au.gmail.com" style="width: 655px;" required> 
                <br>
                <label for="Birtday">Birthday</label>
                <br>
                <input type="date" id="_day" name="day" style="width: 655px;"required >
                <br>
                <label for="phone">Phone No.</label>
                <br>
                
             
                <input type="text" id="num" name="no" placeholder="+63" style="width: 655px;" required>
                <br>
                <label for="phone">Age</label>
                <br>
                <input type="text" id="num" name="no" placeholder="ex:18" style="width: 655px;" required>
                <br>
                

                <label for="phone">Facebook Link</label>
                <br>
                <input type="text" id="num" name="fb" placeholder="" style="width: 655px;" required>
                <br>



                <div style="display: flex; flex-direction: row; gap: 20px;">
                    <div>
                        <label for="Gender">Gender:</label>
                        <select id="_Course" name="gender" required>
                            <option value="Choose">Choose</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                
                    <div>
                        <label for="civilstatus">Civil Status:</label>
                        <select id="_Course" name="status" required>
                            <option value="Choose">Choose</option>
                            <option value="Single">Single</option>
                            <option value="Married">Married  </option>
                            <option value="Divorced">Divorced </option>
                            <option value="Widowed">Widowed</option>
                        </select>
                    </div>
                </div>

                <div style="display: flex; flex-direction: row; gap: 20px;">
                    <div>
                        <label for="Course">Course:</label>
                        <select id="_Course" name="course" required>
                            <option value="Choose">Choose</option>
                            <option value="BSIT">Bachelor of Science in Information Technology</option>
                            <option value="BSED">Bachelor of Secondary Education</option>
                            <option value="BSA">Bachelor of Science in Accountancy</option>
                            <option value="BSAcT">Bachelor of Science in Accounting Technology</option>
                            <option value="BPS">Bachelor in Political Science</option>
                            <option value="BSP">Bachelor of Science in Pharmacy</option>
                            <option value="BSN">Bachelor of Science in Nursing</option>
                            <option value="BSHRM">Bachelor of Science in Hotel Restaurant and Management</option>
                            <option value="BSTM">Bachelor of Science in Tourism Management</option>
                            <option value="BSCE">Bachelor of Science in Civil Engineering</option>
                        </select>
                    </div>
                
                    <div>
                        <label for="School">Campus you'd like to enroll:</label>
                        <select id="_campus" name="campus" required>
                            <option value="Choose">Choose</option>
                            <option value="San Jose">San Jose</option>
                            <option value="Araullo Main - Cabanatuan">Araullo Main - Cabanatuan</option>
                            <option value="Araullo South - Cabanatuan">Araullo South - Cabanatuan</option>
                        </select>
                    </div>
                </div>
                
             
            
                <label for="phone">Complete Address</label>
                <br>
                <input type="text" id="address" name="add" placeholder="Ex:Barangay Bitas, Maharlika Highway, Cabanatuan City, Philippines" style="width: 655px;" required>
                <br>

                <label for="school">Last School Attended</label>
                <br>
                <input type="text" id="_school" name="school" placeholder="Ex:Phinma Aruallo-South" style="width: 655px;" required>
                <br>
                <label for="Full Name">Mother Name</label>
                <br>
                <input type="text" id="f_fname" name="mother_fname" placeholder="Firstname" style="width: 300px;" required> 
                <input type="text" id="f_lname" name="mother_lname" placeholder="Lastname" style="width: 300px;" required> 
                <br>
                <input type="text" id="f_fname" name="mother_occupation" placeholder="Occupation" style="width: 300px;" required> 
                <input type="text" id="f_lname" name="mother_income" placeholder="Income Monthly" style="width: 300px;" required> 
                <br>
                <label for="Full Name">Father Name</label>
                <br>
                <input type="text" id="m_fname" name="father_fname" placeholder="Firstname" style="width: 300px;" required> 
                <input type="text" id="m_lname" name="father_lname" placeholder="Lastname" style="width: 300px;" required>
                <br>
                <input type="text" id="f_fname" name="father_occupation" placeholder="Occupation" style="width: 300px;" required> 
                <input type="text" id="f_lname" name="father_income" placeholder="Income Monthly" style="width: 300px;" required> 
                <br>
                <button  style="background-color:  rgb(24, 47, 126); color:white; cursor: pointer; width: 300px; position: relative; right:  90px;" type="submit" value="submit"> Apply</button>
            </form>
        </div>
    </div>
    <footer class="ft">
        <img class="ic"src="../logo/logo.png">
    </footer>   
</body>
</html>
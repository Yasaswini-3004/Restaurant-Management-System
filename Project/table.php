<!DOCTYPE html>
<html>
    <head>
       <title>Table Booking</title> 
       <h2 id="head">Table Reservation</h2>
    </head>
    <style>
        body{
            background-image: url("table.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            color: aliceblue;
            background-position: center-bottom;
            font-family: sans-serif;
            max-width: 100%;
        }
        #head{
            text-align: center;
            font-family: Times New Roman;
            color:MidnightBlue ;
            background-color:Wheat ;
            padding:2px;
            width:250px;
            margin-left:590px;
        }

       
        #drop{
            width: 425px; 
            height: 45px;
        }

        #content{
            color: red;
        }
        

        .form{
            position:absolute;
            z-index: 1;
            max-width:440px;
            margin:0 auto 150px;
            margin-top:0px;
            padding:50px;
            max-height:1000px;
            left: 33.33%;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0, 0.5); /* Black w/opacity/see-through */
        }
        .form input{
            outline: none;
            background:white;
            border:70;
            width: 100%;
            margin: 0 0 15px;
            padding: 8px;
            box-sizing: border-box;
            font-size: 14px;
        }
        h3{
         color: Maroon;
         background-color:Gainsboro ;
         padding:5px;
         width:180px;
         margin:0px;
        }
        .radio-toolbar {
          margin: 10px;
        }
       .radio-toolbar input[type="radio"] {
         opacity: 0;
         position: fixed;
         width: 0;
        }
        .radio-toolbar label {
          display: inline-block;
          background-color:peru;
          padding: 10px 20px;
          font-family: sans-serif, Arial;
          font-size: 16px;
          border: 2px solid #444;
          border-radius: 4px;
        }
        .radio-toolbar label:hover {
           background-color: PowderBlue;
        }
        .radio-toolbar input[type="radio"]:focus + label {
          border: 2px dashed #444;
        }
        .radio-toolbar input[type="radio"]:checked + label {
          background-color: salmon;
          border-color: blue;
        }
    </style>
    <body>
        
        <div class ="form">
        <form action="tableaction.php" method="POST">
            
            <input type="text" name = "name" placeholder="Name"><br><br>
            <input type="text" name = "mail" placeholder="E-Mail ID"><br><br>
            <input type="text" name = "mobile" placeholder="Mobile Number"><br><br>
            <label>Date of Reservation </label><br>
            <input type="date" name = "dates"><br><br>
            Seating Capacity:
              <div class = "radio-toolbar">
                <input type="radio" id="one" name="ans" value="one" checked>
                <label for = "one">One</label>
                <input type="radio" id="two" name="ans" value="two">
                <label for = "two">Two</label>
                <input type="radio" id="four" name="ans" value="four">
                <label for = "four">Four</label>
                <input type="radio" id="six" name="ans" value="six">
                <label for = "six">Six</label>
                <input type="radio" id="custom" name="ans" value="custom">
                <label for = "custom">Custom</label>
              </div>
             <br>
             <br>
            <label>Time-slot:(9AM-11PM)</label><br>
            <input type="time" id="time" name="tim" min="09:00" max="23:00" required> <br> <br>
            <label>Customer Type: </label> <br>
            
            <select name="drop" id = "drop"> 
            <option value="select" id = "content" >--- SELECT ---</option>
            <option value="New" id = "content">New Customer</option>
            <option value="GOLD" id = "content">Gold</option> 
            <option value="SILVER" id = "content">Silver</option> 
            <option value="DIAMOND" id = "content">Diamond</option> 
            <option value="PLATINUM" id = "content">Platinum</option> 
            </select> <br> <br> 
            <br> <input type="submit" value="SUBMIT" name="submit" onclick="success()">
        </form>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <marquee><h3> Have a great day!🤩</h3></marquee>
    </body>
    <script type="text/javascript">
        function success(){
        alert("Table Booked!!");}
    </script>
</html>
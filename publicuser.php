
  <style>.registerbtn {
      background-color:#1A5276;
      color: white;
      padding: 12px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 10%;
      opacity: 0.9;
      border-radius: 4px;
    }






.header {
  padding: 50px;
  text-align: left;
  background:#DCC7AA;
  color:#8F5B34;
  max-height: 350px;
}

.navbar {
  overflow: hidden;
  background-color: #8D9B6A;
  position: sticky;
  position: -webkit-sticky;
  top: 0;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}


/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Active/current link */
.navbar a.active {
  background-color: #666;
  color: white;}




/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
}


table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}


</style>
<form method="POST">

   <div class="header">
    
    <center><h1>NAMMA BENGALURU</h1></center>
    <center><p> Lets stand together and make Bengaluru a Better place to live</p></center>
    </div>

    <div class="navbar">
     <a href="hackhome.html">Home</a>
     <a href="index.html">User</a>
     <a href="hackvol.html">Volunteer</a>
     <a href="publicuserregis.html" class="active">NGO</a>
     <a href="#footerid" class="right">Contact us</a>
     <a href="hackfeedback.html" class="right">Feedback</a>
   </div>
    

   

<?php


    if (isset($_POST["submit_coordinates"]))
    {
        $latitude = $_POST["latitude"];
        $longitude = $_POST["longitude"];
        ?>

        <iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $latitude; ?>,<?php echo $longitude; ?>&output=embed"></iframe>

        <?php
    }
?>

<form method="POST">

    <p>
        <input type="text" name="latitude" id="latitude" placeholder="Enter latitude">
    </p>

    <p>
        <input type="text" name="longitude" id="longitude"placeholder="Enter longitude">
    </p>

    <input class="registerbtn" type="submit" value="Find Location" name="submit_coordinates">






<table id="table">
  <tr>
    <th>Pothole image</th>
    <th>latitude</th>
    <th>longitude</th>
  </tr>
  <tr>
    <td><img src="p1.jpg" alt="" border=3 height=150 width=150></img></td>
    <td>13.0184</td>
    <td>77.5597</td>
  </tr>
  <tr>
    <td><img src="p2.jpg" alt="" border=3 height=150 width=150></td>
    <td>12.9092</td>
    <td>77.5666</td>
  </tr>
  <tr>
    <td><img src="p4.jpg" alt="" border=3 height=150 width=150></td>
    <td>13.1295</td>
    <td>77.5877</td>
  </tr>
  <tr>
    <td><img src="p3.jpg" alt="" border=3 height=150 width=150></td>
    <td>12.9792264</td>
    <td>77.5802611</td>
  </tr>
 
</table>


<p>
<a href="reportngo.html">REPORT WORK DONE</a></p>




</form>

        
        <script>
    
                var table = document.getElementById('table');
                
                for(var i = 1; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                         //rIndex = this.rowIndex;
                         document.getElementById("latitude").value = this.cells[1].innerHTML;
                         document.getElementById("longitude").value = this.cells[2].innerHTML;
                        
                    };
                }
    
         </script>














<title>Attendance.in</title><style type="text/css">
<!--
.style1 {
	font-family: "Courier New", Courier, monospace;
	font-size: 60px;
	color: #FFFFFF;
	font-style: italic;
}
.style2 {
	font-size: 24px;
	color: #0000FF;
}
.style6 {font-size: 16px}
-->
</style></head>

<body>
<table width="800" border="1" align="center">
      <tr>
        <td bordercolor="#330033" bgcolor="#CCCCFF"><h1 align="center"><strong><span class="style1">Attendance System</span></strong></h1></td>
      </tr>
      <tr>
        <td bgcolor="#999966"><div align="center">
       						<?php 
									include "menu.php";
							?> 
        				</div>       </td>
      </tr>
      <tr>
        <td><div align="center">
        <form action="insertmember.php" method="post">
          <table width="400" border="2" align="center" bordercolor="#9966FF" bgcolor="#C7B6B1">
            <tr>
              <td colspan="2" bgcolor="#9999CC"><div align="center"><strong><span class="style2">Enter the member information</span></strong></div></td>
            </tr>
            <tr>
              <td><span class="style6">Enrollment_No</span></td>
              <td><span class="style6"><input type="number_format" name="enrollment_no" /></span></td>
            </tr>
            <tr>
              <td width="160"><span class="style6">Name</span></td>
              <td width="222"><span class="style6"><input type="text" name="name" /></span></td>
            </tr>
           
            
            <tr>
              <td colspan="2"><div align="center">
                <input type="submit" value="Add Member" name="btnsubmit"/>
                &nbsp;&nbsp;
                <input type="reset" value="Reset" name="btnreset"/>
              </div></td>
            </tr>
          </table>
          </form>
        </div></td>
      </tr>
    </table>
<?php include "footer.php"; ?>
</body>
</html>

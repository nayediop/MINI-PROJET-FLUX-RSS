<?php require_once('connexion.php');


	$reqselect="select * from articles order by datepublication DESC";
	$result=mysqli_query($conn,$reqselect);

	$nbr1=mysqli_num_rows($result);
     
?>
<!DOCTYPE html>
<html lang="en">
    <meta charset="utf-8">

<head>
  <!--<meta charset="utf-8"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Mini Projet Flux RSS</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="lib/advanced-datatable/css/demo_page.css" rel="stylesheet" />
  <link href="lib/advanced-datatable/css/demo_table.css" rel="stylesheet" />
  <link rel="stylesheet" href="lib/advanced-datatable/css/DT_bootstrap.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a class="logo"><b><span>LISTE DES ARTICLES PUBLIES</span> </b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        
          
        <!--  notification end -->
      </div>
      
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
     <!--**********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <!--<section id="main-content"> -->
      <section class="wrapper">
        
          
          
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                 <thead>

	 <tr>
        
         <th></th>
         <th>Date publication</th>
         <th>Titres</th>
	 	 <th>Extraits</th>
	 	 
         
         
         <th></th>
        

	 </tr>
	</thead>
                  
        <tbody>
	 <?php 
	 while($ligne=mysqli_fetch_array($result))
	 {

	  ?>
	  <tr>
          <td width="5"><a href="https://www.lemonde.fr/actualite-medias/"><i class="fa fa-eye" ></i></a></td>
          <td><?php echo $ligne['datepublication'];?></td>
            <td><?php echo $ligne['titre'];?></td>
            <td><?php echo $ligne['extrait'];?></td>
            
            
                 
            <td>
                <a href="editerarticle.php?mod=<?php echo $ligne['id'];?>"><button class="btn btn-primary btn-xs"><i class="fa fa-edit" ></i></button></a>
	  	    <!--<a href="supprimer.php?supp=<?php /// echo $ligne['idenquete'];?>"><button id="sup" class="btn btn-danger btn-xs"><i class="fa fa-trash" ></i></button></a>-->
          
          </td>
          
         <!--<button class="fa fa-trash"   onClick="deleteme(<?php echo $ligne['id'];?>)" name="Delete" class="btn btn-danger btn-xs"></td>-->
                  <?php
                  }
                  ?>
          
	  	
	  </tr>
            <script language="javascript">
            function deleteme(delid)
            {
                if(confirm("Êtes-vous sur de bien vouloir supprimer?")){
                    window.location.href='supprimer.php?supp=' +delid+'';
                    return true;
                
                }
            
            }
            </script>

	 <?php
		
	   ?>
                </tbody>
              </table>
            </div>
          </div>
           
          <!-- page end-->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
        Mini Projet Flux RSS
        </div>
        <a href="index.php" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="lib/advanced-datatable/js/DT_bootstrap.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
 <script type="text/javascript">
    /* Formating function for row details */
      
   

    $(document).ready(function() {
      /*
       * Insert a 'details' column to the table
       */
      var nCloneTh = document.createElement('th');
      var nCloneTd = document.createElement('td');
      nCloneTd.innerHTML = '<i class="fa fa-circle" width="5"></i>';
      nCloneTd.className = "center";

      

      /*
       * Initialse DataTables, with no sorting on the 'details' column
       */
      var oTable = $('#hidden-table-info').dataTable({
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [0]
        }],
        "aaSorting": [
          [1, 'desc']
        ]
      });

      /* Add event listener for opening and closing details
       * Note that the indicator for showing which row is open is not controlled by DataTables,
       * rather it is done here
       */
      
    });
  </script>
</body>

</html>

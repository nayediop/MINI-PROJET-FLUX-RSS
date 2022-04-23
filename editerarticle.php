<?php 
require_once('connexion.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
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
      <a class="logo"><b><span>Formulaire de modification</span></b></a>
      <!--logo end-->
      
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
     <!--main content start-->
    
      <section class="wrapper">
       
        <!-- FORM VALIDATION -->
        <div class="row mt">
          <div class="col-lg-13">
            <h4><i class="fa fa-angle-right"></i>Formulaire de modification</h4>
            <div class="form-panel">
              <div class=" form">
                  
                  <?php require_once('connexion.php');

				   if(isset($_POST['btmodifier']))
{
                        
                        $prenom=$_POST['txtprenomenqueteur'];
                        
                        $dep=$_POST['txtdepartement'];
                        
                       
                       $id = $_GET['mod'];

					$reqMOD="UPDATE articles SET titre='$prenom', extrait='$dep' WHERE id='$id'";
                       
                       $resultat=mysqli_query($conn,$reqMOD) or die($reqMOD); 
                       
                       if($resultat)
   {
                           
        echo '<script> alert("Mise à jour des données réussit") </script>';
                           
        //header("location:liste_article.php");
    }
                      
    else
    {
        echo '<script> alert("Echec de la mise à jour des données") </script>';
    } 						

}				

   				
    $id = $_GET['mod'];
    $query = "SELECT * FROM articles WHERE id='$id' ";
$query_run = mysqli_query($conn,$query);
while($row = mysqli_fetch_array($query_run))
{
  
      ?>    
                  
                <form class="cmxform form-horizontal style-form" id="commentForm" method="post" action="" enctype="multipart/form-data">
                    
                    <div class="form-group ">
                      
                    
                      <label for="cname" class="control-label col-lg-2">Titre *</label>
                    <div class="col-lg-2">
                      <input class=" form-control" id="cname" name="txtprenomenqueteur" value="<?php echo $row['titre'] ?>" minlength="" type="text"/>
                    </div>
                      
                      
                  </div>
                    
                  <div class="form-group ">
                      
                    
                      <label for="cname" class="control-label col-lg-2">Extrait *</label>
                    <div class="col-lg-2">
                      <input class=" form-control" id="cname" name="txtdepartement" value="<?php echo $row['extrait'] ?>" minlength="" type="text"  />
                    </div>
                      
                      
                  
                        
                   
                         <div class="col-lg-4">
                      <input class=" form-control" id="cname" name="txtidenquete" value="<?php echo($_GET['mod'])?>" type="hidden" />
                       <div class="col-lg-offset-3 col-lg-9">
                      <button class="btn btn-theme" type="submit" name="btmodifier">Mettre à jour</button></a>
                                      
                      <button class="btn btn-theme04" type="button"><a href="index.php">Fermer</a></button>
                            </div> 
                         
                  </div>
                  
                  </div>
                  </div>
                </form>
        <?php
}
?>
                  
                  
                    
                     
                    
              </div>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
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
    function fnFormatDetails(oTable, nTr) {
      var aData = oTable.fnGetData(nTr);
      var sOut = '<table cellpadding="12" cellspacing="1px" border="0" style="padding-left:50px;">';
      sOut += '<tr><td>Province:</td><td>' + aData[1] + '</td></tr>';
      sOut += '<tr><td>Département:</td><td>' + aData[2] + '</td></tr>';
      sOut += '<tr><td>Commune:</td><td>' + aData[3] + '</td></tr>';
        sOut += '<tr><td>Canton:</td><td>' + aData[4] + ' </td></tr>';
      sOut += '<tr><td>Village:</td><td>' + aData[5] + '</td></tr>';
      sOut += '<tr><td>Population:</td><td>' + aData[6] + '</td></tr>';
      sOut += '</table>';

      return sOut;
    }

    $(document).ready(function() {
      /*
       * Insert a 'details' column to the table
       */
      var nCloneTh = document.createElement('th');
      var nCloneTd = document.createElement('td');
      nCloneTd.innerHTML = '<img src="lib/advanced-datatable/images/details_open.png">';
      nCloneTd.className = "center";

      $('#hidden-table-info thead tr').each(function() {
        this.insertBefore(nCloneTh, this.childNodes[0]);
      });

      $('#hidden-table-info tbody tr').each(function() {
        this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
      });

      /*
       * Initialse DataTables, with no sorting on the 'details' column
       */
      var oTable = $('#hidden-table-info').dataTable({
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [0]
        }],
        "aaSorting": [
          [1, 'asc']
        ]
      });

      /* Add event listener for opening and closing details
       * Note that the indicator for showing which row is open is not controlled by DataTables,
       * rather it is done here
       */
      $('#hidden-table-info tbody td img').live('click', function() {
        var nTr = $(this).parents('tr')[0];
        if (oTable.fnIsOpen(nTr)) {
          /* This row is already open - close it */
          this.src = "lib/advanced-datatable/media/images/details_open.png";
          oTable.fnClose(nTr);
        } else {
          /* Open this row */
          this.src = "lib/advanced-datatable/images/details_close.png";
          oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
        }
      });
    });
      
  </script>
<script>
	
</script>
</body>

</html>

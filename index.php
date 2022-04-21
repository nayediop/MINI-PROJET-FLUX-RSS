<!DOCTYPE html>
<html lang="en">
    <meta charset="utf-8">

<head>
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <title>Mini Projet Flux RSS</title>
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="lib/advanced-datatable/css/demo_page.css" rel="stylesheet" />
  <link href="lib/advanced-datatable/css/demo_table.css" rel="stylesheet" />
  <link rel="stylesheet" href="lib/advanced-datatable/css/DT_bootstrap.css" />
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

 
</head>

<body>
  <section id="container">
      
       <!--header-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      
      <a class="logo"><b><span>LISTE DES ARTICLES PUBLIES</span> </b></a>
     
    </header>
    <!--header end-->
      
    
      <section class="wrapper">
        
      
      
    <section id="container">
     <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                 <thead>

	 <tr>
         
         <th>Articles</th>
	 	        
         <th>Action</th>
       
	 </tr>
                                 
	</thead>
                  
        <tbody>
            
             <?php
            $rss_link = "http://www.lemonde.fr/rss/en_continu.xml";
            $rss_load = simplexml_load_file($rss_link);
            foreach($rss_load->channel->item as $item){
               //echo $item->title; 
               ?>
                     <tr>
                         
                         <td>
                         <a href="<?= $item->link ?>"><span class="title"><b><?= $item->title ?></b></span></a>
               <br><span class="description"><?= $item->description ?><br>
                                          
                          </td>
                          <td>
               <button class="btn btn-primary btn-xs"><i class="fa fa-edit" ></i></button>
               <button id="sup" class="btn btn-danger btn-xs"><i class="fa fa-trash" ></i></button>
                         </td>
                     </tr>
               <?php
            }
        ?>
            
	     </tbody>
    </table>
        </div>
        </div>
        
         </div>

      </section>
      
    </section>
        
         
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
          [1, 'asc']
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
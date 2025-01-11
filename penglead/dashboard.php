<?php //error_reporting(1); ?>
<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php include('./constant/layout/sidebar.php');?>   
<?php 


$lowStockSql = "SELECT * FROM product WHERE status = 1";
$lowStockQuery = $connect->query($lowStockSql);
$countLowStock = $lowStockQuery->num_rows;

$lowStockSql1 = "SELECT * FROM brands WHERE brand_status = 1";
$lowStockQuery1 = $connect->query($lowStockSql1);
$countLowStock1 = $lowStockQuery1->num_rows;

$date=date('Y-m-d');
    $lowStockSql3 = "SELECT * FROM product WHERE  expdate<'".$date."' AND status = 1";
    //echo "SELECT * FROM product WHERE  expdate<='".$date."' AND status = 1" ;exit;
$lowStockQuery3 = $connect->query($lowStockSql3);
$countLowStock3 = $lowStockQuery3->num_rows;

$lowStockSql2 = "SELECT * FROM orders WHERE order_status =1";
$lowStockQuery2= $connect->query($lowStockSql2);
$countLowStock2 = $lowStockQuery2->num_rows;

 $leadsql = "SELECT * FROM lead where lead_status=1";
$leadquery = $connect->query($leadsql);
$countlead = $leadquery->num_rows;

$newleadsql = "SELECT * FROM lead where lead_status=1 and status=1";
$leadnewquery = $connect->query($newleadsql);
$countnewlead = $leadnewquery->num_rows;

$workleadsql = "SELECT * FROM lead where lead_status=1 and status=2";
$leadworkquery = $connect->query($workleadsql);
$countworklead = $leadworkquery->num_rows;

$contactleadsql = "SELECT * FROM lead where lead_status=1 and status=3";
$leadcontactquery = $connect->query($contactleadsql);
$countcontactlead = $leadcontactquery->num_rows;



$qualifiedleadsql = "SELECT * FROM lead where lead_status=1 and status=4";
$leadqualifiedquery = $connect->query($qualifiedleadsql);
$countqualifiedlead = $leadqualifiedquery->num_rows;

$failedleadsql = "SELECT * FROM lead where lead_status=1 and status=5";
$leadfailedquery = $connect->query($failedleadsql);
$countfailedlead = $leadfailedquery->num_rows;

$closedleadsql = "SELECT * FROM lead where lead_status=1 and status=6";
$leadclosedquery = $connect->query($closedleadsql);
$countclosedlead = $leadclosedquery->num_rows;
//$connect->close();

?>
  
<style type="text/css">
    .ui-datepicker-calendar {
        display: none;
    }
</style>
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
        <div class="page-wrapper" style="background-color: #283179;">
            
        <!--     <div class="row page-titles">
                <div class="col-md-12 align-self-center">
                    <div class="float-right"><h3 style="color:black;"><p style="color:black;"><?php echo date('l') .' '.date('d').'- '.date('m').'- '.date('Y'); ?></p></h3>
                    </div>
                    </div>
                
            </div> -->
            
            
            <div class="container-fluid ">
                
                 <div class="row">
                <div class="col-md-3 dashboard">
                       <div class="card" style="background: #fff">
                           <div class="media widget-ten align-items-center">
                               <div class="media-left meida media-middle">
                                   <span><i class="ti-agenda"></i></span>
                               </div>
                               <div class="media-body media-text-right">
                                
                           
                                   <h2 class=""><?php echo $countLowStock; ?></h2>
                                   <a href="product.php"><p class="m-b-0">Total  Services/Product</p></a>
                               </div>
                           </div>
                       </div>
                   </div> 
                   <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                    <div class="col-md-3 dashboard">
                        <div class="card" style="background:#fff ">
                            <div class="media widget-ten align-items-center">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-widget"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                                        
                    
                    
                            
                                    <h2 class="color-white"><?php echo $countLowStock1; ?></h2>
                                     <a href="product.php"><p class="m-b-0">Total Business Type</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                                       <?php }?>
                                       <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                   <div class="col-md-3 dashboard">
                      <div class="card" style="background-color: #fff">
                          <div class="media widget-ten align-items-center">
                              <div class="media-left meida media-middle">
                                  <span><i class="ti-vector"></i></span>
                              </div>
                              <div class="media-body media-text-right">
                                  
                          <h2 class="color-white"><?php echo $countLowStock2; ?></h2>
                                  <a href="Order.php"><p class="m-b-0">Total Invoices</p></a>
                              </div>
                          </div>
                      </div>
                  </div>
                                 <?php }?>
                                 <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                    <div class="col-md-3 dashboard">
                        <div class="card" style="background:#fff ">
                            <div class="media widget-ten align-items-center">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-receipt"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                                        
                    
                    
                            
                                    <h2 class="color-white"><?php echo $countlead; ?></h2>
                                     <a href="lead.php"><p class="m-b-0">Total Leads</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                                       <?php }?>


                                        <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                    <div class="col-md-3 dashboard">
                        <div class="card" style="background:#fff ">
                            <div class="media widget-ten align-items-center">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-new-window"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                                        
                    
                    





                            
                                    <h2 class="color-white"><?php echo $countnewlead; ?></h2>
                                     <a href="new-lead.php"><p class="m-b-0">Total New Leads</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                                       <?php }?> <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                    <div class="col-md-3 dashboard">
                        <div class="card" style="background:#fff ">
                            <div class="media widget-ten align-items-center">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-pencil-alt"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                                        
                    
                    
                            
                                    <h2 class="color-white"><?php echo $countworklead; ?></h2>
                                     <a href="working-lead.php"><p class="m-b-0">Total Working Leads</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                                       <?php }?> <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                    <div class="col-md-3 dashboard">
                        <div class="card" style="background:#fff ">
                            <div class="media widget-ten align-items-center">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-mobile"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                                        
                    
                    
                            
                                    <h2 class="color-white"><?php echo $countcontactlead; ?></h2>
                                     <a href="contact-lead.php"><p class="m-b-0">Total Contacted Leads</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                                       <?php }?> <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                    <div class="col-md-3 dashboard">
                        <div class="card" style="background:#fff ">
                            <div class="media widget-ten align-items-center">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-bookmark"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                                        
                    
                    
                            
                                    <h2 class="color-white"><?php echo $countqualifiedlead; ?></h2>
                                     <a href="qualified-lead.php"><p class="m-b-0">Total Qualified Leads</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                                       <?php }?> <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                    <div class="col-md-3 dashboard">
                        <div class="card" style="background:#fff ">
                            <div class="media widget-ten align-items-center">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-alert"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                                        
                    
                    
                            
                                    <h2 class="color-white"><?php echo $countfailedlead; ?></h2>
                                     <a href="failed-lead.php"><p class="m-b-0">Total Failed Leads</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                                       <?php }?> <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                    <div class="col-md-3 dashboard">
                        <div class="card" style="background:#fff ">
                            <div class="media widget-ten align-items-center">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-close"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                                        
                    
                    
                            
                                    <h2 class="color-white"><?php echo $countclosedlead; ?></h2>
                                     <a href="closed-lead.php"><p class="m-b-0">Total Closed Leads</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                                       <?php }?>

                                 <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                  
                                 <?php }?>
                   
                   
                  
     <div class="col-md-12">
<div class="card">
                            <div class="card-header">
                                <strong class="card-title">New Leads</strong>
                                
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                              <th>#</th>
                            <th>Lead Name</th>
                            <th>Phone</th>                           
                            <th>Email </th>
                            <th>City</th>
                            <th>Interested In</th>
                            <th>Source</th>
                          
                                                
                                            </tr>
                                       </thead>
                                       <tbody>
                                        <?php
                                        //include('./constant/connect');

 $sql = "SELECT * FROM lead where lead_status=1 and status=1";
 //echo $sql;exit;
$result=$connect->query($sql);
//print_r($result);exit;
foreach ($result as $row) {
     
$no+=1;
    ?>
                                        <tr>
                                           <td class="text-center"><?php echo $no ?></td>
                                                
                                            <td class="text-center"><?php echo $row['lead_name'] ?></td>
                                            <td><?php echo $row['phone'] ?></td>
                                           
                                               <td><?php echo $row['email'] ?></td> 
                                               <td><?php echo $row['city'] ?></td> 
                                    
                                             <td><?php echo $row['interest'] ?></td>
                                              <td><?php echo $row['source'] ?></td>
                                              
                                           
                                             
                                           
                                            
                                        </tr>
                                     
                                    </tbody>
                                   <?php    
}

?>
                               </table>
                                </div>
                            </div>
                            
                    </div>
                </div>
                </div>
        <div class="row">
            <div class="col-md-6">
                <div id="myChart" style="width:100%; max-width:600px; height:500px;">
                    </div>
            </div>
            <div class="col-md-6">
                
            <div id="myChart1" style="width:100%; max-width:600px; height:500px;"></div>
            </div>
        </div>


<?php
//error_reporting(0);
//require_once('../constant/connect.php');
 $qqq = "SELECT * FROM product WHERE  status ='1' ";
$result=$connect->query($qqq);
//print_r($result);exit;
foreach ($result as $row) {

  //print_r($row);
    $a.=$row["product_name"].',';
    $b.=$row["quantity"].',';
   

 }
    $am= explode(",",$a,-1);
     $amm= explode(",",$b,-1);
     //print_r($a);
     //print_r($b);

  $cnt=count($am);

  $datavalue1='';
                    for($i=0;$i<$cnt;$i++){ 
 $datavalue1.="['".$am[$i]."',".$amm[$i]."],";
         }
          //echo 

 $datavalue1; //used this $data variable in js
?>


                
            </div>
        </div>
    </div>

            
            <?php include ('./constant/layout/footer.php');?>
        <script>
        $(function(){
            $(".preloader").fadeOut();
        })
        </script>
        <script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
var data = google.visualization.arrayToDataTable([ ['Contry', 'Mhl'],<?php echo $datavalue1;?>]);

var options = {
  title:'World Wide Wine Production',
  is3D:true
};

var chart = new google.visualization.PieChart(document.getElementById('myChart'));
  chart.draw(data, options);

  var chart = new google.visualization.BarChart(document.getElementById('myChart1'));
  chart.draw(data, options);
}
</script>
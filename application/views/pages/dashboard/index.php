<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">


</head>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        
        <div class="col-xl-3 col-md-6 mb-4">
        <a class="collapse-item" href="<?php echo base_url();?>index.php/Client/">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                               Data contact</div>
                        
                            <?php foreach($client as $all){ ?>                            
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $all->client_all ?></div>                           
                            <?php } ?>
                            
                        </div>
                      
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
    

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
        <a class="collapse-item" href="<?php echo base_url();?>index.php/Prospective_Client/">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Prospective</div>                                 
                            <?php foreach($prospective as $pros){ ?>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $pros->client_prospective ?></div>
                            <?php } ?>
                            
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
        <a class="collapse-item" href="<?php echo base_url();?>index.php/recapitulation/">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Process</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                   
                            <?php foreach($process as $proc){ ?>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $proc->client_process ?></div>
                            <?php } ?>
                           
                                </div>
                               <!--  <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar"
                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
                </a>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
        <a class="collapse-item" href="<?php echo base_url();?>index.php/project/">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Closing</div>
                             <?php foreach($closing as $cl){ ?>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $cl->client_closing ?></div>
                            <?php } ?>
                            <?php foreach($project as $p){ ?>
                            <div class=" mb-0 font-weight-bold text-gray-800">Project : <?php echo $p->project ?></div>
                            <?php } ?>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>
  </div>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">AMC Smart System</h1>
    <p class="mb-4">
                    Enginering, Management Consultant &
                    Services for the Environment, Safety & Health
    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Summary Working Log</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <form method="post" action="<?php echo base_url(); ?>index.php/dashboard/index">
                <table border="0" cellspacing="5" cellpadding="5" align="right">
                  <tbody>
                    <tr>
                        <td>                                    
                            <b>Date : </b>
                            <input id="bday-month" type="month" name="month" value="<?php echo date('Y-m')?>">
                            <input type="submit" class="btn btn-success btn-sm" value="Select">
                        </td>
                    </tr>
                    </tbody>
                </table>
                </form>
               <table class="table table-bordered" id="dataTablex" width="100%" cellspacing="0" border="1">
                <thead>
                 <tr>
                    <th rowspan="2" width="2%">No</th>
                    <th rowspan="2" width="15%">Name</th>
                    <th colspan="31" >Bulan <?php echo date('M');?></th>
                    <th rowspan="2" width="2%">Total</th>
                  </tr>
                  <tr>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                    <th>6</th>
                    <th>7</th>
                    <th>8</th>
                    <th>8</th>
                    <th>10</th>
                    <th>11</th>
                    <th>12</th>
                    <th>13</th>
                    <th>14</th>
                    <th>15</th>
                    <th>16</th>
                    <th>17</th>
                    <th>18</th>
                    <th>18</th>
                    <th>20</th>
                    <th>21</th>
                    <th>22</th>
                    <th>23</th>
                    <th>24</th>
                    <th>25</th>
                    <th>26</th>
                    <th>27</th>
                    <th>28</th>
                    <th>28</th>
                    <th>30</th>
                    <th>31</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $total = 0; $id = 1; foreach($score as $swl) 
     
                    
                    { ?>
                  <tr>
                    <td><?php echo $id++ ?></td>
                    <td><?php echo $swl->name ?></td>
                    <td><?php echo $swl->tgl1; ?></td>
                    <td><?php echo $swl->tgl2; ?></td>
                    <td><?php echo $swl->tgl3; ?></td>
                    <td><?php echo $swl->tgl4; ?></td>
                    <td><?php echo $swl->tgl5; ?></td>
                    <td><?php echo $swl->tgl6; ?></td>
                    <td><?php echo $swl->tgl7; ?></td>
                    <td><?php echo $swl->tgl8; ?></td>
                    <td><?php echo $swl->tgl9; ?></td>
                    <td><?php echo $swl->tgl10; ?></td>
                    <td><?php echo $swl->tgl11; ?></td>
                    <td><?php echo $swl->tgl12; ?></td>
                    <td><?php echo $swl->tgl13; ?></td>
                    <td><?php echo $swl->tgl14; ?></td>
                    <td><?php echo $swl->tgl15; ?></td>
                    <td><?php echo $swl->tgl16; ?></td>
                    <td><?php echo $swl->tgl17; ?></td>
                    <td><?php echo $swl->tgl18; ?></td>
                    <td><?php echo $swl->tgl19; ?></td>
                    <td><?php echo $swl->tgl20; ?></td>
                    <td><?php echo $swl->tgl21; ?></td>
                    <td><?php echo $swl->tgl22; ?></td>
                    <td><?php echo $swl->tgl23; ?></td>
                    <td><?php echo $swl->tgl24; ?></td>
                    <td><?php echo $swl->tgl25; ?></td>
                    <td><?php echo $swl->tgl26; ?></td>
                    <td><?php echo $swl->tgl27; ?></td>
                    <td><?php echo $swl->tgl28; ?></td>
                    <td><?php echo $swl->tgl29; ?></td>
                    <td><?php echo $swl->tgl30; ?></td>
                    <td><?php echo $swl->tgl31; ?></td>
                                 <?php $total= $swl->tgl1+$swl->tgl2+$swl->tgl3+$swl->tgl4+$swl->tgl5+$swl->tgl6+$swl->tgl7+$swl->tgl8+$swl->tgl9+$swl->tgl10+$swl->tgl11+$swl->tgl12+$swl->tgl13+$swl->tgl14+$swl->tgl15+$swl->tgl16+$swl->tgl17+$swl->tgl18+$swl->tgl19+$swl->tgl20+$swl->tgl21+$swl->tgl22+$swl->tgl23+$swl->tgl24+$swl->tgl25+$swl->tgl26+$swl->tgl27+$swl->tgl28+$swl->tgl29+$swl->tgl30+$swl->tgl31 ; ?>

                     <td><b><?php echo $total ; ?></b></td> 
                    
                  </tr>


                    <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


<!-- /.container-fluid -->
<!-- Content Row -->

                    

                    <!-- Content Row -->
              

<style type="text/css">
    body table {
        line-height: 0.7;
    }
</style>
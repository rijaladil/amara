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
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253801.61008413736!2d106.83683583051321!3d-6.309607723950669!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e5abf5b452cf%3A0x880768222a9016cf!2sPT.%20Amara%20Cisadane!5e0!3m2!1sid!2sid!4v1646906756566!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

            </div>
        </div>
    </div>

</div>


<!-- /.container-fluid -->
<!-- Content Row -->

                    

                    <!-- Content Row -->
              


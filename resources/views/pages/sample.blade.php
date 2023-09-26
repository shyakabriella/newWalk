@extends('layouts.admin')

@section('content')
<!-- Include jsPDF library via CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>

<div class="row">
<div class="col-md-12">
    <div class="card card-primary card-outline card-outline-tabs">
        <div class="card-header p-0 border-bottom-0">
        <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
            <li class="nav-item">
            <button class="btn btn-info" data-bs-target="#exampleModalToggle" data-bs-toggle="modal"> Health Centers</button>            </li>
            </li>          
        </ul>
        </div>
        
    </div>
</div>
</div>

<div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

     <!-- Sale & Revenue Start -->
     <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total TB test</p>
                                <h6 class="mb-0">8</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">TB_Positive</p>
                                <h6 class="mb-0">11</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">TB_Policy Document</p>
                                <h6 class="mb-0">3</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">TB_Guideline Document</p>
                                <h6 class="mb-0">3</h6>
                            </div>
                        </div>
                    </div>
                </div>
     
            <!-- Sale & Revenue End -->

            <!-- Sales Chart Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">TB_Statisstics In health Centers</h6>
                                <a href="">Show All</a>
                            </div>
                            <canvas id="worldwide-sales"></canvas>
                        </div>
                    </div> 



            <!-- Sales Chart End -->

<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
   <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Modal 1</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="card-body">

        
<div class="tab-content" id="custom-tabs-four-tabContent">
    <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
    <div class="card">
      <div class="d-flex justify-content-end mb-4">
      <button class="btn btn-primary"  onclick="printTable()">Export to PDF</button>
     </div>          
      <!-- /.card-header -->
      <div class="card-body">
      <div id="printContent">
        <hr>
            <h1 style="color:black;">Sample Recorded</h1>
        <hr>
    
 <table id="tableToPrint" class="table">
          <thead>
          <tr>               
        <th>Patient_name</th>
        <th>sample_status</th>
        <th>Advices</th>                 
        </tr>
            <hr>
          </thead>
          <tbody>             
          @foreach ($samples as $key => $sample)
        <tr>
            
            <td>{{ $sample->patient_name }}</td>
            <td>{{ $sample->sample_status }}</td>
            <td>{{ $sample->Advices}}</td>
                <td>
                </tr>
          @endforeach
          </tbody>
    </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </div>
    <p class="text-center text-primary"><small>TB_Policy & guideline</small></p>   
</div>
</div>


</div>
     
    </div>
  </div>
</div>





<style>
    /* Style for the title/header */
    #printContent h1 {
        font-size: 18px;
        text-align: center;
        margin-bottom: 20px;
    }

    /* Style for the table */
    #tableToPrint {
        width: 100%;
        border-collapse: collapse;
    }

    /* Print-specific CSS */
    @media print {
        body * {
            visibility: hidden;
        }
        #printContent, #printContent * {
            visibility: visible;
        }
        #printContent {
            position: absolute;
            left: 0;
            top: 0;
        }
    }
</style>

<script>
    function printTable() {
        // Apply the print-specific CSS to show the title, table, and hide other elements
        var printStyles = document.createElement('style');
        printStyles.innerHTML = '@media print { #printContent, #printContent * { visibility: visible; } }';
        document.head.appendChild(printStyles);

        // Print the page
        window.print();

        // Remove the print-specific CSS after printing
        document.head.removeChild(printStyles);
    }
</script>



        
</div>
@endsection



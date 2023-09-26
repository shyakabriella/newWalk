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
            <button class="btn btn-info" data-bs-target="#exampleModalToggle" data-bs-toggle="modal"> Policy & Guideline</button>            </li>
            </li>          
        </ul>
        </div>
        
    </div>
</div>
</div>

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
            <h1 style="color:black;">Policy & guideline report</h1>
        <hr>
    
 <table id="tableToPrint" class="table">
          <thead>
          <tr>               
        <th>title</th>
        <th>description</th>
        <th>category</th>
        <th>publication_date</th>
        <th>source_organization</th>                 
        </tr>
            <hr>
          </thead>
          <tbody>             
          @foreach ($documents as $key => $document)
        <tr>
        
        <td>{{ $document->title }}</td>
        <td>{{ $document->description }}</td>
        <td>{{ $document->category }}</td>
        <td>{{ $document->publication_date }}</td>
        <td>{{ $document->source_organization }}</td>
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



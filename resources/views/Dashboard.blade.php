<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap4.min.css" />

    <style>
        .btn{
            margin: auto;


        }
        .styled-table {

  margin-left: auto;
  margin-right: auto;

    border-collapse: collapse;

    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 1000px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
    background-color: #ba4040;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #cb3333;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}
        </style>
</head>
<body>


<section class="ins-banner-sec" style="display: none;">

    <div class="ins-banner-body">
        <div class="container-lg">
            <div class="ins-banner-content">
                <h1>Dashbord of student </h1>
            </div>
        </div>
    </div>
</section>

<main class="content-sec">
    <section class="profile-sec" data-aos="fadeIn">

        <div class="container-xl">

          <div class="row"> 

            <div class="col-12">
                <div class="pull-right">
                    <a class="btn btn-success" href="{{route('Student.create')}}"> Create New Product</a>
                </div>
               
              <div class="table-responsive mt-5">
                  <table class="table table-striped table-bordered" style="width:100%" id="Student">
                      <thead>
                      <tr>
                         <th>ID </th>

                          <th>Name of stdent </th>

                          <th>Class ID</th>

                          <th>Country ID </th>

                          <th> Date of birth  </th>
                         


                      </tr>
                      </thead>
                      <tbody>

                        @foreach($Student_data as $data)

                          <tr>

                              <td>{{ $data->id}}</td>
                              <td>{{ $data->name}}</td>
                              <td>{{ $data->country_id}}</td>
                              <td>{{ $data->class_id}}</td>
                              <td>{{ $data->date_of_birth}}</td>
                              
                              <td>
                                <form action="" method="POST">
                   
                                    
                                    <a class="btn btn-primary" href="">Edit</a>
                   
                                    @csrf
                                    @method('DELETE')
                      
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>

                                
                            </td>
                            

                            </tr>    
                                      @endforeach
                            
                            
                      </tbody>
                  </table>
              </div>

              </div>
   
        </div>
    </div>
    </div>
  </div>
</div>
  </section>
</main>



<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>


  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</body>
</html>
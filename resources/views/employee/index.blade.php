<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
        <!-- CSS Custom -->
        <link rel="stylesheet" href="css/app.css">

        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <!-- DataTables CSS -->
        <link rel="stylesheet" href="https://cdn.datatables.net/2.1.5/css/dataTables.dataTables.min.css">

        <!-- jQuery (Required for DataTables) -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- DataTables JS -->
        <script src="https://cdn.datatables.net/2.1.5/js/dataTables.min.js"></script>

        <!-- JS Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        

        <!-- Styles -->
        
    </head>
    <body>
        <div class="container">
            @if (session('success'))
                <div style="background-color:rgba(49, 247, 0, 0.705); padding:5px; border-radius:10px; color:white;">{{ session('success') }}</div>
            @endif

            @if (session('error'))
                <div style="background-color:rgba(255, 1, 1, 0.705); padding:5px; border-radius:10px; color:white;">{{ session('error') }}</div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-container">
                        <strong><span id="welcomeMessage" class="banner-text"></span></strong>
                    </div>
                   
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="content-section">

                        <div class="title">
                            <h1>Employees List</h1>
                            <a href="{{ route('employee.create') }}" class="btn btn-primary">Add Employee<i class='fas fa-plus-circle' style='font-size:16px; margin-left:5px;'></i></a>
                        </div>
                        
                        <div class="table-container">
                            <table id="employees" class="table table-striped" style="background-color: black">
                                <thead>
                                    <tr>
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Position</th>
                                        <th>Start date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($employees as $employee)
                                        <tr>
                                            <td><img src="{{ asset('uploads/' . $employee->photo) }}" alt="Uploaded Image" style="max-width: 100px;"></td>
                                            <td>{{ $employee->name }}</td>
                                            <td>{{ $employee->email }}</td>
                                            <td>{{ $employee->address }}</td>
                                            <td>{{ $employee->position }}</td>
                                            <td>{{ $employee->start_date }}</td>
                                            <td>
                                                
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
    
        <script>
            $(document).ready(function() {
                //DataTable
                $('#employees').DataTable();

                welcomeWriter();
            });

            var i = 0;
            var txt = 'WELCOME TO THE EMPLOYEES DATABASE !';
            var speed = 50;

            function welcomeWriter() {
            if (i < txt.length) {
                document.getElementById("welcomeMessage").innerHTML += txt.charAt(i);
                i++;
                setTimeout(welcomeWriter, speed);
            }
            }

        </script>
    </body>
</html>

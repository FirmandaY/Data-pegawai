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

        <!-- CSS DataTables -->
        <link rel="stylesheet" href="https://cdn.datatables.net/2.1.5/css/dataTables.dataTables.min.css">

        <!-- CSS Select2 -->
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

        <!-- CSS Fileinput -->
        <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />

        <!-- jQuery (Required for DataTables) -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- JS DataTables -->
        <script src="https://cdn.datatables.net/2.1.5/js/dataTables.min.js"></script>

        <!-- JS Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

        <!-- JS Select2 -->
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <!-- JS File Input -->
        <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/plugins/buffer.min.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/plugins/filetype.min.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/plugins/piexif.min.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/fileinput.min.js"></script>


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        

        <!-- Styles -->
        
    </head>
    <body>
        <div class="container">
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

                        <form action="{{ route('employee.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="name">Name</label><br>
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Jayakatwang.."><br>
                            
                                    <label for="email">Email</label><br>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="etc@gmail.com"><br>
    
                                    <label for="address">Address</label><br>
                                    <select type="text" id="address" name="address" class="form-control" placeholder="5th elm street..">
                                        @foreach ($addresses as $address)
                                            <option value="{{ $address->city_name }}">{{ $address->city_name }}</option>
                                        @endforeach
                                    </select><br><br>
    
                                    <label for="position">position:</label><br>
                                    <select id="position" name="position" class="position form-control ">
                                        <option value="Lead Engineer">Lead Engineer</option>
                                        <option value="Senior Engineer">Senior Engineer</option>
                                        <option value="Junior Engineer">Junior Engineer</option>
                                        <option value="Project Manager">Project Manager</option>
                                        <option value="System Analyst">System Analyst</option>
                                    </select><br><br>
    
                                    <label for="Start Date">Start Date:</label><br>
                                    <input type="date" id="Start Date" name="start_date" class="form-control"><br>
                                </div>
                                <div class="col-md-4">
                                    <label for="Photo">Photo:</label><br>
                                    <input type="file" id="Photo" name="photo" class="file"><br>
    
                                </div>
                                
                            </div>
                            
                    
                            <input class="btn btn-primary" type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
        <script>
            $(document).ready(function() {
                typeWriter();
                $('#position').select2();
                $('#address').select2();
                $("#photo").fileinput();
            });

            var i = 0;
            var txt = 'ADDING NEW TODAY ? THE MORE THE MERRIER !';
            var speed = 50;

            function typeWriter() {
            if (i < txt.length) {
                document.getElementById("welcomeMessage").innerHTML += txt.charAt(i);
                i++;
                setTimeout(typeWriter, speed);
            }
            }

        </script>
    </body>
</html>

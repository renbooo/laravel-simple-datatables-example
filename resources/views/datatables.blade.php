<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel DataTables Tutorial Example</title>

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

        <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">

    </head>

    <body>

        <div class="container">

            <br/>

            <h1 class="text-center">HDTuto - Laravel DataTables Tutorial Example</h1>

            <br/>

            <table class="table table-bordered" id="users-table">

                <thead>

                    <tr>

                        <th>Id</th>

                        <th>Name</th>

                        <th>Email</th>

                        <th>Created At</th>

                        <th>Updated At</th>

                    </tr>

                </thead>

            </table>

        </div>

        <script src="//code.jquery.com/jquery.js"></script>

        <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

        <script>

        $(function() {

            $('#users-table').DataTable({

                processing: true,

                serverSide: true,

                ajax: '{!! route('get.data') !!}',

                columns: [

                    { data: 'id', name: 'id' },

                    { data: 'name', name: 'name' },

                    { data: 'email', name: 'email' },

                    { data: 'created_at', name: 'created_at' },

                    { data: 'updated_at', name: 'updated_at' }

                ]

            });

        });

        </script>

        @stack('scripts')

    </body>

</html>
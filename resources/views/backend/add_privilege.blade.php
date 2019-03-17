@extends('master.master')
@section('content')
    <!-- page content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="col-md-12">
            <div class="right_col" role="main">
                <div class="">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="col-md-6">
                                <form method="post" action="">
                                    @csrf

                                    <div class="form-group">
                                        <label for="inputEmail4">Enter Privilege</label>
                                        <input type="text" name="privilegename" class="form-control"
                                               placeholder="Enter Privilege Name">

                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="add" class="btn btn-primary"><i
                                                    class=" fa fa-user"></i> Add
                                            Privilege
                                        </button>
                                    </div>

                                </form>
                                <table class="table table-hover">
                                    <tr>
                                        <th>Sn</th>
                                        <th>Privilege Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>

                                </table>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
    </div>

    <!-- /page content -->
@endsection


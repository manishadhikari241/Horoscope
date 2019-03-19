@extends('master.master')
@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="row">
                <div class="col-md-12">
                    <a class="btn btn-danger" href="{{route('show-horo')}}"><i class="fa fa-backward"></i>Back</a>
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{session('error')}}
                        </div>
                    @endif

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>
                @endif
                <!-- page content -->
                    <div class="left" role="main">
                        <div class="">

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="clearfix"></div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="x_panel">

                                        <div class="x_content">
                                            <br/>
                                            <h1>Update your horoscope Description</h1>
                                            <form id="demo-form2" data-parsley-validate
                                                  class="form-horizontal form-label-left" method="post"
                                                  action="{{route('edit-horo-action')}}" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$horo->id}}">

                                                <div class="form-group">

                                                    <label for="inputGroupSelect02"
                                                           class="control-label col-md-3 col-sm-3 col-xs-12">Title</label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <div class="input-group mb-3">

                                                            <select class="custom-select" name="title"
                                                                    id="inputGroupSelect02">

                                                                <option value="" selected disabled>Please select
                                                                    horoscope to add
                                                                </option>
                                                                <option value="Aries
                                                                    (Mar 21-Apr 19)">
                                                                </option>
                                                                <option value="Taurus
                                                                    (Apr 20-May 20)">Taurus
                                                                    (Apr 20-May 20)
                                                                </option>
                                                                <option value="Gemini
                                                                    (May 21-June 20)">Gemini
                                                                    (May 21-June 20)
                                                                </option>
                                                                <option value="Cancer
                                                                    (June 21-July 22)">Cancer
                                                                    (June 21-July 22)
                                                                </option>
                                                                <option value="Leo
                                                                    (July 23-Aug 22)">Leo
                                                                    (July 23-Aug 22)
                                                                </option>
                                                                <option value="Virgo
                                                                    (Aug 23-Sep 22)">Virgo
                                                                    (Aug 23-Sep 22)
                                                                </option>
                                                                <option value="Libra
                                                                    (Sep 23-Oct 22)">Libra
                                                                    (Sep 23-Oct 22)
                                                                </option>
                                                                <option value="Scorpio
                                                                    (Oct 23-Nov 21)">Scorpio
                                                                    (Oct 23-Nov 21)
                                                                </option>
                                                                <option value="Sagittarius
                                                                    (Nov 22-Dec 21)">Sagittarius
                                                                    (Nov 22-Dec 21)
                                                                </option>
                                                                <option value="Capricorn
                                                                    (Dec 22-Jan 19)">Capricorn
                                                                    (Dec 22-Jan 19)
                                                                </option>
                                                                <option value="Aquarius
                                                                    (Jan 20-Feb 18)">Aquarius
                                                                    (Jan 20-Feb 18)
                                                                </option>
                                                                <option value="Pisces
                                                                    (Feb 19-Mar 20)">Pisces
                                                                    (Feb 19-Mar 20)
                                                                </option>
                                                            </select>
                                                            <div class="input-group-append">
                                                                <label class="input-group-text"
                                                                       for="inputGroupSelect02">Options</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="middle-name"
                                                           class="control-label col-md-3 col-sm-3 col-xs-12">Image</label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <input id="middle-name" class="form-control col-md-7 col-xs-12"
                                                               type="file" name="image">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                           for="description">Description
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <textarea id="description" name="description"
                                                                  value=""
                                                                  class="form-control"></textarea>
                                                    </div>
                                                </div>


                                                <div class="ln_solid"></div>
                                                <div class="form-group">
                                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                        <button class="btn btn-primary" type="button">Cancel</button>
                                                        <button class="btn btn-primary" type="reset">Reset</button>
                                                        <button type="submit" name="submit" class="btn btn-success">
                                                            Update
                                                        </button>

                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <!-- /page content -->

                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
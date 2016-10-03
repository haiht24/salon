@extends('Admin.app')
@section('jsLibs')
    <script src="{{ asset('js/plugin/dygraphs/dygraph-combined.min.js') }}"></script>
@endsection
@section('main')
        <!-- widget grid -->
<section id="widget-grid" class="doanh-thu">

    <!-- row -->
    <div class="row">

        <!-- NEW WIDGET START -->
        <article class="col-sm-12">

            <!-- Widget ID (each widget will need unique ID)-->
            <div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false" data-widget-deletebutton="false">
                <header>
                    <span class="widget-icon"> <i class="fa fa-bar-chart-o"></i> </span>
                    <h2>Doanh thu</h2>
                </header>

                <!-- widget div-->
                <div class="npd">
                    <!-- widget edit box -->
                    <div class="jarviswidget-editbox">
                        <!-- This area used as dropdown edit box -->
                    </div>
                    <!-- end widget edit box -->

                    <!-- widget content -->
                    <div class="widget-body npd">
                        <div class="col-sm-12 ">
                            <div id="graphDoanhThu" style="width:100%; height:300px;"></div>
                        </div>

                    </div>
                    <!-- end widget content -->

                </div>
                <!-- end widget div -->

            </div>
            <!-- end widget -->

        </article>
        <!-- WIDGET END -->

    </div>

    <!-- end row -->


</section>
@endsection

@section('js')
    <script>
//        var include_dashboardJs = true;
var g = new Dygraph(

        // containing div
//        $('#graphDoanhThu'),
        document.getElementById("graphDoanhThu"),

        // CSV or path to a CSV file.
        "Date,Temperature\n" +
        "2008-05-07,75\n" +
        "2008-05-08,70\n" +
        "2008-05-09,80\n"

);
    </script>
@endsection
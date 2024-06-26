<!DOCTYPE html>
<html lang="en">

<head>

    <!-- start: Meta -->
    <meta charset="utf-8">
    @yield('title')
    <meta name="description" content="Bootstrap Metro Dashboard">
    <meta name="author" content="Dennis Ji">
    <meta name="keyword"
        content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!-- end: Meta -->

    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->

    <!-- start: CSS -->
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
    <link id="bootstrap-style" href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-responsive.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/thongKe.css') }}" rel="stylesheet">
    <link id="base-style" href="{{ asset('/css/style copy.css') }}" rel="stylesheet">
    <link id="base-style-responsive" href="/css/style-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <link
        href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext'
        rel='stylesheet' type='text/css'>
    <!-- end: CSS -->

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
 <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <link id="ie-style" href="/css/ie.css" rel="stylesheet">
 <![endif]-->

    <!--[if IE 9]>
  <link id="ie9style" href="/css/ie9.css" rel="stylesheet">
 <![endif]-->

    <!-- start: Favicon -->
    <link rel="shortcut icon" href="/img/favicon.ico">
    <!-- end: Favicon -->




</head>

<body>

    <!-- start: Header -->
    @include('admin.partials.header')
    <!-- start: Header -->

    <div class="container-fluid-full">
        <div class="row-fluid">
            <!-- start: Main Menu -->
            @include('admin.partials.sidebar')
            <!-- end: Main Menu -->

            <noscript>
                <div class="alert alert-block span10">
                    <h4 class="alert-heading">Warning!</h4>
                    <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                        enabled to use this site.</p>
                </div>
            </noscript>

            <!-- start: Content -->
            <!-- các trang sẽ truyền vào đây qua biến content -->
            @yield('content')



            <!-- end: Content -->
        </div><!--/#content.span10-->
    </div><!--/fluid-row-->

    <div class="modal hide fade" id="myModal">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">×</button>
            <h3>Settings</h3>
        </div>
        <div class="modal-body">
            <p>Here settings can be configured...</p>
        </div>
        <div class="modal-footer">
            <a href="/#" class="btn" data-dismiss="modal">Close</a>
            <a href="/#" class="btn btn-primary">Save changes</a>
        </div>
    </div>

    <div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <ul class="list-inline item-details">
                <li><a href="http://themifycloud.com">Admin templates</a></li>
                <li><a href="http://themescloud.org">Bootstrap themes</a></li>
            </ul>
        </div>
    </div>

    <div class="clearfix"></div>

    @include('admin.partials.footer')

    <!-- start: JavaScript-->

    
    <!-- end: JavaScript-->
   
</body>
<script src="/js/jquery-1.9.1.min.js"></script>
    <script src="/js/jquery-migrate-1.0.0.min.js"></script>
    <script src="/js/jquery-ui-1.10.0.custom.min.js"></script>
    <script src="/js/jquery.ui.touch-punch.js"></script>
    <script src="/js/modernizr.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.cookie.js"></script>
    <script src='/js/fullcalendar.min.js'></script>
    <script src='/js/jquery.dataTables.min.js'></script>
    <script src="/js/excanvas.js"></script>
    <script src="/js/jquery.flot.js"></script>
    <script src="/js/jquery.flot.pie.js"></script>
    <script src="/js/jquery.flot.stack.js"></script>
    <script src="/js/jquery.flot.resize.min.js"></script>
    <script src="/js/jquery.chosen.min.js"></script>
    <script src="/js/jquery.uniform.min.js"></script>
    <script src="/js/jquery.cleditor.min.js"></script>
    <script src="/js/jquery.noty.js"></script>
    <script src="/js/jquery.elfinder.min.js"></script>
    <script src="/js/jquery.raty.min.js"></script>
    <script src="/js/jquery.iphone.toggle.js"></script>
    <script src="/js/jquery.uploadify-3.1.min.js"></script>
    <script src="/js/jquery.gritter.min.js"></script>
    <script src="/js/jquery.imagesloaded.js"></script>
    <script src="/js/jquery.masonry.min.js"></script>
    <script src="/js/jquery.knob.modified.js"></script>
    <script src="/js/jquery.sparkline.min.js"></script>
    <script src="/js/counter.js"></script>
    <script src="/js/retina.js"></script>
    <script src="/js/custom.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
	<script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>
	<script>
		new Morris.Line({
  // ID of the element in which to draw the chart.
  element: 'myfirstchart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [
    { year: '2008', value: 20 },
    { year: '2009', value: 10 },
    { year: '2010', value: 5 },
    { year: '2011', value: 5 },
    { year: '2012', value: 20 }
  ],
  // The name of the data record attribute that contains x-values.
  xkey: 'year',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['value'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['Value']
});
	</script>
<script>
    $( function() {
        $( "#datepicker" ).datepicker({
            prevText:"Tháng trước",
            nextText:"Tháng sau",
            dateFormat:"yy-mm-dd",
            dayNamesMin:["Thứ 2", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7", "Chủ nhật"],
            duration:"slow"
        });
        $( "#datepicker2" ).datepicker({
            prevText:"Tháng trước",
            nextText:"Tháng sau",
            dateFormat:"yy-mm-dd",
            dayNamesMin:["Thứ 2", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7", "Chủ nhật"],
            duration:"slow"
        });
        
    } );
</script>
</html>

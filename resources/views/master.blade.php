<!DOCTYPE html>
<html>

@include('layout.header')

<body>
  <div id="wrapper">
   @include('layout.leftmenu')

   <div id="page-wrapper" class="gray-bg dashbard-1">
    @include('layout.top')



    <!-- noi dung chinh  -->
    <div class="wrapper wrapper-content">
      @yield('content')
    </div>


    <!-- chan trang web -->
    @include('layout.footer')
  </div>




<!--     <div id="small-chat">
        <span class="badge badge-warning float-right">5</span>
        <a class="open-small-chat" href="">
            <i class="fa fa-comments"></i>
        </a>
      </div>  -->



    </div>

    <!-- Mainly scripts -->
    @include('layout.js')


    <!-- load active menu -->
    <script type="text/javascript">
      $(document).ready(function() { 
//active menu
var url = window.location.href;

$(".nav li a").each(function(){
  var $this = $(this);
  if($this.prop("href") == url) {
    $(this).parents('#side-menu li').addClass("active");
    $(this).parents('#side-menu li ul').addClass("in");
    $("#side-menu li.active ul li.active a").attr("style", "background-color:#343a40");
    $("li.active .licl").attr("style", "background-color:#6c757d");
  }
});
});
</script>
<style type="text/css">
  .swal2-container {
    z-index: 9999;
  }
  .swal2-popup {
    padding: 0;
    font-size: 13px;
  }
</style>
</body>
</html>

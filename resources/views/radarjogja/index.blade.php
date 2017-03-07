<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

@include('htmlheader')
<body>

@include('radarjogjaheader')


<div id="bodyweb">
	@include('radarbody')
    @yield('main-content')  

</div><!-- endbodyweb -->

@include('footer')

@include('scripts')
@yield('script-content')

</body>
</html>
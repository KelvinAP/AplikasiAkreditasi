<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Aplikasi Akreditasi</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="/css/app.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="sidebar-mini sidebar-collapse text-sm">
<!-- Site wrapper -->
<div class="wrapper" id="app">

@include('components.header')

@include('components.sidebar')

<!-- <vue-progress-bar></vue-progress-bar> -->
<!-- <router-view></router-view> -->
@include('beasiswa')

@include('components.footer')

</div>

<script src="/js/app.js"></script>
</body>
</html>

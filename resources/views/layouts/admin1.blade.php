<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>{{ config('app.name', 'PIMS') }}</title>
   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
   <link rel="stylesheet" href="{{asset('/asset/fontawesome/css/all.min.css')}}">
   <link rel="stylesheet" href="{{ asset('/asset/css/adminlte.min.css') }}">
   <link rel="stylesheet" href="{{ asset('/asset/css/style.css') }}">
   {{-- <link rel="stylesheet" href="{{ asset('/asset/tables/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">  --}}
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css"/>


   <link rel="stylesheet" type="text/css" 
href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
     <style type="text/css">
     
     aside.main-sidebar{
         background-color: #ddd;
         color:rgb(77, 75, 75);
      }
      nav ul li a p{
         color:rgb(41,74,43);
      }
      td a.btn{
                  font-size: 0.7rem;
               }
               td p{
                  padding-left: 0.5rem !important;
               }
               th{
                  padding: 1rem !important;
               }
               table tr td {
                  padding: 0.3rem !important;
                  font-size: 13px;
               }
               .bg1{
                  background-color: rgb(69, 150, 156);
                  color: rgb(211, 209, 207);
               }
   </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
   <div class="wrapper">
      <nav class="main-header navbar navbar-expand navbar-light" style="background-color: rgb(69, 146, 156)">
         <!-- Left navbar links -->
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
         </ul>
         <ul class="navbar-nav ml-auto">
            <li class="nav-item">
               <a class="nav-link" href="#" role="button">
                  <img src="../asset/img/profile.png" class="img-circle" alt="User Image" width="40" style="margin-top: -8px;">
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                  <i class="fas fa-expand-arrows-alt"></i>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" data-widget="fullscreen" href="../index.html">
                  <i class="fas fa-sign-out-alt"></i>
               </a>
            </li>
         </ul>
      </nav>
      <aside class="main-sidebar sidebar-light-primary">
            <!-- Brand Logo -->
            <a href="index.html" class="brand-link">
         <img src="../asset/img/logo.png" alt="Logo" width="200" style="margin-top: -75px;margin-bottom: -75px">

         </a>
         <div class="sidebar">
            <nav class="mt-2">
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <li class="nav-item">
                     <a href="index.html" class="nav-link">
                        <img src="../asset/img/dashboard.png" width="30">
                        <p>
                           Dashboard
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ route('expenses.index') }}" class="nav-link">
                        <img src="../asset/img/crops.png" width="30">
                        <p>
                           Matumizi
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="fertilizer.html" class="nav-link">
                        <img src="../asset/img/fertilizer.png" width="30">
                        <p>
                           Fertilizer
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="member.html" class="nav-link">
                        <img src="../asset/img/member.png" width="30">
                        <p>
                           Members
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="farm.html" class="nav-link">
                        <img src="../asset/img/farm.png" width="30">
                        <p>
                           Farms
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="sms.html" class="nav-link">
                        <img src="../asset/img/sms.png" width="30">
                        <p>
                           SMS
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="company.html" class="nav-link">
                        <img src="../asset/img/company.png" width="30">
                        <p>
                           Company
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="database.html" class="nav-link">
                        <img src="../asset/img/database.png" width="30">
                        <p style="color: rgb(69, 139, 156)">
                           Database
                        </p>
                     </a>
                  </li>
               </ul>
            </nav>
         </div>
      </aside>
      <div class="content-wrapper">
         @include('inc.content_header')
     
         <section class="content">
            <div class="container-fluid">
              
               {{ $slot }}
            </div>
         </section>


      </div>
   </div>
   
   <!-- jQuery -->
  
  

   

</body>
<p>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>

</html>
<?php 
   $urlPath = request()->path();
   $urls = explode('/', $urlPath);
   $currentUrl = end($urls);
?>

    <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0" style="color:rgb(29, 31, 29);">{{ strtoupper($currentUrl[0]) . substr($currentUrl, 1) }}  </h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  @foreach ($urls as $url)
                  <li class="breadcrumb-item active">  <a href="/{{ $urlPath }}">{{ strtoupper($url[0]) . substr($url, 1) }}</a> </li>
                  @endforeach
  
               </ol>
            </div>
           @include('inc.button')
                
            
         </div>
      </div>
   </div>

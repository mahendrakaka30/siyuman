 @if(Session::has('Success'))
 <div class="pt-3">
     <div class="alert alert-Success">
         {{ Session::get('Success') }}
     </div>
 </div>
 @endif

 @if($errors->any())
 <div class="pt-3">
     <div class="alert alert-danger">
         <ul>
             @foreach ($errors->all() as $item)
             <li>{{$item}}</li>
             @endforeach
         </ul>
     </div>
 </div>
 @endif
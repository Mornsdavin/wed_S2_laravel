<div>
    <div>
        <a class="
                  d-flex 
                  text-decoration-none 
                  text-secondary
                  align-items-center" 
                  href="{{ $path }}"
                >
                  <div class="
                    d-flex 
                    justify-content-center
                    align-items-center
                    gap-2
                  ">
                    <div class="">
                      <img 
                      style="width:30px; height:30px; object-fit:contain;"
                      src="{{$src}}" alt="shop">
                    </div>
                    <div style="{{$title=="Dashboard" ? 'color:#FFC029' : 'color:#6C757D'}}">
                      {{$title}}
                    </div>
                  </div>
          </a>
          
      </div>
      
</div>
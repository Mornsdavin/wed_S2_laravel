<nav class="navbar navbar-expand-lg pb-4 ">
    <div class="container-fluid">
      <div class="w-100 d-flex flex-row justify-content-between align-content-center">
        <div>
          <button class="d-sm-none navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <div>
          <img
            style="width:40px; height:40px; object-fit:contain;"
            src="/assets/user.png" alt="user">
        </div>
      </div>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="d-sm-none d-flex flex-column gap-3 pt-4 ">
            @php
              $items = [
                  [
                  "title" => "Dashboard",
                  "src" => "/assets/dashboard.png",
                  "path" => "/admin/dashboard"
                  ],
                  [
                  "title" => "Phone",
                  "src" => "/assets/phone.png",
                  "path" => "/admin/phones"
                  ],
                  [
                  "title" => "Employee",
                  "src" => "/assets/employee.png",
                  "path" => "/admin/employee/employeelist"
                  ],
                  [
                  "title" => "About",
                  "src" => "/assets/info.png",
                  "path" => "/admin/about"
                  ],
                  [
                  "title" => "Setting",
                  "src" => "/assets/setting.png",
                  "path" => "/admin/setting"
                  ],
                  [
                  "title" => "logout",
                  "src" => "/assets/logout.png",
                  "path" => "#"
                  ]
              ];
              @endphp
              @foreach ($items as $item )
                  <x-side-bar-item :title="$item['title']" :path="$item['path']" :src="$item['src']"/>
              @endforeach
          </div>
        </div>




    </div>

  </nav>

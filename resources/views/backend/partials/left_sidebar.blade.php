 <nav class="bg-white sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <img src="{{asset('images/face.jpg')}}" alt="">
            <p class="name">Shah Muhammad Azmat Ullah</p>
            <p class="designation">Manager</p>
            <span class="online"></span>
          </div>
<li class = "nav-item"
              <a class="nav-link" href="{{route('admin.index')}}">
                <img src="/images/icons/1.png" alt="">
                <span class="menu-title">Dashboard</span>
              </a>
            </li>


              <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <img src="/images/icons/9.png" alt="">
                <span class="menu-title">Manage Products<i class="fa fa-sort-down"></i></span>
              </a>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.products')}}">
                      Manage Products </a>
          
                    <li class ="nav-item"><a class="nav-link" href="{{route('admin.product.create')}}">
                     Add Products</a>
                  </li>
                </ul>
              </div>
             </li>
           
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <img src="/images/icons/9.png" alt="">
                <span class="menu-title">Manage Category<i class="fa fa-sort-down"></i></span>
              </a>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.categories')}}">
                      Manage Categories </a>
          
                    <a class="nav-link" href="{{route('admin.category.create')}}">
                     Add categories</a>
                  </li>
                </ul>
              </div>

             </li>















            
       




       </ul>
        </nav>
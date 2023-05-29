 <div class="br-sideleft overflow-y-auto">
      <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
      <ul class="br-sideleft-menu">
        <li class="br-menu-item">
        <a href="{{route('post1')}}" class="br-menu-link {{isActiveRoute('dashboard')}}">
            <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
            <span class="menu-item-label">Dashboard</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->


        <li class="br-menu-item">
            <a href="{{route('player.index')}}" class="br-menu-link ">
              <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
              <span class="menu-item-label">Team/Player Details</span>
            </a><!-- br-menu-link -->
          </li><!-- br-menu-item -->
          <li class="br-menu-item">
            <a href="{{route('tournament.index')}}" class="br-menu-link ">
              <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
              <span class="menu-item-label">Tournament Details</span>
            </a><!-- br-menu-link -->
          </li><!-- br-menu-item -->
          <li class="br-menu-item">
            <a href="{{route('round.index')}}" class="br-menu-link ">
              <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
              <span class="menu-item-label">Round Details</span>
            </a><!-- br-menu-link -->
          </li><!-- br-menu-item -->
          <li class="br-menu-item">
            <a href="{{route('roundresult.index')}}" class="br-menu-link ">
              <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
              <span class="menu-item-label">Round Results Details</span>
            </a><!-- br-menu-link -->
          </li><!-- br-menu-item -->
          <li class="br-menu-item">
            <a href="{{route('score.index')}}" class="br-menu-link ">
              <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
              <span class="menu-item-label">Score Details</span>
            </a><!-- br-menu-link -->
          </li><!-- br-menu-item -->
          <li class="br-menu-item">
            <a href="{{ route('tiebreak.index') }}" class="br-menu-link ">
              <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
              <span class="menu-item-label">TieBreak</span>
            </a><!-- br-menu-link -->
          </li><!-- br-menu-item -->
          <li class="br-menu-item">
            <a href="{{ route('tournamenttype.index') }}" class="br-menu-link ">
              <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
              <span class="menu-item-label">Tournament Type</span>
            </a><!-- br-menu-link -->
          </li><!-- br-menu-item -->
          <li class="br-menu-item">
            <a href="{{ route('post.index') }}" class="br-menu-link ">
              <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
              <span class="menu-item-label">Create Post</span>
            </a><!-- br-menu-link -->
          </li><!-- br-menu-item -->
          

         

        @can('view_user')
          <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub {{isActiveRoute('user')}} {{isActiveRoute('permission')}} {{isActiveRoute('role')}}">
              <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
              <span class="menu-item-label">User Control</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{ route('user.index') }}" class="sub-link {{isActiveRoute('user')}}">Users</a></li>
              <li class="sub-item"><a href="{{ route('role.index') }}" class="sub-link {{isActiveRoute('role')}}">Roles</a></li>
              <li class="sub-item"><a href="{{ route('permission.index') }}" class="sub-link {{isActiveRoute('permission')}}">Permissions</a></li>
            </ul>
          </li><!-- br-menu-item -->
        @endcan


        


        

        
      </ul><!-- br-sideleft-menu -->


  
      <br>
    </div><!-- br-sideleft -->
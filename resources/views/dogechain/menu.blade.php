
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item menu-open">
        <a href="#" class="nav-link">
          <i class="fa-sharp fa-solid fa-shield-dog fa-lg"></i>
          <p style="margin-left: 5px; font-size: 20px;">
            SnopeDoge
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="https://explorer.dogechain.dog/token/0x3944424e75d96B7d97417edEc5Cc0e85890Cf130/token-transfers" target="_blank" class="nav-link">
              <i class="far fa-solid fa-address-book"></i>
              <p style="margin-left:10px"> Contract</p>
            </a>
          </li>
          {{-- <li class="nav-item">
            <a href="" class="nav-link">
              <i class="fa-solid fa-cart-shopping"></i>
              <p style="margin-left:10px"> Market Place</p>
            </a>
          </li> --}}
          <li class="nav-item">
            <a href="https://app.yodeswap.dog/exchange/swap" class="nav-link" target="_blank">
              <i class="fa-solid fa-link"></i>
              <p style="margin-left:10px"> Swaps</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item menu-open">
        <a href="" class="nav-link">
          <i class="fa-solid fa-users"></i>
          <p style="margin-left: 5px; font-size: 20px;">
            Our Community
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="https://twitter.com/Snope_Doge?t=GWvEtfFP-rti_CkjD60dYQ&s=09&fbclid=IwAR1d2oolFrZHoYBGDUcGhhH28lNKb5D_qtP-HoJbzu-pasyHwGvwsXlIr1w" target="_blank" class="nav-link">
              <i class="fa-brands fa-twitter"></i>
              <p style="margin-left:10px"> Twitter</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://t.me/snopedoge00" class="nav-link" target="_blank">
              <i class="fa-brands fa-telegram"></i>
              <p style="margin-left:10px"> Telegram</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://gitlab.com/hotrung6935/ho_trung_van_ly_1235tẻ" class="nav-link" target="_blank">
              <i class="fa-brands fa-square-gitlab"></i>
              <p style="margin-left:10px">Git</p>
            </a>
          </li>
          {{-- <li class="nav-item">
            <a href="" class="nav-link">
              <i class="fa-brands fa-tiktok"></i>
              <p style="margin-left:10px">Tiktok</p>
            </a>
          </li> --}}
        </ul>
      </li>
      @if (Auth::guard('AdminSndg')->check())
      <li class="nav-item menu-open">
        <a class="nav-link" >
            <i class="fa-solid fa-gear"></i>
          <p style="margin-left: 5px; font-size: 20px;">
                  Setting
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="/sndg/admin/setting/home" class="nav-link" target="_blank">
                <i class="fa-solid fa-lock"></i>
              <p style="margin-left:10px">Admin</p>
            </a>
          </li>
        </ul>
      </li>
      @endif

    </ul>
  </nav>

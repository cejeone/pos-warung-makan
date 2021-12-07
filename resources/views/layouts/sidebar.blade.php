<!-- sidebar-->
<section class="sidebar-nd d-none d-sm-block">
    <div class="content">
        <div class="user mb-5">
            <div class="foto-user">
                <img src="{{ url(auth()->user()->foto ?? '') }}" class="avatar" alt="User Image">
                <div class="profil">
                    <p>{{ auth()->user()->name }} <a href="#" class="btn btn-default btn-flat"
                            onclick="$('#logout-form').submit()"><i class="fas fa-power-off"></i></a></p>
                    <form action="{{ route('logout') }}" method="post" id="logout-form" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
            <div class="menu">
                <div class="item active dashboard">
                    <i class="fas fa-home"></i>
                    <p><a href="{{ route('dashboard') }}" class="item-sidebar">Beranda</a></p>
                </div>

                @if (auth()->user()->level == 1)
                    <div class="item active menuorder">
                        <i class="fas fa-cash-register"></i>
                        <p><a href="{{ route('transaksi.index') }}" class="item-sidebar">Menu Order</a></p>
                    </div>
                    <div class="item active kategori">
                        <i class="fas fa-weight-hanging"></i>
                        <p><a href="{{ route('kategori.index') }}" class="item-sidebar">Kategori</a></p>
                    </div>
                    <div class="item active produk">
                        <i class="fas fa-weight-hanging"></i>
                        <p><a href="{{ route('produk.index') }}" class="item-sidebar">Produk</a></p>
                    </div>
                    <div class="item active transaksi">
                        <i class="fas fa-clipboard-check"></i>
                        <p><a href="{{ route('trans.index') }}" class="item-sidebar">Transaksi</a></p>
                    </div>
                    <div class="item active laporan">
                        <i class="fas fa-clipboard-list"></i>
                        <p><a href="{{ route('laporan.index') }}" class="item-sidebar">Laporan</a></p>
                    </div>
                    <div class="item active pengaturan">
                        <i class="fas fa-cog"></i>
                        <p><a href="{{ route('pengaturan.index') }}" class="item-sidebar">Pengaturan</a></p>
                    </div>

                @endif
                @if (auth()->user()->level == 2)
                    <div class="item active menuorder">
                        <i class="fas fa-cash-register"></i>
                        <p><a href="{{ route('transaksi.baru') }}" class="item-sidebar">Order Baru</a></p>
                    </div>
                    <div class="item active transaksi">
                        <i class="fas fa-clipboard-check"></i>
                        <p><a href="{{ route('penjualan.index') }}" class="item-sidebar">Transaksi</a></p>
                    </div>

                @endif


            </div>
        </div>
</section>
<!-- sidebar-->

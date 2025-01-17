@extends('welcome')
@section('content')
    
<div class="d-flex">
    <button class="toggle-btn" type="button">
        {{-- <i class="lni lni-grid-alt"></i> --}}
    <img src="https://cdn-001.haui.edu.vn//img/logo-haui-size.png" width="25px" alt="logo" class="logo">
    </button>
    <div class="sidebar-logo">
        <a href="#">Haui_Egov</a>
    </div>
</div>
<ul class="sidebar-nav">
    <li class="sidebar-item">
        <a href="{{URL::to('/home')}}" class="sidebar-link">
            <i class="lni lni-home"></i>
            <span>Home</span>
        </a>
    </li>
 
    <li class="sidebar-item">
        <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
            data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
            <i class='bx bx-list-ul' ></i>
            <span>Danh mục</span>
        </a>
        <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
            <li class="sidebar-item">
                <a href="{{URL::to('/pages/category/dokhan')}}" class="sidebar-link">Độ khẩn</a>
            </li>
            <li class="sidebar-item">
                <a href="{{URL::to('/pages/category/domat')}}" class="sidebar-link">Độ mật</a>
            </li>
            <li class="sidebar-item">
                <a href="{{URL::to('/pages/category/dvlinhvuc')}}" class="sidebar-link">Đơn vị lính vực</a>
            </li>
            <li class="sidebar-item">
                <a href="{{URL::to('/pages/category/linhvuc')}}" class="sidebar-link">Lĩnh vực</a>
            </li>
            <li class="sidebar-item">
                <a href="{{URL::to('/pages/category/loaivb')}}" class="sidebar-link">Loại văn bản</a>
            </li><li class="sidebar-item">
                <a href="{{URL::to('/pages/category/nguoiky')}}" class="sidebar-link">Người ký</a>
            </li>
        </ul>
    </li>
    <li class="sidebar-item">
        <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
            data-bs-target="#down" aria-expanded="false" aria-controls="down">
            <i class='bx bx-download' ></i>
            <span>Văn bản đến</span>
        </a>
        <ul id="down" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
            <li class="sidebar-item">
                <a href="{{URL::to('/pages/incomingtext/vaoso')}}" class="sidebar-link">Vào sổ văn bản</a>
            </li>
            <li class="sidebar-item">
                <a href="{{URL::to('/pages/incomingtext/chuyenvb')}}" class="sidebar-link">Trình chuyển văn bản</a>
            </li>
            <li class="sidebar-item">
                <a href="{{URL::to('/pages/incomingtext/butphe')}}" class="sidebar-link">Bút phê văn bản</a>
            </li>
            <li class="sidebar-item">
                <a href="{{URL::to('/pages/incomingtext/xuly')}}" class="sidebar-link">Xử lý văn bản</a>
            </li>
            <li class="sidebar-item">
                <a href="{{URL::to('/pages/incomingtext/theodoi')}}" class="sidebar-link">Theo dõi văn bản</a>
            </li>
        </ul>
    </li>
    <li class="sidebar-item">
        <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
            data-bs-target="#up" aria-expanded="false" aria-controls="up">
            <i class='bx bx-upload' ></i>
            <span>Văn bản đi</span>
        </a>
        <ul id="up" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
            <li class="sidebar-item">
                <a href="{{URL::to('/pages/textaway/vaosodi')}}" class="sidebar-link">Vào sổ văn bản</a>
            </li>
            <li class="sidebar-item">
                <a href="{{URL::to('/pages/textaway/dsvbdi')}}" class="sidebar-link">Danh sách văn bản</a>
            </li>
            <li class="sidebar-item">
                <a href="{{URL::to('/pages/textaway/baocaodi')}}" class="sidebar-link">Báo cáo văn bản</a>
            </li>
        </ul>
    </li>
    <li class="sidebar-item">
        <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
            data-bs-target="#in" aria-expanded="false" aria-controls="in">
            <i class='bx bxs-school'></i>
            <span>Văn bản nội bộ</span>
        </a>
        <ul id="up" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
            <li class="sidebar-item">
                <a href="{{URL::to('/pages/internal/vaosoin')}}" class="sidebar-link">Vào sổ văn bản</a>
            </li>
            <li class="sidebar-item">
                <a href="{{URL::to('/pages/internal/dsvbin')}}" class="sidebar-link">Danh sách văn bản</a>
            </li>
            <li class="sidebar-item">
                <a href="{{URL::to('/pages/internal/baocaoin')}}" class="sidebar-link">Báo cáo văn bản</a>
            </li>
        </ul>
    </li>
    <li class="sidebar-item">
        <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
            data-bs-target="#report" aria-expanded="false" aria-controls="report">
            <i class="lni lni-popup"></i>
            <span>Báo cáo văn bản</span>
        </a>
        <ul id="report" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
            <li class="sidebar-item">
                <a href="{{URL::to('/pages/report_text/vbden')}}" class="sidebar-link">Báo cáo văn bản đến</a>
            </li>
            <li class="sidebar-item">
                <a href="{{URL::to('/pages/report_text/vbht')}}" class="sidebar-link">Văn bản hoành thành</a>
            </li>
            <li class="sidebar-item">
                <a href="{{URL::to('/pages/report_text/vbqh')}}" class="sidebar-link">Văn bản quá hạn</a>
            </li>
        </ul>
    </li>
   
</ul>
<div class="sidebar-footer">
    <a href="#" class="sidebar-link">
        <i class="lni lni-exit"></i>
        <span>Logout</span>
    </a>
</div>

@endsection
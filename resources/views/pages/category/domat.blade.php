<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Egov_Haui</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="icon" href="https://cdn-001.haui.edu.vn//img/logo-haui-size.png" type="image/png">
	<link rel="stylesheet" href="{{ asset('public/frontend/css/home.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=list" />
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar" class="expand">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    {{-- <i class="lni lni-grid-alt"></i> --}}
                <img src="https://cdn-001.haui.edu.vn//img/logo-haui-size.png" width="25px" alt="logo" class="logo">
                </button>
                <div class="sidebar-logo">
                    <a href="{{URL::to('/home')}}">Haui_Egov</a>
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
                            <a href="{{URL::to('/pages/category/dokhan')}}" class="sidebar-link">
                                <span>ㅤ</span>
                                <i class='bx bxs-chevron-right' ></i>
                                <span>Độ khẩn</span> 
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{URL::to('/pages/category/domat')}}" class="sidebar-link">
                                <span>ㅤ</span>
                                <i class='bx bxs-chevron-right' ></i>
                                <span>Độ mật</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{URL::to('/pages/category/dvlinhvuc')}}" class="sidebar-link">
                                <span>ㅤ</span>
                                <i class='bx bxs-chevron-right' ></i>
                                <span>Đơn vị lính vực</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{URL::to('/pages/category/linhvuc')}}" class="sidebar-link">
                                <span>ㅤ</span>
                                <i class='bx bxs-chevron-right' ></i>
                                <span>Lĩnh vực</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{URL::to('/pages/category/loaivb')}}" class="sidebar-link">
                                <span>ㅤ</span>
                                <i class='bx bxs-chevron-right' ></i>
                                <span>Loại văn bản</span></a>
                        </li><li class="sidebar-item">
                            <a href="{{URL::to('/pages/category/nguoiky')}}" class="sidebar-link">
                                <span>ㅤ</span>
                                <i class='bx bxs-chevron-right' ></i>
                                <span>Độ mật</span></a>
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
                            <a href="{{URL::to('/pages/incomingtext/vaoso')}}" class="sidebar-link">
                                 <span>ㅤ</span>
                                <i class='bx bxs-chevron-right' ></i>
                                <span>Vào sổ văn bản</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{URL::to('/pages/incomingtext/chuyenvb')}}" class="sidebar-link">
                                 <span>ㅤ</span>
                                <i class='bx bxs-chevron-right' ></i>
                                <span>Trình chuyển văn bản</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{URL::to('/pages/incomingtext/butphe')}}" class="sidebar-link">
                                 <span>ㅤ</span>
                                <i class='bx bxs-chevron-right' ></i>
                                <span>Bút phê văn bản</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{URL::to('/pages/incomingtext/xuly')}}" class="sidebar-link">
                                 <span>ㅤ</span>
                                <i class='bx bxs-chevron-right' ></i>
                                <span>Xử lý văn bản</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{URL::to('/pages/incomingtext/theodoi')}}" class="sidebar-link">
                                 <span>ㅤ</span>
                                <i class='bx bxs-chevron-right' ></i>
                                <span>Theo dõi văn bản</span></a>
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
                            <a href="{{URL::to('/pages/textaway/vaosodi')}}" class="sidebar-link">
                                <span>ㅤ</span>
                                <i class='bx bxs-chevron-right' ></i>
                                <span>Vào sổ văn bản</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{URL::to('/pages/textaway/dsvbdi')}}" class="sidebar-link">
                                <span>ㅤ</span>
                                <i class='bx bxs-chevron-right' ></i>
                                <span>Danh sách văn bản</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{URL::to('/pages/textaway/baocaodi')}}" class="sidebar-link">
                                <span>ㅤ</span>
                                <i class='bx bxs-chevron-right' ></i>
                                <span>Báo cáo văn bản</span></a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#in" aria-expanded="false" aria-controls="in">
                        <i class='bx bxs-school'></i>
                        <span>Văn bản nội bộ</span>
                    </a>
                    <ul id="in" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{URL::to('/pages/internal/vaosoin')}}" class="sidebar-link">
                                 <span>ㅤ</span>
                                <i class='bx bxs-chevron-right' ></i>
                                <span>Vào sổ văn bản</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{URL::to('/pages/internal/dsvbin')}}" class="sidebar-link">
                                 <span>ㅤ</span>
                                <i class='bx bxs-chevron-right' ></i>
                                <span>Danh sách văn bản</span> </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{URL::to('/pages/internal/baocaoin')}}" class="sidebar-link">
                                 <span>ㅤ</span>
                                <i class='bx bxs-chevron-right' ></i>
                               <span>Báo cáo văn bản</span></a>
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
                            <a href="{{URL::to('/pages/report_text/vbden')}}" class="sidebar-link">
                                <span>ㅤ</span>
                                <i class='bx bxs-chevron-right' ></i>
                               <span>Báo cáo văn bản đến</span>
                                </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{URL::to('/pages/report_text/vbht')}}" class="sidebar-link">
                                <span>ㅤ</span>
                                <i class='bx bxs-chevron-right' ></i>
                               <span>Văn bản hoành thành</span>
                                </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{URL::to('/pages/report_text/vbqh')}}" class="sidebar-link">
                                <span>ㅤ</span>
                                <i class='bx bxs-chevron-right' ></i>
                               <span>Văn bản quá hạn</span>
                                </a>
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
            
        </aside>
        <div class="main p-3">
            <div class="head-title">
				<div class="left">
					<h1>Quản lý văn bản</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Quản lý danh mục</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Độ mật</a>
						</li>
					</ul>
				</div>
				
			</div>
        
        
        {{-- <include src="{{ asset('./public/frontend/src/category/dokhan.html') }}"></include> --}}
        <div id="includecontent"></div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(function () {
                $("#includecontent").load("{{ asset('public/frontend/src/category/domat.html') }}");
            });
        </script>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="{{ asset('public/frontend/js/home.js') }}"></script>
</body>

</html>
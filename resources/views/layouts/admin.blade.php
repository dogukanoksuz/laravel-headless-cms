@extends('layouts.dogukan')

@section('content')
<br />
    <main id="Main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2">
                    <div class="card">
                        <ul class="list-group">
                            <a href="https://dogukan.dev">
                                <li class="list-group-item"><i class="fas fa-home"></i> Doğukan Öksüz
                                </li>
                            </a>
                            <a href="{{ route('admin') }}">
                                <li class="list-group-item"><i class="fas fa-sliders-h"></i> Admin</li>
                            </a>
                        </ul>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-edit"></i> Yazı Ayarları
                            <button class="btn btn-link collapsed float-right btn-sm" data-toggle="collapse"
                                    data-target="#postSettings" style="padding: 0; color: #fff">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <ul class="list-group collapse" id="postSettings">
                            <a href="{{ route('posts.create') }}">
                                <li class="list-group-item"><i class="fas fa-plus"></i> Yeni Yazı Ekle</li>
                            </a>
                            <a href="{{ route('posts.index') }}">
                                <li class="list-group-item"><i class="fas fa-pencil-alt"></i> Yazılar</li>
                            </a>
                        </ul>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-folder"></i> Dosya Yöneticisi
                            <button class="btn btn-link collapsed float-right btn-sm" data-toggle="collapse"
                                    data-target="#fileSettings" style="padding: 0; color: #fff">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <ul class="list-group collapse" id="fileSettings">
                            <a data-featherlight="iframe" data-featherlight-iframe-width="1700"
                               data-featherlight-iframe-height="800"
                               href="{{ route('unisharp.lfm.show') }}?field_name=&type=Images">
                                <li class="list-group-item"><i class="fas fa-image"></i> Resimler</li>
                            </a>
                            <a data-featherlight="iframe" data-featherlight-iframe-width="1700"
                               data-featherlight-iframe-height="800"
                               href="{{ route('unisharp.lfm.show') }}?field_name=&type=Files">
                                <li class="list-group-item"><i class="fas fa-folder-open"></i> Dosyalar</li>
                            </a>
                        </ul>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-folder"></i> Kategori Ayarları
                            <button class="btn btn-link collapsed float-right btn-sm" data-toggle="collapse"
                                    data-target="#categorySettings" style="padding: 0; color: #fff">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <ul class="list-group collapse" id="categorySettings">
                            <a href="{{ route('categories.create') }}">
                                <li class="list-group-item"><i class="fas fa-plus"></i> Yeni Kategori Ekle</li>
                            </a>
                            <a href="{{ route('categories.index') }}">
                                <li class="list-group-item"><i class="fas fa-folder-open"></i> Kategoriler</li>
                            </a>
                        </ul>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-edit"></i> Sayfa Ayarları
                            <button class="btn btn-link collapsed float-right btn-sm" data-toggle="collapse"
                                    data-target="#pageSettings" style="padding: 0; color: #fff">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <ul class="list-group collapse" id="pageSettings">
                            <a href="{{ route('pages.create') }}">
                                <li class="list-group-item"><i class="fas fa-plus"></i> Yeni Sayfa Ekle</li>
                            </a>
                            <a href="{{ route('pages.index') }}">
                                <li class="list-group-item"><i class="fas fa-pencil-alt"></i> Sayfalar</li>
                            </a>
                        </ul>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-user"></i> Kullanıcılar
                            <button class="btn btn-link collapsed float-right btn-sm" data-toggle="collapse"
                                    data-target="#userSettings" style="padding: 0; color: #fff">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <ul class="list-group collapse" id="userSettings">
                            <a href="{{ route('users.create') }}">
                                <li class="list-group-item"><i class="fas fa-plus"></i> Yeni Kullanıcı Ekle</li>
                            </a>
                            <a href="{{ route('users.index') }}">
                                <li class="list-group-item"><i class="fas fa-user-edit"></i> Kullanıcı Listesi</li>
                            </a>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-10">
                    @yield('adminContent')
                </div>
            </div>
        </div>
    </main>
@endsection
@section('scripts')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dist/js/app.js') }}" type="text/javascript"></script>
    <script>
        $('#lfm').filemanager('image', {prefix: '/filemanager'});
        $('#input-tags').tagsInput();
    </script>
@endsection
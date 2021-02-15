<form id="logout-form" action="{{ route('murid.logout') }}" method="POST" style="display: none;">
    @csrf
</form>
<div class="wrapper wrapper-full-page ">
    <div class="full-page register-page section-image"     >
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    <h1 class="text-center">Status Siswa Non Aktif</h1>
                    <div class="text-center">
                    <a class="btn btn-danger" href="{{ route('murid.logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                    Logout</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
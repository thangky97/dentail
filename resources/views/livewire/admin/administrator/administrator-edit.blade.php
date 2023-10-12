<div class="main-content app-content">
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <h1 class="page-title fw-semibold fs-18 mb-0">Sửa admin</h1>
        </div>
        <!-- Page Header Close -->
        <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-body add-products p-0">
                        <form>
                            @csrf
                            <div class="p-4">
                                <div class="row gx-5">
                                    <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-6">
                                        <div class="card custom-card shadow-none mb-0 border-0">
                                            <div class="card-body p-0">
                                                <div class="row gy-3">
                                                    <div class="col-xl-12">
                                                        <label for="fullname" class="form-label">Họ và tên <span
                                                                style='color:red;'>
                                                                *</span></label>
                                                        <input type="text" id="fullname" class="form-control"
                                                            wire:model.defer="fullname">
                                                        @error('fullname')
                                                            <div>
                                                                <p class="text-danger">{{ $message }}</p>
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <label for="gender" class="form-label">Giới tính</label>
                                                        <select wire:model="gender" class="form-control">
                                                            @foreach($genderObject as $gender)
                                                                <option value="{{ $gender['value'] }}">{{ $gender['label'] }}</option>
                                                            @endforeach
                                                        </select> 
                                                        @error('gender')
                                                            <div>
                                                                <p class="text-danger">{{ $message }}</p>
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <label for="phone" class="form-label">Số điện
                                                            thoại <span style='color:red;'> *</span></label>
                                                        <input type="text" id="phone" class="form-control"
                                                            wire:model.defer="phone">
                                                        @error('phone')
                                                            <div>
                                                                <p class="text-danger">{{ $message }}</p>
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="col-xl-12 product-documents-container">
                                                        <p class="fw-semibold mb-2 fs-14">
                                                            Ảnh
                                                        </p>
                                                        <input type="file" class="product-Images form-control mb-2"
                                                            id="avatar" wire:model.defer="avatar"
                                                            data-allow-reorder="true" />
                                                        @if ($avatar)
                                                            <img src="{{ asset($admin->avatar) ? '' . Storage::url($admin->avatar) : $admin->fullname }}"
                                                                alt="avatar" width="100">
                                                        @endif
                                                        @error('avatar')
                                                            <div>
                                                                <p class="text-danger">{{ $message }}</p>
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-6">
                                        <div class="card custom-card shadow-none mb-0 border-0">
                                            <div class="card-body p-0">
                                                <div class="row gy-4">
                                                    <div class="col-xl-12">
                                                        <label for="email" class="form-label">Email <span
                                                                style='color:red;'>
                                                                *</span></label>
                                                        <input type="text" id="email" class="form-control"
                                                            wire:model.defer="email">
                                                        @error('email')
                                                            <div>
                                                                <p class="text-danger">{{ $message }}</p>
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <label for="password" class="form-label">Mật khẩu <span
                                                                style='color:red;'>
                                                                *</span></label>
                                                        <input type="password" id="password" class="form-control"
                                                            wire:model.defer="password">
                                                        @error('password')
                                                            <div>
                                                                <p class="text-danger">{{ $message }}</p>
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <label for="status" class="form-label">Trạng
                                                            thái</label>
                                                        <select wire:model="status" class="form-control">
                                                            @foreach ($statusObject as $status)
                                                                <option value="{{ $status['value'] }}">
                                                                    {{ $status['label'] }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('status')
                                                            <div>
                                                                <p class="text-danger">{{ $message }}</p>
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <label for="role" class="form-label">Quyền</label>
                                                        <select class="form-control" data-trigger id="role"
                                                            wire:model.defer="role">
                                                            <option value="1"
                                                                @if ($isUpdate && $role == 1) selected @endif>Admin
                                                            </option>
                                                        </select>
                                                        @error('role')
                                                            <div>
                                                                <p class="text-danger">{{ $message }}</p>
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 py-3 border-top border-block-start-dashed d-sm-flex justify-content-end">
                                <button wire:click.prevent="update" type="button" class="btn btn-primary-light m-1">
                                    Cập nhật<i class="bi bi-clipboard ms-2"></i>
                                </button>
                                <a href="{{ route('route_BackEnd_Administrators_List') }}"
                                    class="btn btn-success-light m-1">
                                    Quay lại<i class="bi bi-forward ms-2"></i>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--End::row-1 -->
    </div>
</div>
<!-- End::app-content -->

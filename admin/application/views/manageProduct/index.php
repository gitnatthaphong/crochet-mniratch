<div class="container-fluid py-1 pb-4 px-3">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
      <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="<?= LINK ?>">หน้าหลัก</a></li>
      <li class="breadcrumb-item text-sm text-white active" aria-current="page"><?= $titlePage ?></li>
    </ol>
    <h6 class="font-weight-bolder text-white mb-0"><?= $titlePage ?></h6>
  </nav>
</div>

<div class="row mt-4">
  <div class="col-lg-12 mb-lg-0 mb-4">
    <div class="card ">
      <div class="card-header pb-0 p-3">
        <div class="row gap-2 mt-3 justify-content-center">
            <div class="col-12 col-sm-8">
                <input type="text" name="stext" class="form-control" id="stext" placeholder="ค้นหา">
            </div>
            <div class="col-2">
                <div class="d-flex gap-2 justify-content-center">
                    <button type="button" class="btn btn-search btn-primary" title="ค้นหา">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                    
                    <button type="button" class="btn btn-search btn-outline-primary" title="ล้างค่า">
                        <i class="fa-solid fa-rotate"></i>
                    </button>
                </div>
            </div>
        </div>
      </div>

      <div class="container mt-3">
        <div class="table-responsive">
            <table class="table align-items-center ">
            <tbody>
                <tr>
                <td class="w-30">
                    <div class="d-flex px-2 py-1 align-items-center">
                    <div>
                        <img src="<?= ASSETS_PATH ?>img/icons/flags/US.png" alt="Country flag">
                    </div>
                    <div class="ms-4">
                        <p class="text-xs font-weight-bold mb-0">Country:</p>
                        <h6 class="text-sm mb-0">United States</h6>
                    </div>
                    </div>
                </td>
                <td>
                    <div class="text-center">
                    <p class="text-xs font-weight-bold mb-0">Sales:</p>
                    <h6 class="text-sm mb-0">2500</h6>
                    </div>
                </td>
                <td>
                    <div class="text-center">
                    <p class="text-xs font-weight-bold mb-0">Value:</p>
                    <h6 class="text-sm mb-0">$230,900</h6>
                    </div>
                </td>
                <td class="align-middle text-sm">
                    <div class="col text-center">
                    <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                    <h6 class="text-sm mb-0">29.9%</h6>
                    </div>
                </td>
                </tr>
                <tr>
                <td class="w-30">
                    <div class="d-flex px-2 py-1 align-items-center">
                    <div>
                        <img src="<?= ASSETS_PATH ?>img/icons/flags/DE.png" alt="Country flag">
                    </div>
                    <div class="ms-4">
                        <p class="text-xs font-weight-bold mb-0">Country:</p>
                        <h6 class="text-sm mb-0">Germany</h6>
                    </div>
                    </div>
                </td>
                <td>
                    <div class="text-center">
                    <p class="text-xs font-weight-bold mb-0">Sales:</p>
                    <h6 class="text-sm mb-0">3.900</h6>
                    </div>
                </td>
                <td>
                    <div class="text-center">
                    <p class="text-xs font-weight-bold mb-0">Value:</p>
                    <h6 class="text-sm mb-0">$440,000</h6>
                    </div>
                </td>
                <td class="align-middle text-sm">
                    <div class="col text-center">
                    <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                    <h6 class="text-sm mb-0">40.22%</h6>
                    </div>
                </td>
                </tr>
                <tr>
                <td class="w-30">
                    <div class="d-flex px-2 py-1 align-items-center">
                    <div>
                        <img src="<?= ASSETS_PATH ?>img/icons/flags/GB.png" alt="Country flag">
                    </div>
                    <div class="ms-4">
                        <p class="text-xs font-weight-bold mb-0">Country:</p>
                        <h6 class="text-sm mb-0">Great Britain</h6>
                    </div>
                    </div>
                </td>
                <td>
                    <div class="text-center">
                    <p class="text-xs font-weight-bold mb-0">Sales:</p>
                    <h6 class="text-sm mb-0">1.400</h6>
                    </div>
                </td>
                <td>
                    <div class="text-center">
                    <p class="text-xs font-weight-bold mb-0">Value:</p>
                    <h6 class="text-sm mb-0">$190,700</h6>
                    </div>
                </td>
                <td class="align-middle text-sm">
                    <div class="col text-center">
                    <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                    <h6 class="text-sm mb-0">23.44%</h6>
                    </div>
                </td>
                </tr>
                <tr>
                <td class="w-30">
                    <div class="d-flex px-2 py-1 align-items-center">
                    <div>
                        <img src="<?= ASSETS_PATH ?>img/icons/flags/BR.png" alt="Country flag">
                    </div>
                    <div class="ms-4">
                        <p class="text-xs font-weight-bold mb-0">Country:</p>
                        <h6 class="text-sm mb-0">Brasil</h6>
                    </div>
                    </div>
                </td>
                <td>
                    <div class="text-center">
                    <p class="text-xs font-weight-bold mb-0">Sales:</p>
                    <h6 class="text-sm mb-0">562</h6>
                    </div>
                </td>
                <td>
                    <div class="text-center">
                    <p class="text-xs font-weight-bold mb-0">Value:</p>
                    <h6 class="text-sm mb-0">$143,960</h6>
                    </div>
                </td>
                <td class="align-middle text-sm">
                    <div class="col text-center">
                    <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                    <h6 class="text-sm mb-0">32.14%</h6>
                    </div>
                </td>
                </tr>
            </tbody>
            </table>
        </div>
      </div>

    </div>
  </div>
</div>
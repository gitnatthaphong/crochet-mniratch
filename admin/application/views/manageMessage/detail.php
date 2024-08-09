<div class="section-header">
    <h1><?= $titlePage ?></h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="<?= LINK ?>">หน้าหลัก</a></div>
        <div class="breadcrumb-item"><a href="<?= $action_link ?>"><?= $titlePage ?></a></div>
        <div class="breadcrumb-item active"><?= $titlePageAction ?></div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4><?= $titlePageAction ?></h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 col-lg-2 col-12">
                        <h6>ชื่อ : </h6>
                    </div>
                    <div class="col-md-8 col-lg-10 col-12">
                        <p><?= $results['name'] ?></p>
                    </div>

                    <div class="col-md-4 col-lg-2 col-12">
                        <h6>อีเมล : </h6>
                    </div>
                    <div class="col-md-8 col-lg-10 col-12">
                        <p><?= $results['email'] ?></p>
                    </div>

                    <div class="col-md-4 col-lg-2 col-12">
                        <h6>รายละเอียด : </h6>
                    </div>
                    <div class="col-md-8 col-lg-10 col-12">
                        <p><?= $results['message'] ?></p>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="text-center">
                    <a class="btn btn-secondary" href="<?= $action_link ?>" data-toggle="tooltip" title="ย้อนกลับ">
                        <i class="fas fa-reply"></i>&nbsp;&nbsp;ย้อนกลับ
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>